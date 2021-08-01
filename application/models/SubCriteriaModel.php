<?php

class SubCriteriaModel extends CI_Model
{
    private $_table = "sub_kriteria";

    public function get($status = NULL)
    {
        if (isset($status)){
            $this->db->where('status', $status);
        }
    	return $this->db->get($this->_table);
    }

    public function getWithBuilder($id)
    {
        return $this->db->query("SELECT sub_kriteria.*, kriteria.nama_kriteria AS nama_kriteria FROM sub_kriteria JOIN kriteria ON sub_kriteria.id_kriteria = kriteria.id WHERE sub_kriteria.id_kriteria = $id");
    }

    public function insert($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function getById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get($this->_table);
    }  
    
    public function getByIds($id)
    {
        $this->db->where('id_kriteria', $id);
        return $this->db->get($this->_table);
    }      

    public function update($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->_table, $data);
    }    

    public function destroy($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete($this->_table);
    } 
    
    public function getMax($id_kriteria)
    {
        return $this->db->query("SELECT max(prioritas) as prioritas from sub_kriteria where id_kriteria = $id_kriteria");
    }

    public function getMin($id_kriteria)
    {
        return $this->db->query("SELECT min(prioritas) as prioritas from sub_kriteria where id_kriteria = $id_kriteria");
    }
    
    public function getBobotMax($id_sub_kriteria, $prioritas)
    {
        return $this->db->query("SELECT * from sub_kriteria where id_kriteria = $id_sub_kriteria and prioritas = $prioritas");
    }

    public function getBobotMin($id_sub_kriteria, $prioritas)
    {
        return $this->db->query("SELECT * from sub_kriteria where id_kriteria = $id_sub_kriteria and prioritas = $prioritas");
    }

}