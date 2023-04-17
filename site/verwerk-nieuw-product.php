<?php
if (!empty($_POST['naamp'])) {
    $naam = $_POST['naamp'];
    $categorie = $_POST['categoriep'];
    $prijs = $_POST['prijsp'];
    $merk = $_POST['merkp'];

    require 'database.php';

    $sql = "INSERT INTO tools (tool_name, tool_category, tool_price, tool_brand) 
                   VALUES ('$naam', '$categorie', '$prijs', '$merk')";

    mysqli_query($conn, $sql);

    if (mysqli_query($conn, $sql)) {
        header("location: index.php");
        exit;
    }
}
