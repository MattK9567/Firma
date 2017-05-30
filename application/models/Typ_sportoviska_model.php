<?php

class Typ_sportoviska_model extends CI_Model
{
    public function __construct()
    {
        //$this->load->database();
    }

    public function get_typ_sportoviska($id = FALSE)
    {
        if($id == FALSE)
        {
            $query = $this->db->get('typ_sportoviska');
            return $query->result_array();
        }

        $query = $this->db->get_where('typ_sportoviska', array('ID' => $id));
        return $query->row_array();
    }

    public function set_typ_sportoviska($id = 0)
    {
        $this->load->helper('url');

        foreach ($_POST as $key => $value)
        {
            if($key != 'submit')
                $data[$key] = $value;
        }

        if($id == 0)
        {
            return $this->db->insert('typ_sportoviska', $data);
        } else {
            $this->db->where('ID', $id);
            return $this->db->update('typ_sportoviska', $data);
        }
    }

    public function insert_typ_sportoviska($data)
    {
        $this->db->insert('typ_sportoviska', $data);
    }

    public function delete_typ_sportoviska($id)
    {
        $this->db->where('ID', $id);
        return $this->db->delete('typ_sportoviska');
    }
}