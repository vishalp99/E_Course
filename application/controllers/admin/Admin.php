<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
        $this->load->model("admin/AdminM","am");
    if(!isset($_SESSION['aid']))
        {  redirect("admin/Login");
    }
	}
    public function index()
    {
    	$tmp=array(
                  "ins"=>$this->am->selectAllInstutute()
    	          );
    	$this->load->view("admin/index",$tmp);
    }
    // public function loadAllStudetnByInsId($insid)
    // {
    //     $data=array("t2.instituteid"=>$insid);
    //     $tmp=array("stu"=>$this->am->selectAllInstututeStudent($data),
    //                 "instituteid"=>$insid);
    //     $this->load->view("admin/allinsstudents",$tmp);
    // }
}
?>