<?php defined('BASEPATH') OR exit('No direct script access allowed');
class News_model extends CI_Model{
    public function get_news_by_id(){
        $sql = "select news_content,news_title,news_id from news where news_id <=(select max(news_id) from news)order by news_id desc limit 5";
        return $this->db->query($sql)->result();
    }
    public function save($tit,$cont){
        $this->db->insert("news",array(
            "news_title" => $tit,
            "news_content" => $cont
        ));
        return $this->db->affected_rows();
    }
    public function delt($tit){
        $this->db->delete("news",array(
            "news_title" => $tit,
        ));
        return $this->db->affected_rows();
    }
}