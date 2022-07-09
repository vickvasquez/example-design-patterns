<?php

namespace Factory;

use Factory\Client;

class Notifier {
  private Client $client;

  public function __construct(Client $client) {
    $this->client = $client;
  }

  public function post($payload) {
    return $this->client->send($payload, 'post');
  }

  public function get($payload) {
    return $this->client->send($payload, 'get');
  }

  public function put($payload) {
    return $this->client->send($payload, 'put');
  }

  public function delete($payload) {
    return $this->client->send($payload, 'delete');
  }
}