<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Notice_model extends CI_Model{
    public function get_notice_by_id(){
        $sql = "select notice_cont,notice_title,notice_id from notice where notice_id <=(select max(notice_id) from notice)order by notice_id desc limit 5";
        return $this->db->query($sql)->result();
    }
    public function save($tit,$cont){
        $this->db->insert("notice",array(
            "notice_title" => $tit,
            "notice_cont" => $cont
        ));
        return $this->db->affected_rows();
    }
    public function delt($tit){
        $this->db->delete("notice",array(
            "notice_title" => $tit,
        ));
        return $this->db->affected_rows();
    }
}