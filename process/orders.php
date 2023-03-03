<?php
include_once("conn.php");

$method = $_SERVER['REQUEST_METHOD'];

if ($method === "GET") {
  $pedidosQuery = $conn->query("SELECT * FROM pedidos;");

  $pedidos = $pedidosQuery->fetchAll();

  $pizzas = [];

  foreach ($pedidos as $pedido) {
    $pizza = [];
    // Resgatando a pizza
    $pizza["id"] = $pedido["pizza_id"];
    $pizzaQuery = $conn->prepare("SELECT * FROM pizzas WHERE id = :pizza_id");
    $pizzaQuery->bindParam(":pizza_id", $pizza["id"]);
    $pizzaQuery->execute();

    $pizzaData = $pizzaQuery->fetch(PDO::FETCH_ASSOC);
  }
} else if ($method === "POST") {
}
