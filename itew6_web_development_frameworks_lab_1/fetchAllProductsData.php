<?php 
include "connection.php";

$products = [];

$sql = "SELECT * FROM products
            ORDER BY ProductID ASC;";

$result = mysqli_query($connection, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    $products[] = $row;
}

echo json_encode($products);
?>