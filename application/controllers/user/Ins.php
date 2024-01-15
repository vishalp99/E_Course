<?php 
defined('BASEPATH')or exit("no direct script is allowed");


class Ins extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("user/InsM","inm");	
		if(!isset($_SESSION['stid']))
		{
			redirect("user/Home");
		}	
	}

	public function insptofile($iid)
	{
		$data=array("instituteid"=>$iid);

	

		$temp=array("insinfo"=>$this->inm->loadinsbyid($data),
				"totalusers"=>count($this->inm->totuserbyinsid($data)),
				"totalcls"=>count($this->inm->totclsbyinsid($data)),
				"allcls"=>$this->inm->totclsbyinsid($data)
					);

		$this->load->view("user/instituteprofile",$temp);
	
	}


}
?>