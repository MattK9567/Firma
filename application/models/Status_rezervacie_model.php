<?php

class Status_rezervacie_model extends CI_Model
{
    public function __construct()
    {
        //$this->load->database();
    }

    public function get_status_rezervacie($id = FALSE)
    {
        if($id == FALSE)
        {
            $query = $this->db->get('status_rezervacie');
            return $query->result_array();
        }

        $query = $this->db->get_where('status_rezervacie', array('ID' => $id));
        return $query->row_array();
    }

    public function set_status_rezervacie($id = 0)
    {
        $this->load->helper('url');

        foreach ($_POST as $key => $value)
        {
            if($key != 'submit')
                $data[$key] = $value;
        }

        if($id == 0)
        {
            return $this->db->insert('status_rezervacie', $data);
        } else {
            $this->db->where('ID', $id);
            return $this->db->update('status_rezervacie', $data);
        }
    }

    public function delete_status_rezervacie($id)
    {
        $this->db->where('ID', $id);
        return $this->db->delete('status_rezervacie');
    }
}