<?php

class AlternativeValueModel extends CI_Model
{
    private $_table = "nilai_alternatif";

    public function get()
    {
    	return $this->db->get($this->_table);
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
        $this->db->where('id_alternatif', $id);
        return $this->db->get($this->_table);
    } 

    public function getWithBuilder($id)
    {
        return $this->db->query("SELECT nilai_alternatif.*, alternatif.nama_alternatif as nama_alternatif, kriteria.nama_kriteria AS nama_kriteria, sub_kriteria.nama_sub_kriteria as nama_sub_kriteria FROM nilai_alternatif JOIN alternatif ON nilai_alternatif.id_alternatif = alternatif.id JOIN kriteria ON nilai_alternatif.id_kriteria = kriteria.id JOIN sub_kriteria ON nilai_alternatif.id_sub_kriteria = sub_kriteria.id WHERE nilai_alternatif.id_alternatif = $id");
    }

    public function getWithBuilderById($id)
    {
        return $this->db->query("SELECT nilai_alternatif.*, alternatif.nama_alternatif as nama_alternatif, kriteria.nama_kriteria AS nama_kriteria, sub_kriteria.nama_sub_kriteria as nama_sub_kriteria FROM nilai_alternatif JOIN alternatif ON nilai_alternatif.id_alternatif = alternatif.id JOIN kriteria ON nilai_alternatif.id_kriteria = kriteria.id JOIN sub_kriteria ON nilai_alternatif.id_sub_kriteria = sub_kriteria.id WHERE nilai_alternatif.id = $id");
    }

    public function getWithBuilderAll()
    {
        return $this->db->query("SELECT 
                nilai_alternatif.*, 
                alternatif.nama_alternatif as nama_alternatif, 
                kriteria.nama_kriteria AS nama_kriteria, 
                sub_kriteria.nama_sub_kriteria as nama_sub_kriteria, 
                sub_kriteria.bobot as bobot 
            FROM nilai_alternatif 
            JOIN alternatif ON nilai_alternatif.id_alternatif = alternatif.id 
            JOIN kriteria ON nilai_alternatif.id_kriteria = kriteria.id 
            JOIN sub_kriteria ON nilai_alternatif.id_sub_kriteria = sub_kriteria.id");
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

    public function destroy_by_alternative($id)
    {
        $this->db->where('id_alternatif', $id);
        return $this->db->delete($this->_table);
    } 

    public function check_auth($username, $password)
    {
        $this->db->where('email', $username);
        $this->db->where('password', $password);
        return $this->db->get($this->_table);
    }           
}