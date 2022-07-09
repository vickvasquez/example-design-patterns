<?php
namespace Factory;

use Factory\Notifier;
use Factory\HTTPClient;
use Factory\DummyClient;

class Enviroments {
  public const  LOCAL = 'local';

  public const PRODUCTION = 'production';
}

class ClientFactory {
  private string $environment = '';

  public function __construct(string $environment) {
    $this->environment = $environment;
  }

  public function create() {
    $client = new HTTPClient();

    if ($this->environment === Enviroments::LOCAL) {
      $client = new DummyClient();
    }

    return new Notifier($client);
  }
}