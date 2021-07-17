<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelDataWarga extends Model
{
    protected $primaryKey = 'id';
    
    function __construct()
    {
        $this->db = db_connect();
    }

    function tampildata()
    {
        return $this->db->table('warga')->get();
    }

    function simpan($data){
        return $this->db->table('warga')->insert($data);
    }

    function hapusdatawarga($nik){
        return $this->db->table('warga')->delete(['nik' => $nik]);
    }

    function ambildata($nik){
        return $this->db->table('warga')->getWhere(['nik' => $nik]);   
    }

    function editdata($data, $nik){
        return $this->db->table('warga')-> Update($data, ['nik' => $nik]);
    }
}