@extends('layouts.master')
@section('content')

    <!-- About-us Content -->
    <section class="pro-content empty-content" style="padding-top:35px;">
        <div class="container">

            <div class="row">
                <div class="col-12">
                    <div class="" >
                        <h2 style="font-size: 50px; text-align:center;"><i class="far fa-check-circle"></i></h2>
                        <h1 style="font-size: 22px; text-align:center;">Agora é só enviar seu pedido via WhatsApp</h1>

                        <div  class="whatsapp_pedido">
                            <h4 class="text-leftt">Pedido  #{{ $order->id }}</h4>

                            <table>

                                @foreach ($order->detail as $item)
                                <tr>

                                      <td>{{ $item->qty .' x '.$item->product->detail[0]->title.' (R$ '.$item->product_price.')' }} </td>
                                      <td> R$ {{ $item->total }} </td>
                                </tr>
                                @endforeach

                                <tr>
                                    <td>Total </td>
                                    <td> R$ {{ $order->order_price }}</td>
                                </tr>
                            </table>
                                <br/>
                            <p class="obs">Observaçãoes: {{ $order->order_notes }}</p>
                            <p class="entrega"><strong>Para entregar:</strong>
                                <br>
                                <span>Rua:  {{ $order->delivery_street_aadress }}</span>
                                <br>
                                <span>Bairro: {{ $order->delivery_suburb }}</span>
                                <br>
                                <span>Cidade:  {{ $order->delivery_city }}</span>
                                <br>
                                <span>Estado:  {{ $order->billing_state1->name }}</span> <br>
                                <span>CEP:  {{ $order->delivery_postcode }}</span>
                            </p>
                            <p class="contato">Contato: {{ $order->delivery_phone }}</p>
                            <p class="pagamento"><strong>Forma de Pagamento:</strong> Cartão de crédito</p>
                            <p class="nome"><strong>Nome:</strong> {{ $order->customer->first_name.' '. $order->customer->last_name }}</p>





                            @php


                                $pedido_whatsapp =  'Olá, meu nome é *'.$order->customer->first_name.' '. $order->customer->last_name .'*, esse é o meu pedido feito na *ANDRESSA NAILS COSMETICOS LTDA*  \n ';
                                $pedido_whatsapp .=  '-------- \n ';
                                    foreach ($order->detail as $item){
                                        $pedido_whatsapp .=  $item->qty .' Un. de *'.$item->product->detail[0]->title.'*  R$ '.$item->product_price ;
                                        $pedido_whatsapp .= ' \n ';
                                    }
                                $pedido_whatsapp .=  '-------- \n ';
                                $pedido_whatsapp .=  'Quantidade de itens: *'.count($order->detail) .'* \n';
                                $pedido_whatsapp .=  '-------- \n ';
                                $pedido_whatsapp .=  'Valor da entrega: *R$ '.$order->shipping_cost .'* \n ';
                                $pedido_whatsapp .=  'Valor Total: *R$ '. $order->order_price .'* \n ';
                                $pedido_whatsapp .=  'Forma de pagamento: *Cartão de Crédito* \n ';
                                $pedido_whatsapp .=  'Pagamento: *Online* \n ';

                                $pedido_whatsapp .=  '-------- \n ';
                                $pedido_whatsapp .=  'Para entregar em: *Rua* *'.$order->delivery_street_aadress .'* *'. $order->delivery_suburb .' *Cidade:* *'. $order->delivery_city .',* *Estado:* *'. $order->billing_state1->name .'* *Brasil*  *CEP:* *'. $order->delivery_postcode .'* \n ';
                                $pedido_whatsapp .=  'Contato: *'.$order->delivery_phone .'* \n ';
                                $pedido_whatsapp .=  'Número do pedido: *'.$order->id.'*';


                                $pedido_whatsapp = str_replace('\n', '%20%0A%20', $pedido_whatsapp);


                            @endphp


                            <p class="aviso"> Clique no botão abaixo para encaminhar o pedido para o WhatsApp do vendedor</p>
                            <a href="https://api.whatsapp.com/send?phone=5538998120768&text={{ $pedido_whatsapp }}" target="_blank" ><p class="whatsapp-btn text-center">Enviar via Whatsapp</p></a>
                        </div>


                    </div>
                    </p>
                </div>
            </div>

        </div>


    </section>

@endsection
@section('script')
@endsection

<style>
    .whatsapp_pedido{
        margin-top: 20px;
        margin-bottom: 20px;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px #ccc;
        width: 50%;
        margin: 0 auto;
        color: #797979;

    }

    .whatsapp_pedido p{
        color: #797979;
    }

    .whatsapp_pedido  h4{
        font-size: 16px;
        font-weight: bold;
        margin-bottom: 10px;

    }

    .whatsapp_pedido table{
        width: 100%;
        border-collapse: collapse;
        color: #797979;
        font-size: 14px;
    }

    .whatsapp_pedido .whatsapp-btn{
        background-color: #3aa825;
        color: #fff;
        padding: 10px 80px;
        border-radius: 50px;
        text-decoration: none;
        font-size: 16px;
        font-weight: bold;
        margin-top: 35px;

    }
    .whatsapp_pedido .whatsapp-btn a{

        color: #fff;


    }

</style>


<script>
    loggedIn = $.trim(localStorage.getItem("customerLoggedin"));
    if (loggedIn != '1') {
        window.location.href = "{{url('/')}}";
    }

    languageId = localStorage.getItem("languageId");
    if (languageId == null || languageId == 'null') {
        localStorage.setItem("languageId", '1');
        $(".language-default-name").html('Endlish');
        localStorage.setItem("languageName", 'English');
        languageId = 1;
    }

    cartSession = $.trim(localStorage.getItem("cartSession"));
    if (cartSession == null || cartSession == 'null') {
        cartSession = '';
    }
    loggedIn = $.trim(localStorage.getItem("customerLoggedin"));
    customerToken = $.trim(localStorage.getItem("customerToken"));
    customerId = $.trim(localStorage.getItem("customerId"));

    $(document).ready(function() {
        getCustomerOrder();
    });

    function getCustomerOrder() {
        id = '{{$id}}';
        $.ajax({
            type: 'get',
            url: "{{ url('') }}" +
                '/api/client/customer/order/' + id + '?orderDetail=1&language_id=' + languageId + '&productDetail=1&billing_country=1&billing_state=1&delivery_country=1&delivery_state=1&currency='+localStorage.getItem("currency"),
            headers: {
                'Authorization': 'Bearer ' + customerToken,
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                clientid: "{{ isset(getSetting()['client_id']) ? getSetting()['client_id'] : '' }}",
                clientsecret: "{{ isset(getSetting()['client_secret']) ? getSetting()['client_secret'] : '' }}",
            },
            beforeSend: function() {},
            success: function(data) {
                if (data.status == 'Success') {
                    const templ = document.getElementById("order-show-detail-template");
                    $("#order-show-detail").html('');
                    order = data.data.order_date.split('T');
                    $(".order-date").html(order[0]);
                    $(".order-no").html(data.data.order_id);
                    $(".order-status").html(data.data.order_status);
                    $(".order-billing-address").html(data.data.order_status);
                    $(".order-billing-detail").html(data.data.order_status);

                    $(".order-delivery-address").html(data.data.delivery_street_aadress);
                    country = state = '';
                    if(data.data.delivery_country1 != null && data.data.delivery_country1 != 'null' && data.data.delivery_country1 != ''){
                        country = ', '+data.data.delivery_country1.country_name;
                    }
                    if(data.data.delivery_state1 != null && data.data.delivery_state1 != 'null' && data.data.delivery_state1 != ''){
                        state = ', '+data.data.delivery_state1.name;
                    }
                    detail_address = data.data.delivery_street_aadress +', '+ data.data.delivery_city + state +country;
                    $(".order-delivery-detail").html(detail_address);


                    $(".order-billing-address").html(data.data.billing_street_aadress);
                    country = state = '';
                    if(data.data.billing_country1 != null && data.data.billing_country1 != 'null' && data.data.billing_country1 != ''){
                        country = ', '+data.data.billing_country1.country_name;
                    }
                    if(data.data.billing_state1 != null && data.data.billing_state1 != 'null' && data.data.billing_state1 != ''){
                        state = ', '+data.data.billing_state1.name;
                    }
                    detail_address = data.data.billing_street_aadress +', '+ data.data.billing_city + state +country;
                    $(".order-billing-detail").html(detail_address);
                    $(".order-payment-method").html(data.data.payment_method);
                    // $(".order-shipping-method").html(data.data.shipping_method);



                    if (data.data.order_detail != null && data.data.order_detail != 'null' && data.data.order_detail != '') {
                        for (k = 0; k < data.data.order_detail.length; k++) {
                            const clone = templ.content.cloneNode(true);
                            if (data.data.order_detail[k].product != null && data.data.order_detail[k].product != 'null' && data.data.order_detail[k].product != '') {
                                if (data.data.order_detail[k].product.product_type == 'variable') {
                                    if (data.data.order_detail[k].product_combination.gallary != null && data.data.order_detail[k].product_combination.gallary != 'null' && data.data.order_detail[k].product_combination.gallary != '') {
                                        clone.querySelector(".order-image").setAttribute('src',
                                            '/gallary/' + data.data.order_detail[k].product_combination.gallary.gallary_name);
                                        clone.querySelector(".order-image").setAttribute('alt', data.data.order_detail[k].product_combination.gallary.gallary_name);
                                        name = data.data.order_detail[k].product.detail[0].title +' - ';
                                        for (loop = 0; loop < data.data.order_detail[k].product_combination.combination
                                            .length; loop++) {
                                            if (data.data.order_detail[k].product_combination.combination.length - 1 == loop) {
                                                name += data.data.order_detail[k].product_combination.combination[loop].variation.detail[0].name;
                                            } else {
                                                name += data.data.order_detail[k].product_combination.combination[loop].variation.detail[0].name + '-';
                                            }
                                        }
                                        clone.querySelector(".order-product-name").innerHTML = name;
                                    }
                                } else {
                                    if (data.data.order_detail[k].product.detail != null && data.data.order_detail[k].product.detail != 'null' && data.data.order_detail[k].product.detail != '') {
                                        clone.querySelector(".order-image").setAttribute('src',
                                            '/gallary/' + data.data.order_detail[k].product.product_gallary.gallary_name);

                                            clone.querySelector(".order-image").setAttribute('alt', data.data.order_detail[k].product.product_gallary.gallary_name);

                                        clone.querySelector(".order-product-name").innerHTML = data.data.order_detail[k].product.detail[0].title;

                                    }
                                }
                            }
                            if (data.data.currency_id != null && data.data.currency_id != 'null' && data.data.currency_id != '') {
                                if (data.data.currency.symbol_position == 'left') {
                                    price = data.data.order_detail[k].product_discount ? +data.data.order_detail[k].product_discount*+data.data.currency.exchange_rate:+data.data.order_detail[k].product_price * +data.data.currency.exchange_rate;
                                    price = data.data.currency_id.code +' '+ price;
                                }
                                else{
                                    price = data.data.order_detail[k].product_discount ? +data.data.order_detail[k].product_discount *+data.data.currency.exchange_rate:+data.data.order_detail[k].product_price * +data.data.currency.exchange_rate;
                                    price = price +' '+ data.data.currency_id.code;
                                }
                            } else {
                                price = data.data.order_detail[k].product_discount ? +data.data.order_detail[k].product_discount *+data.data.currency.exchange_rate:+data.data.order_detail[k].product_price * +data.data.currency.exchange_rate;
                            }

                            if (data.data.currency != null && data.data.currency != 'null' && data.data.currency != '') {
                                if (data.data.currency.symbol_position == 'left') {
                                    price = +price * +data.data.currency.exchange_rate;
                                    clone.querySelector(".order-price").innerHTML = data.data.currency.code +' '+ price;
                                }
                                else{
                                    price = +price * +data.data.currency.exchange_rate;
                                    clone.querySelector(".order-price").innerHTML = price +' '+ data.data.currency.code;
                                }
                            }
                            clone.querySelector(".order-qty").value = data.data.order_detail[k].product_qty;
                            sub_total = data.data.order_detail[k].product_price * data.data.order_detail[k].product_qty;
                            if (data.data.currency != null && data.data.currency != 'null' && data.data.currency != '') {
                                if (data.data.currency.symbol_position == 'left') {
                                    sub_total = sub_total * +data.data.currency.exchange_rate;
                                    sub_total = data.data.currency.code +' '+ sub_total;
                                } else {
                                    sub_total = sub_total * +data.data.currency.exchange_rate;
                                    sub_total = sub_total +' '+ data.data.currency.code;
                                }
                            } else {
                                sub_total = sub_total;
                            }
                            clone.querySelector(".order-sub-price").innerHTML = sub_total;
                            $("#order-show-detail").append(clone);
                        }
                    }

                }
            },
            error: function(data) {},
        });
    }

</script>
