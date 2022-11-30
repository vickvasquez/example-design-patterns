<?php
function parseArgs(array $args) {
  $args = array_slice($args, 1);
  $result = [];

  foreach ($args as $arg) {
    list($name, $value) = explode('=', $arg);

    $name = str_replace('--', '', $name);

    $result[$name] = $value;
  }

  return $result;
}