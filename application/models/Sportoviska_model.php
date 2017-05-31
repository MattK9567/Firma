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

    public function show_sportovisko_id($data)
    {
        $this->db->select('*');
        $this->db->from('sportoviska');
        $this->db->where('ID', $data);
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }

    public function update_sportovisko_id1($id, $data)
    {
        $this->db->where('ID', $id);
        $this->db->update('sportoviska', $data);
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