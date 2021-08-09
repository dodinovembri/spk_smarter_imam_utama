<?php

class CriteriaModel extends CI_Model
{
    private $_table = "kriteria";

    public function get($status = NULL)
    {
        if (isset($status)){
            $this->db->where('status', $status);
        }
    	return $this->db->get($this->_table);
    }

    public function getWithBuilder()
    {
        return $this->db->query("SELECT sub_kriteria.*, kriteria.nama_kriteria AS nama_kriteria FROM sub_kriteria JOIN kriteria ON sub_kriteria.id_kriteria = kriteria.id");
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
    
    public function count()
    {
        return $this->db->count_all($this->_table);
    }
}