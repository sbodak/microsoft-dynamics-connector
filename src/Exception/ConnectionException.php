<?php
namespace AAT\CRM\Exception;

class ConnectionException extends \Exception {

  private $request;
  private $response;

  public function __construct($message, $request, $response = NULL, $code = 0, \Exception $previous = NULL) {
    $this->request = $request;
    $this->response = $response;
    parent::__construct($message, $code, $previous);
  }

  public function getRequest() {
    return $this->request;
  }

}