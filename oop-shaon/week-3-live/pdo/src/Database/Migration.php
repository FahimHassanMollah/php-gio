<?php

declare(strict_types=1);

namespace App\Database;

use App\Storage\DB;

class Migration
{
    private DB $db;
    public function __construct(DB $db)
    {
        $this->db = $db;
        echo "Migration class is loaded";
    }

    public function run() {
         // get all files from migration folder
        $files = glob(__DIR__ . '/migrations/*.sql');
        // var_dump($files);
        // loop through all files
        foreach ($files as $file) {
            echo basename($file) . PHP_EOL;
            // get the content of the file
            $sql = file_get_contents($file);
            $this->db->createTable($sql, basename($file));
            
            // // run the sql query
            // $this->runQuery($sql);
        }


    }
   
}
