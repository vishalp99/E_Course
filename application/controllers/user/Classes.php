<?php 
defined('BASEPATH')or exit("no direct script is allowed");


class Classes extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("user/ClassesM","cm");		
	}
	public function profilebyclassid($cid)
	{
		$data=array("c1.classid"=>$cid);
		$temp=array("clsinfo"=>$this->cm->loadclassprofile($data),
			"rinfo"=>$this->cm->profileclassres($data),
			"sinfo"=>$this->cm->allstudentbyclassid($data),
			"inusr"=>$this->cm->instituteuserbyclassid($data)
		);
    	$this->load->view("user/classprofile",$temp);
	}
	public function enrollclass($cid)
	{
		if(!isset($_SESSION['stid']) || !isset($_SESSION['stname']))
		{
			redirect("user/Home");
		}
		else{
		$data=array("studentid"=>$_SESSION['stid'],
				"classid"=>$cid
			);
	
			$this->cm->enrollclassbystudentid($data);

			redirect("user/Classes/profilebyclassid/$cid");
	
		}
	}
	public function loadoverview($cid)
	{
		if(!isset($_SESSION['stid']) || !isset($_SESSION['stname']))
		{
			redirect("user/Home");
		}else{
		$data=array("c1.classid"=>$cid,

			"s1.studentid"=>$_SESSION['stid']
		);

		$temp=array("res"=>$this->cm->loadallresbyclassid($data),
			"classid"=>$cid
			);
			$this->load->view("user/classoverview",$temp);
		}
	}
	public function loadsingleresource($cid,$rid)
	{
		if(!isset($_SESSION['stid']) || !isset($_SESSION['stname']))
		{
			redirect("user/Home");
		}else{
		$data=array("resourceid"=>$rid);

$d3=array("c1.classid"=>$cid,

			"s1.studentid"=>$_SESSION['stid']
	);			
		$d2=array("resourceid"=>$rid,
			"studentid"=>$_SESSION['stid']);

		$this->cm->addresview($d2);
		
		$temp=array("linfo"=>$this->cm->loadsingleres($data),
			"qinfo"=>$this->cm->quetionsbyresid($data),
            "ansinfo"=>$this->cm->answerbyresid($data),
            "msg"=>$this->cm->loadmsg(),
            "res"=>$this->cm->loadallresbyclassid($d3)
			);
			$this->load->view("user/singleresource",$temp);
		}
	}
	public function addmsg($qid,$cid,$rid)
	{	
if(!isset($_SESSION['stid']) || !isset($_SESSION['stname']))
		{
			redirect("user/Home");
		}else{
		$data=array("message"=>$this->input->post("txtans"),
    			"studentid"=>$_SESSION["stid"],
    			"questionid"=>$qid
    		);

		$this->cm->addmsgbyquestionid($data);
	
	redirect("user/Classes/loadsingleresource/$cid/$rid");
	}
}
	public function addquestion($cid,$rid)
	{
		if(!isset($_SESSION['stid']) || !isset($_SESSION['stname']))
		{
			redirect("user/Home");
		}else{
		$data=array("resourceid"=>$rid,
			"studentid"=>$_SESSION['stid'],
			"question"=>$this->input->post("txtques"),
			"classid"=>$cid
		);
		$this->cm->addquestion($data);

	redirect("user/Classes/loadsingleresource/$cid/$rid");
		}
	}
}

?>