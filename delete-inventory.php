<?php
include('db_connection.php');

$id = $_GET['id'];

$query = "DELETE FROM inventory WHERE id = $id";

//Exeucute the query
if (mysqli_query($conn, $query)) {
    // Redirect to inventory page on success
    header("Location: /inventory-system/inventory.php?update=deleted");
    exit();
} else {
    echo "Error: " . mysqli_error($conn);
}
?>