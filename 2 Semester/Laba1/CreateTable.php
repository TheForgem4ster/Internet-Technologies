<?php

     include "Connect.php";
     // создание Таблицы Продавец
     $sql = "CREATE TABLE VENDORS (ID_Vendors integer auto_increment PRIMARY KEY, 
     name varchar(30) );";

     // создание Таблицы Категория
     $conn->exec($sql);
     $sql = "CREATE TABLE CATEGORY (ID_Category integer auto_increment PRIMARY KEY, 
             name varchar(30) );";

     $conn->exec($sql);        
     // создание Таблицы Предметы
     $sql = "CREATE TABLE ITEMS (ID_Items integer auto_increment PRIMARY KEY, 
             name varchar(30), 
             price integer,
             quantity integer,
             quality varchar(30), 
             FID_Vendor integer NOT NULL,
             FID_Category integer NOT NULL,
             FOREIGN KEY (FID_Vendor) REFERENCES VENDORS (ID_Vendors),
             FOREIGN KEY (FID_Category) REFERENCES CATEGORY (ID_Category) );";
                         
     $conn->exec($sql);
     print("Created table ITEMS, CATEGORY, VENDORS <br>");
?>

