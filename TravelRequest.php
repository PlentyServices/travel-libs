<?php

class TravelApi
{
    protected $apiEndpoint;
    protected $apiKey;
    protected $error;
    protected $action;
    protected $parameters;
    protected $response;
    protected $userAuth;
    protected $userContext;

    function __construct($action, $parameters = array(), $userContext = false, $userAuth = false)
    {
        $this->apiKey = '58E66190-BDDD-42EA-8D8F-D3BFBD05B91A';
        $this->apiEndpoint = 'https://travel.plenty.services';
        $this->parameters = $parameters;
        $this->action = $action;
        $this->error = false;
        $this->response = false;
        $this->userAuth = $userAuth;
        $this->userContext = $userContext;

        return $this->apiRequest();
    }

    /* Get Error */
    public function getError()
    {
        return $this->error;
    }

    private function setError($error)
    {
        $this->error = $error;
        return false;
    }

    /* API Request */
    protected function apiRequest()
    {

        if ($this->userAuth && key_exists('user', $this->parameters) && key_exists('password', $this->parameters) && key_exists('corporate', $this->parameters)) {
            $userAuth = '&user=' . $this->parameters['user'] . '&password=' . $this->parameters['password'] . '&profile=' . $this->parameters['corporate'];
        }

        if (key_exists('password', $this->parameters)) unset($this->parameters['password']);

        $parameters = json_encode($this->parameters);

        if ($this->userAuth) {
            $apiSession = '?k=' . $this->apiKey . $userAuth;
        } elseif ($this->userContext) {
            $apiSession = '?s=' . $this->userContext['access_key'] . '&a=' . $this->userContext['authority'];
        } else {
            $apiSession = '?k=' . $this->apiKey;
        }

        $url = $this->apiEndpoint . $this->action . $apiSession;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $parameters);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($parameters))
        );

        if(!$response = curl_exec($ch)){
            if ($error = curl_error($ch)) return $this->setError($error);
        }

        $this->response = json_decode($response, true);

        if ($response['error']) return $this->setError($response['error']);

        return $response;

    }

}
