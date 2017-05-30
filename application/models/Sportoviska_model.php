<?php

class Sportoviska_model extends CI_Model
{
    public function __construct()
    {
        //$this->load->database();
    }

    public function get_sportoviska($id = FALSE)
    {
        if($id == FALSE)
        {
            $query = $this->db->get('sportoviska');
            return $query->result_array();
        }

        $query = $this->db->get_where('sportoviska', array('ID' => $id));
        return $query->row_array();
    }

    public function set_sportoviska($id = 0)
    {
        $this->load->helper('url');

        foreach ($_POST as $key => $value)
        {
            if($key != 'submit')
                $data[$key] = $value;
        }

        if($id == 0)
        {
            return $this->db->insert('sportoviska', $data);
        } else {
            $this->db->where('ID', $id);
            return $this->db->update('sportoviska', $data);
        }
    }

    public function insert_sportovisko($data)
    {
        $this->db->insert('sportoviska', $data);
    }

    public function delete_sportoviska($id)
    {
        $this->db->where('ID', $id);
        return $this->db->delete('sportoviska');
    }
}