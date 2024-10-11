<?php
require_once 'domain_object/node_barang.php';
$obj_barang=[];
$obj_barang[] = new Barang (001, "Sabun", "Dettol", 4500);
$obj_barang[] = new Barang (002, "Pasta Gigi", "Pepsodent",6000);
$obj_barang[] = new Barang (003,"Sikat Gigi", "Kodomo", 10000);
$obj_barang[] = new Barang (004,"Lampu", "Phillips",45000);

include 'views/barang_list.php';
?>