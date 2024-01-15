<?php 
defined('BASEPATH')or die("no direct script is allowed");
 
class Home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model("user/HomeM","hm");
	}
	public function index()
	{
		  $this->load->view('user/home-1');
	
	}
	public function home2()
	{
		if(isset($_SESSION['stid']) || isset($_SESSION['stname']))
		{
         $data=array();
         if($this->input->post("btnsearch"))
         {
         	if($this->input->post("txtsearch")!='')
         	{
         		$data=$this->input->post("txtsearch");
         	}
         }
         $d2=array("s1.studentid"=>$_SESSION['stid']);

         $dd=$this->hm->allclasses($data);
         $datm=array();
         if(empty($dd))
         {
         $temp=array("ins"=>$this->hm->allinstitutes($data),
         		"myclasses"=>$this->hm->myclassesbystudentid($d2)
     		);
		$this->load->view('user/home-2',$temp);
		}else{
			 $temp=array("ins"=>$this->hm->allinstitutes($datm),
         		"classes"=>$dd,
         		"myclasses"=>$this->hm->myclassesbystudentid($d2)
     		);
		$this->load->view('user/home-2',$temp);		
		}
	}
	else{
		redirect("user/Home");
	  }
	}
}
?>