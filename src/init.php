<?php
session_start();

require_once __DIR__ . '/db.php';

// config du site
$existing_pages = ['home', 'login', 'register'];

// les classes
require_once __DIR__ . '/class/DbObject.php';
require_once __DIR__ . '/class/User.php';

//  db manager
require_once __DIR__ . '/class/DbManager.php';
$dbMan = new DbManager($db);

// tous les utilitaires
require_once __DIR__ . '/utils/error.php';
