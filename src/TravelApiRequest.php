<?php

namespace PlentyServices\TravelLibs;


class TravelApiRequest
{

  protected $apiEndpoint;
  protected $env;
  protected $token;

  /**
   * @param string $apiEndpoint
   */
  public function setApiEndpoint($apiEndpoint)
  {
    $this->apiEndpoint = $apiEndpoint;
  }

  /**
   * @return string
   */
  public function getEnv()
  {
    return $this->env;
  }

  /**
   * @param string $env
   */
  public function setEnv($env)
  {
    $this->env = $env;
  }

  /**
   * @return string
   */
  public function getToken() {
    return $this->token;
  }

  /**
   * @param string $token
   */
  public function setToken($token) {
    $this->token = $token;
  }

  public function __construct()
  {
    $this->apiEndpoint = 'https://travel-api.plenty.services';
    $this->env = 'prod';
  }

  /**
   * Send a cURL request to Travel API.
   *
   * @param $action
   * @param string $method
   * @param null $data
   * @return mixed
   * @throws \Exception
   */
  public function request($action, $method = 'GET', $data = null) {

    // Set Url.
    $url = $this->apiEndpoint . $action;
    // Add data as query params if method id GET.
    if ($method == 'GET' && !empty($data)) {
      $data = http_build_query($data);
      $url .= '?' . $data;
    }

    // Set headers.
    $headers = array(
      'Accept: application/json',
      'Authorization: Bearer ' . $this->token
    );

    if ($method != 'GET') {
      $headers[] = 'Content-Type: application/json';
    }

    /*
    dsm($url);
    dsm($headers);
    */

    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_HEADER, TRUE);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_FAILONERROR, FALSE);

    if ($method == 'POST') {
      curl_setopt($curl, CURLOPT_POST, 1);
    }
    else if ($method == 'PUT') {
      curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
    }

    if ($method != 'GET' && !empty($data)) {
      curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
    }

    if ($this->env !== 'prod') {
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
    }

    // Get response.
    $response = curl_exec($curl);

    // dump($response);

    // Split header and body from response.
    $header_size = curl_getinfo($curl, CURLINFO_HEADER_SIZE);
    $bodyJson = substr($response, $header_size);
    $http_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    // Decode
    $body = json_decode($bodyJson, true);
    $header = substr($response, 0, $header_size);

    /*
    dsm($header);
    dsm($body);
    dsm($http_code);
    */

    // Request was successful.
    if ($http_code >= 200 && $http_code < 300) {
      curl_close($curl);
      return $body;
    }
    else {
      $curlError = curl_error($curl);
      curl_close($curl);

      // Check for error in Result.
      $errorDescription = array();
      if (!empty($curlError)) {
        $errorDescription[] = 'cURL: ' . $curlError;
      }

      if (!empty($body['title'])) {
        $errorDescription[] = 'Title: ' . $body['title'];
      }

      if (!empty($body['detail'])) {
        $errorDescription[] = "Detail:\n" . $body['detail'];
      }

      throw new \Exception("Error on Travel API request with status $http_code: \n" . implode("\n", $errorDescription));
    }
  }
}

