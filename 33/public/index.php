<?php

declare(strict_types = 1);

$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
define('HELPERS_PATH', $root . 'app' . DIRECTORY_SEPARATOR );
define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

require APP_PATH . 'App.php';

$files = getTransactionFiles(FILES_PATH);
// var_dump($files);

$transactions = [];

foreach ($files as $file) {
    $transactions = getTransactions($file,'parseTransaction');
    // echo "<pre/>";
    // var_dump($transactions);
};
$totals = calculateTotal($transactions);
// echo "<pre/>";
// var_dump($totals);
require HELPERS_PATH . 'helpers.php';
require VIEWS_PATH . 'transactions.php';
