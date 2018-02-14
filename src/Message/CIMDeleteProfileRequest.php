<?php

namespace Omnipay\AuthorizeNet\Message;

/**
 * Request to delete a customer profile.
 */
class CIMDeleteProfileRequest extends CIMAbstractRequest
{
    protected $requestType = 'deleteCustomerProfileRequest';

    public function getData()
    {
        $this->validate('customerProfileId');

        $data = $this->getBaseData();
        $data->customerProfileId = $this->getCustomerProfileId();

        return $data;
    }

    public function sendData($data)
    {
        $headers = array('Content-Type' => 'text/xml; charset=utf-8');
        $data = $data->saveXml();
        $httpResponse = $this->httpClient->post($this->getEndpoint(), $headers, $data)->send();

        return $this->response = new CIMDeleteProfileResponse($this, $httpResponse->getBody());
    }
}
