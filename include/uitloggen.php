<?php
session_start();
session_destroy();

header('Location: recept.php');
exit;
