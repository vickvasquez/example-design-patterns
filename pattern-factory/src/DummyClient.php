<?php
  namespace Factory;

  use Factory\Client;

  class DummyClient implements Client {
    public function __construct() {}

    public function send($payload, string $method) {
      echo ' Client: dummy';
      echo "\n Payload ". $payload;
      echo "\n Method: ". $method;
      echo "\n";
    }
  }
?>