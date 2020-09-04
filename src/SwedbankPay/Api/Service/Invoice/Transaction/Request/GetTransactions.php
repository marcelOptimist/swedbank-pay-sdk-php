<?php

namespace SwedbankPay\Api\Service\Invoice\Transaction\Request;

use SwedbankPay\Api\Service\Payment\Transaction\Resource\Response\TransactionsObject;
use SwedbankPay\Api\Service\Request;

class GetTransactions extends Request
{
    public function setup()
    {
        $this->setRequestMethod('GET');
        $this->setOperationRel('transactions');
        $this->setResponseResourceFQCN(TransactionsObject::class);

        $this->setRequestEndpoint('/psp/invoice/payments/%s/transactions');
    }
}
