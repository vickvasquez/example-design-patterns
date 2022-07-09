<?php
require './vendor/autoload.php';

use Factory\ClientFactory;

class NotifierService {
  private $client;

  public function __construct() {
    $factory = new ClientFactory('production');

    $this->client = $factory->create();
  }

  public function testNotifier() {
    $payload = json_encode([
      'uuid' => '70fdf75a-df91-4e1b-b9ea-e6697343c431',
      'username' => 'test',
      'role' => 'developer'
    ]);

    $this->client->post($payload);
  }
}

(new NotifierService())->testNotifier();