<?php 
defined('BASEPATH')or exit("no direcct script is allowed");

class Accessreq extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("institute/AccessreqM","am");
		if(!isset($_SESSION['uid']))
		{
			redirect("user/Home");
		}
	}
		public function allowestudent($sid,$cid)
		{
			$data=array("studentid"=>$sid,
				"classid"=>$cid,
				"status"=>0,
				"addedby"=>0
		);
			$where=array("studentid"=>$sid,
				"classid"=>$cid
			);
			$d2=array("status"=>0);
			$this->am->updatereqstatus($d2,$where);
			$this->am->givepermission($data);

		$resacs=$this->input->post("txtres");
 		
 		foreach ($resacs as $r) {
		$data2=array("studentid"=>$sid,
			"resourceid"=>$r
			);
		
		$this->am->insertintoresaccess($data2);
	   }
	    redirect("institute/Resources/loadAllLec/$cid");
	  		   

		}
		public function denyreq($sid,$cid)
		{
			$where=array("studentid"=>$sid,
				"classid"=>$cid
			);
			$data=array("status"=>"1");

			$this->am->denypermission($data,$where);
		

	    redirect("institute/Resources/loadAllLec/$cid");
		}
		public function blockstudent($sid)
		{
			$dd=array("instituteid"=>$_SESSION['suid']);

			$cls=$this->am->allclsbyinsid($dd);

			foreach ($cls as $k) {
				$where=array("classid"=>$k->classid,
                   "studentid"=>$sid);
				$data=array("status"=>"1");

		$this->am->blockstudent($data,$where);
			}
			redirect("institute/InsLogin/loadstudents");
			
		}
		public function unblockstudent($sid)
		{
			$dd=array("instituteid"=>$_SESSION['suid']);

			$cls=$this->am->allclsbyinsid($dd);

			foreach ($cls as $k) {
				$where=array("classid"=>$k->classid,
                   "studentid"=>$sid);
				$data=array("status"=>"0");

		$this->am->blockstudent($data,$where);
			}
			redirect("institute/InsLogin/loadstudents");
			
		}
		
		public function blockstudentbyclassid($sid,$cid)
		{
		$where=array("studentid"=>$sid,
					"classid"=>$cid
			);
		$data=array("status"=>"1");

		$this->am->blockstudent($data,$where);

		//$d2=array("classid"=>$cid);

		//$res=$this->am->allresbyclassid($d2);
		
		//	foreach ($res as $r) {
		//$data2=array("studentid"=>$sid,
	//		"resourceid"=>$r->resourceid
//			);
  //		$this->am->blockresourceforstudent($data2);
			//}
	    redirect("institute/Resources/loadAllLec/$cid");
		}
		public function unblockstudentbyclassid($sid,$cid)
		{
		$where=array("studentid"=>$sid,
					"classid"=>$cid
			);
		$data=array("status"=>"0");

		$this->am->unblockstudent($data,$where);

			    redirect("institute/Resources/loadAllLec/$cid");
		}

}

?>