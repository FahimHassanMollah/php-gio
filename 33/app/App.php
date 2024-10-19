<?php

declare(strict_types = 1);

function getTransactionFiles (string $files_path) : array
{
     $files = [];
     foreach (scandir($files_path) as $file) {
         if ($file === '.' || $file === '..') {
             continue;
         }
         $files[] = $files_path.$file;
     }
     return $files;
}

function getTransactions (string $filesName,?callable $transactionParseHandler = null) : array
{
    if(!file_exists($filesName)) {
       trigger_error("File not found", E_USER_ERROR);
    }
    $file = fopen($filesName, "r");
    fgetcsv($file);
    $transactions = [];
    while (($data = fgetcsv($file)) !== false) {
        if($transactionParseHandler !== null) {
            $transactions[] = $transactionParseHandler($data);
            continue;
        }
        $transactions[] = $data;
    }
    fclose($file);
    return $transactions;

}
function parseTransaction (array $transactionRow) : array
{
    [$date,$checkNumber,$description,$amount] = $transactionRow;

    $amount = (float) str_replace(["$",","], "", $amount);
    return [
        'date' => $date,
        'checkNumber' => $checkNumber,
        'description' => $description,
        'amount' => $amount
    ];
}

function calculateTotal (array $transactions) : array
{
   $total = [
       'netTotal' => 0,
       'totalIncome' => 0,
       'totalExpense' => 0
   ];
    foreach ($transactions as $transaction) {
         if ($transaction['amount'] >= 0) {
              $total['totalIncome'] += $transaction['amount'];
         } else {
              $total['totalExpense'] += $transaction['amount'];
         }
    }
    $total['netTotal'] = $total['totalIncome'] + $total['totalExpense'];
    return $total;
}
