<?php

class Rezervacia_model extends CI_Model
{
    public function __construct()
    {
        //$this->load->database();
    }

    public function get_rezervacie($id = FALSE)
    {
        if($id == FALSE)
        {
            $query = $this->db->get('rezervacia');
            return $query->result_array();
        }

        $query = $this->db->get_where('rezervacia', array('ID' => $id));
        return $query->row_array();
    }

    public function set_rezervacie($id = 0)
    {
        $this->load->helper('url');

        foreach ($_POST as $key => $value)
        {
            if($key != 'submit')
                $data[$key] = $value;
        }

        if($id == 0)
        {
            return $this->db->insert('rezervacia', $data);
        } else {
            $this->db->where('ID', $id);
            return $this->db->update('rezervacia', $data);
        }
    }

    public function show_rezervacie_id($data)
    {
        $this->db->select('*');
        $this->db->from('rezervacia');
        $this->db->where('ID', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function update_rezervacie_id1($id,$data)
    {
        $this->db->where('ID', $id);
        $this->db->update('rezervacia', $data);
    }

    public function insert_rezervacie($data)
    {
        $this->db->insert('rezervacia', $data);
    }

    public function delete_rezervacie($id)
    {
        $this->db->where('ID', $id);
        return $this->db->delete('rezervacia');
    }
}