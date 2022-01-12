<?php

namespace app\database\models;

class Read extends models
{

    public function all($table, $fields = '*')
    {
        try {
           $query = $this->connect->query("select {$fields} from {$table}");
           $query->execute();

           return $query->fetchAll();
        } catch (\Throwable $th) {
            ($th->getMessage());
        }
    }


}