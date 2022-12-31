<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transport_model extends CI_Model
{
    protected const TABLE_NAME = 'transports';

    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
    {
        $this->db->insert(self::TABLE_NAME, $data);
        return $this->db->insert_id();
    }

    public function get_by_ip_address($ip_address)
    {
        $this->db->select([self::TABLE_NAME . ".*", 'users.ip']);
        $this->db->from(self::TABLE_NAME);
        $this->db->join('users', self::TABLE_NAME . '.user_id = users.id', 'INNER');
        $this->db->where('users.ip', $ip_address);
        return $this->db->get()->row();
    }

    public function get_by_user_id($userID)
    {
        $this->db->where('user_id', $userID);
        return $this->db->get(self::TABLE_NAME)->row();
    }

    public function update($id, $data)
    {
        $data['updated_at'] = date('Y-m-d H:i:s');
        $this->db->where('id', $id);
        $this->db->update(self::TABLE_NAME, $data);
        return $data;
    }
}
