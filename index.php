<?php

require_once 'class.php';

$truck = new Truck(100, "red", 4, "Gasoil");
echo $truck->isFull();
