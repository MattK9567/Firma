<?php

class Customers_model extends CI_Model
{
    public function __construct()
    {
        //$this->load->database();
    }

    public function get_customers($id = FALSE)
    {
        if($id == FALSE)
        {
            $query = $this->db->get('zakaznici');
            return $query->result_array();
        }

        $query = $this->db->get_where('zakaznici', array('ID' => $id));
        return $query->row_array();
    }

    public function set_customers($id = 0)
    {
        $this->load->helper('url');

        foreach ($_POST as $key => $value)
        {
            if($key != 'submit')
                $data[$key] = $value;
        }

        if($id == 0)
        {
            return $this->db->insert('zakaznici', $data);
        } else {
            $this->db->where('ID', $id);
            return $this->db->update('zakaznici', $data);
        }
    }

    public function show_customers_id($data)
    {
        $this->db->select('*');
        $this->db->from('zakaznici');
        $this->db->where('ID', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function update_customers_id1($id,$data)
    {
        $this->db->where('ID', $id);
        $this->db->update('zakaznici', $data);
    }

    public function insert_customers($data)
    {
        $this->db->insert('zakaznici', $data);
    }

    public function delete_customers($id)
    {
        $this->db->where('ID', $id);
        return $this->db->delete('zakaznici');
    }
}
