<?php
declare(strict_types=1);
require_once __DIR__ . "/vendor/autoload.php";

use App\Database\Migration;
use App\Storage\DB;

$db = new DB();
$migration = new Migration($db);

$migration->run();