<?php
function getFietsen(): array
{
    $db=new PDO("mysql:host=localhost;dbname=telefoons",
        "root", "");
    $query=$db->prepare("select * FROM merk ");
    $query-> execute();
    $result=$query->fetchAll(PDO::FETCH_ASSOC);

}