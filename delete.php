<?php
include('sql.php');

if (isset($_GET['id'])) {
    $id =  $_GET['id'];
    $query = "DELETE FROM data_for_form WHERE ID=$id ";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Failed." . mysqli_error($conn));
    } else {
        header("Location: ../code/table.php");
    }
}