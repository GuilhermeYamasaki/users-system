<?php

require '../../app/services/IsAuthenticatedService.php';

$id = $_GET['id'];

require '../../app/database/index.php';

$user = query('SELECT * FROM users WHERE id = ' . $id)[0];

require '../../app/views/user-edit.php';