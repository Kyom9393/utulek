<?php

    namespace App\Models;
    use CodeIgniter\Model;

    class StatusModel extends Model{
        protected $table = "status";
        protected $returnType = "object";
        protected $primaryKey = "id_status";
    }
?>