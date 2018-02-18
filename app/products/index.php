<?php
header("Content-Type:application/json");
echo(json_encode(array(
    "products_count" => 2,
    "items" => array(
        "apple",
        "orange"
    )
)));
?>