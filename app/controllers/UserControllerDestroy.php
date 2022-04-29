<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require '../database/index.php';

$id = $_POST['id'];

$sql = sqlDeleteUser($id);
query($sql);

header('Location: /users');

function sqlDeleteUser(int $id): string {
    return "DELETE FROM users WHERE id = {$id};";
}