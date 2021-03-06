<?php

namespace PlentyServices\TravelLibs;


class TravelApiRequest
{
    protected $apiEndpoint;
    protected $accessKey;
    protected $error;
    protected $action;
    protected $parameters;
    protected $response;
    protected $userAuth;
    protected $authorityContext;
    protected $files;
    protected $env;

    public function __construct($action = false, $parameters = array(), $authorityContext = false)
    {
        $this->apiEndpoint = 'travel.plenty.services';
        $this->authorityContext = $authorityContext;
        $this->parameters = $parameters;
        $this->files = array();
        $this->action = $action;
        $this->error = false;
        $this->response = false;
        $this->env = 'prod';
    }
    
    /* Set access key */
    public function setAccessKey($key)
    {
        $this->accessKey = $key;
    }

    /* Set API endpoint */
    public function setApiEndpoint($endpoint)
    {
        $this->apiEndpoint = $endpoint;
    }
    
    /* Set Action */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /* Set Parameters */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;
    }

    /* Add Parameters */
    public function addParameter($name, $parameter)
    {
        $this->parameters[$name] = $parameter;
    }

    /* Add JSON Document */
    public function addJsonDocument($json_document)
    {
        $this->addParameter('json_document', $json_document);
    }

    /* Add file */
    public function addFile($post_name, $name, $mimetype = '')
    {
        $this->files[] = array(
            'name' => $name,
            'mimetype' => $mimetype,
            'post_name' => $post_name
        );
    }

    /* user auth, obtain user access key */
    public function setUserAuth($user, $realm, $password)
    {
        $this->userAuth = array(
            'user' => $user,
            'realm' => $realm,
            'password' => $password
        );
    }

    /* Set User context */
    public function setAuthorityContext($authority)
    {
        $this->authorityContext = $authority;
    }
    
    /* Get Error */
    public function getError()
    {
        return $this->error;
    }
    
    /* Get Result */
    public function getResponse()
    {
        return $this->response;
    }

    /* Set Error */
    private function setError($error)
    {
        $this->error = $error;
        return false;
    }

    /* Set env */
    public function setEnv($env)
    {
        $this->env = $env;
    }

    /* Set DEV mode */
    public function devMode()
    {
        $this->env = 'dev';
    }

    /* API Request */
    public function request()
    {

        if ($this->authorityContext) {
            $context = '?k=' . $this->accessKey . '&a=' . $this->authorityContext;
        } else {
            $context = '?k=' . $this->accessKey;
        }

        $url = 'https://' . $this->apiEndpoint . $this->action . $context;

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, 1);

        if ($this->userAuth) {
            $this->parameters = array_merge($this->parameters, $this->userAuth);
        }

        if($this->env !== 'prod')
        {
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

            $this->parameters['env'] = $this->env;
        }

        foreach ($this->files as $file)
        {
            $this->parameters[$file['post_name']] = new CURLFile($file['name'], $file['mimetype']);
        }

        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->parameters);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        if(!$response = curl_exec($ch)){
            if ($error = curl_error($ch)) return $this->setError($error);
        }

        if($this->response = json_decode($response, true))
        {
            if ($this->response['error']) return $this->setError($this->response['error']);
        } else {
            $this->response = $response;
        }

        return $this->response;

    }

}

