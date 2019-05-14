<?php
include "../include/lib.php";
session_destroy();

move("sub.php?main_id=mem_area&sub_id=login");
?>