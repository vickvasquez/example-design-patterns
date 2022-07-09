<?php
  namespace Factory;

  interface Client {
    public function send($payload, string $method);
  }
?>