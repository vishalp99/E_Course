<?php 
defined('BASEPATH')or die("no direct script is allowed");
 

 class Home extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model("institute/HomeM","hm");
 		
		$this->load->model("institute/CrtclassM","cm");
 		if(!isset($_SESSION['uid']))
		{
			redirect("user/Home");
		}
 	}
 	public function home1()
 	{
 				$data=array("c1.instituteid"=>$_SESSION['suid']);

 		$temp=array("totcl"=>count($this->hm->totcls($data)),
 			"totuser"=>count($this->hm->totus($data)),
 			"totst"=>count($this->hm->totstu($data))
 		);

		   $this->load->view("institute/home",$temp);
 	}
 	public function home2()
 	{

		if(isset($_SESSION['uid']) && isset($_SESSION['suid']) && isset($_SESSION['uname']) && isset($_SESSION['level']) )
		{
						$temp=array("classes"=>$this->cm->classesbyuserid());

 		$this->load->view("institute/facultyhome",$temp);
 	}
 	else{
 		
		redirect('user/Home');
 	}
 	}
 }
?>