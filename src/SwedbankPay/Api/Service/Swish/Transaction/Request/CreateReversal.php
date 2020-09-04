<?php

namespace SwedbankPay\Api\Service\Swish\Transaction\Request;

use SwedbankPay\Api\Service\Payment\Transaction\Resource\Response\ReversalObject;
use SwedbankPay\Api\Service\Request;

class CreateReversal extends Request
{
    public function setup()
    {
        $this->setOperationRel('create-reversal');
        $this->setResponseResourceFQCN(ReversalObject::class);

        $this->setRequestMethod('POST');
        $this->setRequestEndpoint('/psp/swish/payments/%s/reversals');
    }
}
