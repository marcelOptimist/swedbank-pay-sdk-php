<?php

namespace SwedbankPay\Api\Service\Vipps\Transaction\Request;

use SwedbankPay\Api\Service\Payment\Transaction\Resource\Response\AuthorizationObject;
use SwedbankPay\Api\Service\Request;

class CreateAuthorization extends Request
{
    public function setup()
    {
        $this->setRequestMethod('POST');
        $this->setOperationRel('authorizations');
        $this->setResponseResourceFQCN(AuthorizationObject::class);

        $this->setRequestEndpoint('/psp/vipps/payments/%s/authorizations');
    }
}
