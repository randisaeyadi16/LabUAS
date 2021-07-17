<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLaporanWarga extends Model
{
    protected $primaryKey = 'id';
    
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('datawarga')->get();
    }

    function tampilkas()
    {
        return $this->db->table('iuran')->get();
    }
}