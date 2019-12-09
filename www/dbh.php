<?php
session_start();
$username = "";
$email = "";
$errors = [];

$conn = new mysqli('localhost', 'root', 'simple', 'table1');
