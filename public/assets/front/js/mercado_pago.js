/*
const publicKey = document.getElementById("mercado-pago-public-key").value;
const mercadopago = new MercadoPago(publicKey);

function loadCardForm() {
    const productCost = document.getElementById('amount').value;
    const productDescription = document.getElementById('product-description').innerText;

    const cardForm = mercadopago.cardForm({
        amount: productCost,
        autoMount: true,
        form: {
            id: "form-checkout",
            cardholderName: {
                id: "form-checkout__cardholderName",
                placeholder: "",
            },
            cardholderEmail: {
                id: "form-checkout__cardholderEmail",
                placeholder: "",
            },
            cardNumber: {
                id: "form-checkout__cardNumber",
                placeholder: "",
            },
            cardExpirationMonth: {
                id: "form-checkout__cardExpirationMonth",
                placeholder: "MM",
            },
            cardExpirationYear: {
                id: "form-checkout__cardExpirationYear",
                placeholder: "YY",
            },
            securityCode: {
                id: "form-checkout__securityCode",
                placeholder: "",
            },
            installments: {
                id: "form-checkout__installments",
                placeholder: "Parcelas",
            },
            identificationType: {
                id: "form-checkout__identificationType",
            },
            identificationNumber: {
                id: "form-checkout__identificationNumber",
                placeholder: "Identification number",
            },
            issuer: {
                id: "form-checkout__issuer",
                placeholder: "Issuer",
            },
        },
        callbacks: {
            onFormMounted: error => {
                if (error)
                    return console.warn("Form Mounted handling error: ", error);
                console.log("Form mounted");
            },

            onSubmit: event => {
                event.preventDefault();
                document.getElementById("form-checkout__submit").disabled = true;
                document.getElementById("form-checkout__submit").value = "Processando...";

               const back_end_url = document.getElementById("mercado-pago-back-end-url").value;
               const back_end_token = localStorage.getItem("customerToken");
               const clientid = localStorage.getItem("customerToken");
               const clientsecret = localStorage.getItem("customerToken");

                const {
                    paymentMethodId,
                    issuerId,
                    cardholderEmail: email,
                    amount,
                    token,
                    installments,
                    identificationNumber,
                    identificationType,
                } = cardForm.getCardFormData();

                fetch(back_end_url, {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Authorization": "Bearer " + back_end_token,
                    },
                    body: JSON.stringify({
                        token,
                        issuerId,
                        paymentMethodId,
                        transactionAmount: Number(amount),
                        installments: Number(installments),
                        description: productDescription,
                        payer: {
                            email,
                            identification: {
                                type: identificationType,
                                number: identificationNumber,
                            },
                        },
                    }),
                })
                    .then(response => {
                        return response.json();
                    })
                    .then(result => {
                        if(!result.hasOwnProperty("error_message")) {
                            document.getElementById("success-response").style.display = "block";
                            document.getElementById("payment-id").innerText = result.id;
                            document.getElementById("payment-status").innerText = result.status;
                            document.getElementById("payment-detail").innerText = result.detail;
                        } else {
                            document.getElementById("error-message").textContent = result.error_message;
                            document.getElementById("fail-response").style.display = "block";
                        }

                        $('.container__payment').fadeOut(500);
                        setTimeout(() => { $('.container__result').show(500).fadeIn(); }, 500);
                    })
                    .catch(error => {
                        alert("Unexpected error\n"+JSON.stringify(error));
                    });
            },

            onFetching: (resource) => {
                console.log("Fetching resource: ", resource);
                const payButton = document.getElementById("form-checkout__submit");
                payButton.setAttribute('disabled', true);
                return () => {
                    payButton.removeAttribute("disabled");
                };
            },
        },
    });
};

*/
