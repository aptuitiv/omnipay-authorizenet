<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Authorize.Net CIM Delete customer Response
 */
class CIMDeleteProfileResponse extends CIMAbstractResponse
{
    protected $responseType = 'deleteCustomerProfileResponse';
}
