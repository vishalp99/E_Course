<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institute_User extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/Institute_UserM","im");
        if(!isset($_SESSION['aid']))
        {
            redirect("admin/Login");
        }
	}
    public function index()
    {
    	$tmp=array(
                  "insu"=>$this->im->selectAllInstituteUser()
    	          );
    	$this->load->view("admin/allinstituteuser",$tmp);
    }
    public function loadInsUserPro($uid)
    {
        $data=array("t1.instituteuserid"=>$uid);
        $tmp=array("uinfo"=>$this->im->selectInsUserById($data));
        $this->load->view("admin/allinsuser_pro",$tmp);
    }
}
?>
