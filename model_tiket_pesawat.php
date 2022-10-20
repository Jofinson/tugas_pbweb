<?php namespace App\Models;

use CodeIgniter\Model;

class model_tiket_pesawat extends Model {

    public function visual($table) {

        return $this -> db -> table($table) -> get() -> getResult();

    }

    public function visual_join($table1, $table2, $on) {

        return $this -> db -> table($table1) -> join($table2, $on, 'left') -> get() -> getResult();

    }

    public function insert_data($table, $into) {

        return $this -> db -> table($table) -> insert($into);

    }

    public function delete_data($table, $where) {

        return $this -> db -> table($table) -> delete($where);

    }

    public function edit_data($table, $data, $where) {

        return $this -> db -> table($table) -> update($data, $where);

    }


    
    public function getWhere($table, $where) {

        return $this -> db -> table($table) -> getWhere($where) -> getRow();

    }

    public function getWhere2($table, $where) {

        return $this -> db -> table($table) -> getWhere($where) -> getRowArray();

    }

}