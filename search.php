<?php
require_once 'database.php';


$sql = "select * from product where name like '%".$_GET['term']."%'";
$result = $conn->query($sql);
$products = array();
 while($product = $result->fetch_assoc()) {
array_push($products, $product['name']);
  }
echo json_encode($products);
?>