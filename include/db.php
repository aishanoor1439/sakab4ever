<?php
session_start();
error_reporting(0);
$db = mysqli_connect('localhost', 'root', '', 'sakab4ever') or die("Database not connected!");
