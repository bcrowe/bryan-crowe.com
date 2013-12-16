<?php
App::import('Vendor', 'Mollom');

class MyMollom extends Mollom {

  public function loadConfiguration($name) {}

  public function saveConfiguration($name, $value) {}

  public function deleteConfiguration($name) {}

  public function getClientInformation() {}

  protected function request($method, $server, $path, $query = NULL, array $headers = array()) {}
}