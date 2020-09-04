<?php

namespace SwedbankPay\Api\Service\Invoice\Transaction\Request;

use SwedbankPay\Api\Service\Payment\Transaction\Resource\Response\CancellationObject;
use SwedbankPay\Api\Service\Request;

class CreateCancellation extends Request
{
    public function setup()
    {
        $this->setOperationRel('create-cancel');
        $this->setResponseResourceFQCN(CancellationObject::class);

        $this->setRequestMethod('POST');
        $this->setRequestEndpoint('/psp/invoice/payments/%s/cancellations');
    }
}
