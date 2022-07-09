<?php
namespace Factory;

use Factory\Client;

class HTTPClient implements Client {
  public function __construct() {}

  public function send($payload, string $method) {
    echo ' Client: HTTP';
    echo "\n Payload ". $payload;
    echo "\n Method: ". $method;
    echo "\n";
  }
}