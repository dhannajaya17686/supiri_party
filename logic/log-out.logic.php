<?php
require_once '../config/constants.config.php';

session_start();
session_unset();
session_destroy();

header("Location: ".ROOT_URL."index.php");


?>