<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Institute_Pro extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("admin/Institute_ProM","im");

        if(!isset($_SESSION['aid']))
        {
            redirect("admin/Login");           
        }
	}
    public function loadInsPro($insid)
    {
    	$data=array("t2.instituteid"=>$insid);
    	$data2=array("t1.instituteid"=>$insid);
        $data3=array("t3.instituteid"=>$insid);    	
    	$tmp=array("insinfo"=>$this->im->selectInstitute($data2),
                   "insuinfo"=>$this->im->selectInstituteuser($data),
                   "clsinfo"=>$this->im->selectClass($data2),
                   "stuinfo"=>$this->im->selectStudent($data3));
    	$this->load->view("admin/inspro",$tmp);
    }
    public function loadStudent($sid)
    {
    	$data=array("t1.studentid"=>$sid);   	
    	$tmp=array("stuinfo"=>$this->im->selectStudentById1($data));
    	$this->load->view("admin/studentpro",$tmp);
    }
    public function loadClass($cid)
    {
    	$data=array("c1.classid"=>$cid);
    	$tmp=array("cinfo"=>$this->im->selectClassById($data));
    	$this->load->view("admin/class_info",$tmp);
    }
    public function loadInsUser($uid)
    {
        $data=array("t1.instituteuserid"=>$uid);
    	$tmp=array("insuinfo"=>$this->im->selectInstituteUserById($data));
    	$this->load->view("admin/institute_user",$tmp);        
    }
}

?>