<?php

namespace SwedbankPay\Api\Service\Vipps\Transaction\Request;

use SwedbankPay\Api\Service\Payment\Transaction\Resource\Response\TransactionsObject;
use SwedbankPay\Api\Service\Request;

class GetTransactions extends Request
{
    public function setup()
    {
        $this->setRequestMethod('GET');
        $this->setOperationRel('transactions');
        $this->setResponseResourceFQCN(TransactionsObject::class);

        $this->setRequestEndpoint('/psp/vipps/payments/%s/transactions');
    }
}
