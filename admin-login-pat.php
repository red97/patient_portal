<?php 
include('patfunc.php');
if(!isset($_SESSION['username']))
  echo "session expired";
else
    display_admin_panel();