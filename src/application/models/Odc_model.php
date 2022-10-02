<?php

class Odc_model extends CI_Model
{
    protected const TABLE_NAME = 'optical_distribution_cabinets';
    public $odc_name;
    public $supply;

    public function get_all_entries()
    {
        $query = $this->db->get(self::TABLE_NAME);
        return $query->result();
    }

    public function insert_entry($odc_name, $supply)
    {
        $this->odc_name = $odc_name;
        $this->supply = $supply;

        $this->db->insert(self::TABLE_NAME, $this);
    }

    public function update_entry()
    {
        $this->odc_name = $_POST['odc_name'];
        $this->supply = $_POST['supply'];
        $this->db->update(self::TABLE_NAME, $this, [
            'id' => $_POST['id']
        ]);
    }

    public function get_amount()
    {
        return $this->db->count_all(self::TABLE_NAME);
    }
}
