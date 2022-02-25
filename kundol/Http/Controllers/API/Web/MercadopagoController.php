<?php

namespace App\Http\Controllers\API\Web;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Jobs\OrderProcess;
use Illuminate\Http\Request;
use Validator;
use URL;
use Session;
use Redirect;
use Input;
use App\Traits\ApiResponser;
use MercadoPago;
use MercadoPago\Payment;
use App\Http\Requests\OrderRequest;
use App\Repository\Web\OrderRepository;
use App\Contract\Web\OrderInterface;


class MercadopagoController extends Controller
{

    private $OrderRepository;

    public function __construct(OrderInterface $OrderRepository)
    {
        $this->OrderRepository = $OrderRepository;
    }

    public function paymentWithMercadopago(Request $request)
    {

        $data = $request->all();


        // get mercado pago settings
        $payment_settings =  \App\Models\Admin\PaymentMethodSetting::where( ['payment_method_id' => 12, 'key' => "ACCESS_TOKEN"] )->first();

        MercadoPago\SDK::setAccessToken($payment_settings->value); // Either Production or SandBox AccessToken

        $payment = new MercadoPago\Payment();

        $payment->transaction_amount = 40;
        $payment->token = $data['token'];
        $payment->description = "Ergonomic Silk Shirt";
        $payment->installments = $data['installments'];
        $payment->payment_method_id = $data['paymentMethodId'];
        $payment->payer = array(
          "email" =>  $data['payer']['email']
        );

        $payment->save();


        if ($payment->status== 'approved') {

            $parms = $request->all();
            $parms['payment_id'] = $payment->id;
            $order = OrderProcess::dispatchNow($parms);

            // update order
            $up = array(
                'payment_status' => 'Complete',
                'order_status' => 'Complete',
            );
            $order->update($up);

            return response()->json(['status' => 'success', 'message' => 'Pagamento realizado com sucesso', 'data' => $order->id]);
        }else{
            return response()->json(['status' => 'error', 'message' => 'Erro ao efetuar pagamento', 'data' => $payment->error->message]);
        }

    }

}
