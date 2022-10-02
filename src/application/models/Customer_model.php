<?php

class Customer_model extends CI_Model
{
    public $customer_name;

    public function get_all_entries()
    {
        $query = $this->db->get('customers');
        return $query->result();
    }

    public function insert_entry($customer_name)
    {
        $this->customer_name = $customer_name;
        $this->db->insert('customers', $this);
    }

    public function update_entry()
    {
        $this->customer_name = $_POST['name'];
        $this->db->update('customers', $this, [
            'id' => $_POST['id']
        ]);
    }
}
