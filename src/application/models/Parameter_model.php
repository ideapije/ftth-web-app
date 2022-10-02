<?php

class Parameter_model extends CI_Model
{
    public $parameter;
    public $category;

    public function get_all_entries()
    {
        $query = $this->db->get('parameters');
        return $query->result();
    }

    public function insert_entry($parameter, $category)
    {
        $this->parameter = $parameter;
        $this->category = $category;
        $this->db->insert('parameters', $this);
    }

    public function update_entry()
    {
        $this->parameter = $_POST['name'];
        $this->category = $_POST['category'];
        
        $this->db->update('parameters', $this, [
            'id' => $_POST['id']
        ]);
    }
}
