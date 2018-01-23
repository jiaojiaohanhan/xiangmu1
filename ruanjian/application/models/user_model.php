<?php defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model{
    public function save($adm,$uname,$pwd){
        $this->db->insert("user",array(
            "admin" => $adm,
            "username" => $uname,
            "password" => $pwd
        ));
        return $this->db->affected_rows();
    }
    public function get_by_name_pwd($name,$pwd){
        $query = $this->db->get_where("user",array(
            "username" => $name,
            "password" => $pwd
        ));
        return $query->row();
    }
    public function get_by_name($username){
        return $this->db->get_where("user",array("username" => $username))->row();
    }
    public function get_by_admin($admin){
        return $this->db->get_where("user",array("admin" => $admin))->row();
    }
}