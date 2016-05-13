<?php

interface PaymentMethodInterface {
    public function acceptPayment($receipt);
}

class CashPaymentMethod implements PaymentMethodInterface {
    public function acceptPayment($receipt)
    {

    }
}

class CheckPaymentMethod implements PaymentMethodInterface {
    public function acceptPayment($receipt)
    {

    }
}

class Checkout {

    public function bill(Receipt $receipt, PaymentMethodInterface $payment)
    {
        $payment->acceptPayment($receipt);
    }

}