<?php 
    require_once __DIR__ . '/vendor/autoload.php'; 
    $con = new MongoDB\Client("mongodb://localhost:27017");

    $db =$con->Laba2_Iteh;
    $tbl= $db->InternetShop;
    //--------------Create Collection
    // $tbl->insertOne(["Name" => "MAG B550 TOMAHAWK AM4", "Product Price" => 1000, 
    //                  "Quantity" => 100, "Manufacturer" => "MSI",
    //                  "ProductCategory" => "Motherboard", "reviews" => "second-hand",
    //                  "Condition" => "excellent"]);
    // $tbl->insertOne(["Name" => "B550 AORUS ELITE V2 AM4", "Product Price" => 800, 
    //                  "Quantity" => 0, "Manufacturer" => "Gigabyte",
    //                  "ProductCategory" => "Motherboard", "reviews" => "new",
    //                  "Condition" => "average"]);
    // $tbl->insertOne(["Name" => "Core i9-12900K", "Product Price" => 600, 
    //                  "Quantity" => 50, "Manufacturer" => "Intel",
    //                  "ProductCategory" => "processors", "reviews" => "new",
    //                  "Condition" => "average"]);
    // $tbl->insertOne(["Name" => "Ryzen 9 5900X", "Product Price" => 400, 
    //                  "Quantity" => 0, "Manufacturer" => "AMD",
    //                  "ProductCategory" => "processors", "reviews" => "second-hand",
    //                  "Condition" => "average"]);
    // $tbl->insertOne(["Name" => "Trident Z Neo", "Product Price" => 200, 
    //                  "Quantity" => 30, "Manufacturer" => "G-SKILL",
    //                  "ProductCategory" => "RAM", "reviews" => "new",
    //                  "Condition" => "spoiled"]);
    // $tbl->insertOne(["Name" => "WD40EZRZ", "Product Price" => 300, 
    //                  "Quantity" => 0, "Manufacturer" => "Western Digital",
    //                  "ProductCategory" => "HDD", "reviews" => "new",
    //                  "Condition" => "goood"]); 
    // $tbl->insertOne(["Name" => "ST2000DM008", "Product Price" => 500, 
    //                  "Quantity" => 80, "Manufacturer" => "Seagate Barracuda",
    //                  "ProductCategory" => "HDD", "reviews" => "second-hand",
    //                  "Condition" => "spoiled"]);  
?>