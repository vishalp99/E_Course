<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/StudentM","sm");
        if(!isset($_SESSION['aid']))
        {
            redirect("admin/Login");
        }
	}
    public function index()
    {
    	$tmp=array(
                  "stu"=>$this->sm->selectAllStudent()
    	          );
    	$this->load->view("admin/allstudent",$tmp);
    }
    public function loadStudent($sid)
    {
        $data=array("t1.studentid"=>$sid);
        $tmp=array("sinfo"=>$this->sm->selectStuById($data));
        $this->load->view("admin/allstu_pro.php",$tmp);
    }

}
?>
