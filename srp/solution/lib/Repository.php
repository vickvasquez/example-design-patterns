<?php
namespace SRP\Solution;

use PDO;

class Repository {
  private $dbPath = './db/products.db';
  private $database = null;

  public function __construct() {
    $this->initDatabase();
    $this->createTable();
  }

  private function initDatabase() {
    $this->database = new PDO("sqlite:".$this->dbPath);
    $this->database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  }

  public function addProduct($id, $name, $price) {
    $query = $this->database->prepare("INSERT INTO products(id, name, price) VALUES(:id, :name, :price);");

    $query->bindParam(":id", $id);
    $query->bindParam(":name", $name);
    $query->bindParam(":price", $price);

    $query->execute();
  }

  public function listProducts() {
    $data = $this->database->query("SELECT * FROM products");

    return $data->fetchAll(PDO::FETCH_ASSOC);
  }

  private function createTable() {
    $table = 'CREATE TABLE IF NOT EXISTS products (id varchar(255) NOT NULL PRIMARY KEY, name varchar(255) UNIQUE NOT NULL, price DECIMAL(2,2) NOT NULL)';

    $this->database->exec($table);
  }
}
?>