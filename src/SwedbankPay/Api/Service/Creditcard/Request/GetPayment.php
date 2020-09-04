<?php

namespace SwedbankPay\Api\Service\Creditcard\Request;

use SwedbankPay\Api\Service\Payment\Resource\Response\PaymentObject;
use SwedbankPay\Api\Service\Request;

class GetPayment extends Request
{
    public function setup()
    {
        $this->setRequestMethod('GET');
        $this->setResponseResourceFQCN(PaymentObject::class);

        if (!$this->getPaymentId()) {
            $this->setRequestEndpoint('/psp/creditcard/payments/%s');
        }
    }
}
