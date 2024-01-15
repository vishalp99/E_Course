<?php 
defined('BASEPATH')or exit("no direct script is allowed");

 
class Crtclass extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("institute/CrtclassM","cm");
		if(!isset($_SESSION['uid']))
		{
			redirect("user/Home");
		}
	}
	public function index()
	{
		$temp=array("users"=>$this->cm->selectuserbyinsid());
		$this->load->view("institute/createclass",$temp);
	
	}
	public function createclass()
	{
		$img=$_FILES['fup']['name'];
		copy($_FILES['fup']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/instituteimg/insclass/".$img)or die("cant upload image");
		$data=array("instituteid"=>$_SESSION['suid'],
			"title"=>$this->input->post("txttitle"),
			"description"=>$this->input->post("txtdesc"),
			"classimage"=>$img,
			"classcode"=>uniqid()
			);
		$cid=$this->cm->crtclass($data);
		
		$ddd=array("classlink"=>"http://localhost/E_course/index.php/user/Classes/profilebyclassid/".$cid);
 			
 			$wh=array("classid"=>$cid);
		$this->cm->updateclass($ddd,$wh);

		$tags=$this->input->post("txtuser");
 		
 		foreach ($tags as $t) {
		$data2=array("classid"=>$cid,
			"instituteuserid"=>$t
			);
		
		$this->cm->insertalloweusers($data2);
		}
  				redirect("institute/Home/home1");
 	}
	public function loadallclass()
	{
		$data=array("instituteid"=>$_SESSION['suid']);
		$temp=array("classes"=>$this->cm->allclassesbyinsid($data));
		$this->load->view("institute/allclasses",$temp);
	}
	// public function loadmyclass()
	// {
	// 		$temp=array("classes"=>$this->cm->classesbyuserid());
	// 				$this->load->view("institute/myclass",$temp);

	// }
	public function loadeditclass($cid)
	{
			$data=array("classid"=>$cid);
				$temp=array("cinfo"=>$this->cm->classesbyclassid($data),
						"cuinfo"=>$this->cm->usersbyclassid($data),
						"users"=>$this->cm->selectuserbyinsid()
						);
					$this->load->view("institute/editclass",$temp);		
	}
	public function editclasspic($cid)
	{
        	if($_FILES['fup']['name']!="")
    		 {
    		 	$img=$_FILES['fup']['name'];
    		 	copy($_FILES['fup']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/instituteimg/insclass/".$img)or die("can not upload image");
    		 	$data=array("classimage"=>$img);
    		 	$where=array("classid"=>$cid);
    		 	$this->cm->updateclass($data,$where);
    		 } 


          redirect("institute/Crtclass/loadeditclass/$cid");
	}
	public function editclassinfo($cid)
	{
		$data=array(
    			"title"=>$this->input->post("txtti"),
    			"status"=>$this->input->post("txts"),
    			"description"=>$this->input->post("txtdesc")
    		);
		$where=array("classid"=>$cid);
    		 	$this->cm->updateclass($data,$where);
	


          redirect("institute/Crtclass/loadeditclass/$cid");
	}
	public function editclasspermission($cid)
	{
		$data=array("classid"=>$cid);
		$this->cm->deleteuserbyclassid($data);

		$tags=$this->input->post("txtuser");
 			if(count($tags)>0)
 			{
 		foreach ($tags as $t) {
		$data2=array("classid"=>$cid,
			"instituteuserid"=>$t
			);
		
		$this->cm->insertalloweusers($data2);
       }
   		}	
       $temp=array("cinfo"=>$this->cm->classesbyclassid($data),
						"cuinfo"=>$this->cm->usersbyclassid($data),
						"users"=>$this->cm->selectuserbyinsid()
						);
					$this->load->view("institute/editclass",$temp);
    }
    public function deleteclass($cid)
    {
    	$data=array("classid"=>$cid);
		$this->cm->deleteuserbyclassid($data);

		$this->cm->deleteclass($data);

		redirect("institute/Home/home1");
    }
}

?>