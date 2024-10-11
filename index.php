<?php
require_once 'domain_object/node_role.php';
$obj_role=[];
$obj_role[] = new Role (1, "Kasir", "Untuk Kasir", 1);
$obj_role[] = new Role (2, "admin", "untuk admin",1);
$obj_role[] = new Role (3,"owner", "untuk owner", 0);
$obj_role[] = new Role (4,"customer", "untuk pelanggan",1);

include 'views/role_list.php';
?>