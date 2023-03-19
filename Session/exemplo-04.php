<?php

session_id('m7h86ffkotftd7tdetvptb0f76');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);
  


?>