<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Ruanjian extends CI_Controller {
    public function first(){
        $this->load->view("first");
    }
    public function index(){
        $this->load->model("news_model");
        $this->load->model("notice_model");
        $newses = $this->news_model->get_news();
        $notices = $this->notice_model->get_notice();
        $this->load->view("index",array(
            "newses" =>$newses,
            "notices" =>$notices
        ));
    }
    public function register()
    {
        $this->load->view('register');
    }
    public function login()
    {
        $this->load->view('login');
    }
    public function check()
    {
        $admin = $this->input->post("admin");
        $username = $this->input->post("username");
        $password = $this->input->post("password");
        $repassword = $this->input->post("repassword");

        $submit = true;

        $data = array();

        if($admin!="rjgc2015214271"&&$admin!="rjgc2015214263"){
            $data["err_adm"] = "管理员码不正确！";
            $submit = false;
        }
        if($username==""){
            $data["err_name"] = "请输入用户名！";
            $submit = false;
        }
        if($password!=$repassword){
            $data["err_pwd"] = "两次密码不一致！";
            $submit = false;
        }
        if($submit){
            $this->load->model("user_model");
            $rows = $this->user_model->save($admin,$username,$password);
            if($rows > 0){
                echo "注册成功";
                redirect("Ruanjian/login");
            }else{
                echo "你的注册有问题";

            }
        }else{
            $this->load->view("register",$data);
        }
    }
    public function check_login(){
        $username = $this->input->post("username");
        $password = $this->input->post("password");

        $this->load->model("user_model");
        $row = $this->user_model->get_by_name_pwd($username,$password);
        if($row){
            echo "登录成功";
            redirect("Ruanjian/content");
        }else{
            echo "用户名不存在或密码不正确";
        }
    }
    public function check_name(){
        $name = $this->input->get("uname");
        if($name!="") {
            $this->load->model("user_model");
            $result = $this->user_model->get_by_name($name);
            if ($result) {
                echo "fail";
            } else {
                echo "success";
            }
            header('content-type:application:json;charset=utf8');
            header('Access-Control-Allow-Origin:*');
            header('Access-Control-Allow-Methods:GET');
            header('Access-Control-Allow-Headers:x-requested-with,content-type');
        }
    }
    public function check_admin(){
        $admin = $this->input->get("uadmin");
        if($admin!="") {
            $this->load->model("user_model");
            $result = $this->user_model->get_by_admin($admin);
            if ($result) {
                echo "success";
            } else {
                echo "fail";
            }
            header('content-type:application:json;charset=utf8');
            header('Access-Control-Allow-Origin:*');
            header('Access-Control-Allow-Methods:GET');
            header('Access-Control-Allow-Headers:x-requested-with,content-type');
        }
    }
    public function content(){
        $this->load->model("news_model");
        $this->load->model("notice_model");
        $newses = $this->news_model->get_news_by_id();
        $notices = $this->notice_model->get_notice_by_id();
        $this->load->view("content",array(
            "newses" =>$newses,
            "notices" =>$notices
        ));
    }
    public function submit(){
        $title = $this->input->post("title");
        $editor = $this->input->post("editor");
        $this->load->model("news_model");
        $row = $this->news_model->save($title,$editor);
        if($row){
            echo "保存成功";
            redirect("Ruanjian/content");
        }else{
            echo "保存失败";
        }
    }
    public function submit2(){
        $title2 = $this->input->post("title2");
        $editor2 = $this->input->post("editor2");
        $this->load->model("notice_model");
        $row = $this->notice_model->save($title2,$editor2);
        if($row){
            echo "保存成功";
            redirect("Ruanjian/content");
        }else{
            echo "保存失败";
        }
    }
    public function del(){
        $title = $this->input->post("title3");
        $this->load->model("news_model");
        $row = $this->news_model->delt($title);
        if($row){
            echo "删除成功";
            redirect("Ruanjian/content");
        }else{
            echo "删除失败";
        }
    }
    public function del2(){
        $title = $this->input->post("title4");
        $this->load->model("notice_model");
        $row = $this->notice_model->delt($title);
        if($row){
            echo "删除成功";
            redirect("Ruanjian/content");
        }else{
            echo "删除失败";
        }
    }
    public function gd1(){
        $this->load->view("gd1");
    }
    public function gd2(){
        $this->load->view("gd2");
    }
    public function gd3(){
        $this->load->view("gd3");
    }
    public function gd4(){
        $this->load->view("gd4");
    }
    public function gd5(){
        $this->load->view("gd5");
    }
    public function gd6(){
        $this->load->view("gd6");
    }
    public function gd7(){
        $this->load->view("gd7");
    }
    public function gd8(){
        $this->load->view("gd8");
    }
    public function gd9(){
        $this->load->view("gd9");
    }
    public function gd10(){
        $this->load->view("gd10");
    }
    public function major(){
        $this->load->view("major");
    }
    public function major2(){
        $this->load->view("major2");
    }
    public function major3(){
        $this->load->view("major3");
    }
    public function lab(){
        $this->load->view("lab");
    }
    public function lab2(){
        $this->load->view("lab2");
    }
    public function lab3(){
        $this->load->view("lab3");
    }
    public function teach(){
        $this->load->view("teach");
    }
    public function teach2(){
        $this->load->view("teach2");
    }
    public function teach3(){
        $this->load->view("teach3");
    }
    public function news(){
        $id = $this->input->get('id');
        $this->load->model("news_model");
        $newses = $this->news_model->get_news_by_id($id);
        $this->load->view("news",array(
            "newses" =>$newses,
        ));
    }
    public function notice(){
        $id = $this->input->get('id');
        $this->load->model("notice_model");
        $notices = $this->notice_model->get_notice_by_id($id);
        $this->load->view("notice",array(
            "notices" =>$notices
        ));
    }
    public function content2(){
        $this->load->model("news_model");
        $this->load->model("notice_model");
        $newses = $this->news_model->get_news();
        $notices = $this->notice_model->get_notice();
        $this->load->view("content2",array(
            "newses" =>$newses,
            "notices" =>$notices
        ));
    }
    public function job(){
        $this->load->view("job");
    }
}
