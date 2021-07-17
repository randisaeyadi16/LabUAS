<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelKasWarga extends Model
{
    protected $primaryKey = 'id';
    
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('kaswarga')->get();
    }

    function simpan($data){
        return $this->db->table('kaswarga')->insert($data);
    }
}