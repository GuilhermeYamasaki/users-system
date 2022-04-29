<?php
require '../app/services/IsAuthenticatedService.php';
require '../app/database/index.php';

$users = query('SELECT * FROM users');

require '../app/views/users.php';