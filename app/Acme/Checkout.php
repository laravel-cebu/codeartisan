<?php

class Checkout {

    public function bill(Receipt $receipt)
    {
        $this->acceptCash($receipt);
    }

    public function acceptCash($receipt)
    {
        //
    }

}