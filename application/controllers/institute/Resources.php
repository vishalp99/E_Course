<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resources extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("institute/ResourcesM","rm");

        $this->load->model("institute/AccessreqM","am");
        if(!isset($_SESSION['uid']))
        {
            redirect("user/Home");
        }
	}	
    // public function loadAllLec()
    // {
    // 	//$data=array("r1.classid"=>$lid);
    // 	$tp=array("linfo"=>$this->rm->selectAllLecByclassId()
    //               );          //"classid"=>$lid
    //  	$this->load->view("institute/class moreinfo",$tp);
    // }
    public function loadAllLec($cid)
    {
    	$data=array("c1.classid"=>$cid);
    	$tp=array("linfo"=>$this->rm->selectAllLecByclassId($data),
    		"cinfo"=>$this->rm->classesbyclassid($data),
            "stinfo"=>$this->rm->studentrequestbyclassid($data),
            "stuinfo"=>$this->rm->stuinfobyclassid($data),
            "usrinfo"=>$this->rm->classuserbyclassid($data)
                  );          //"classid"=>$lid

      
     	$this->load->view("institute/allresources",$tp);
    
    }
    public function loadAllLecforfaculty($cid)
    {
        $data=array("c1.classid"=>$cid);
        $tp=array("linfo"=>$this->rm->selectAllLecByclassId($data),
            "cinfo"=>$this->rm->classesbyclassid($data),
            "stuinfo"=>$this->rm->stuinfobyclassid($data),
            "usrinfo"=>$this->rm->classuserbyclassid($data)
                  );          //"classid"=>$lid
        $this->load->view("institute/allresourcesfaculty",$tp);
    
    }
    public function loadAddResource($cid)
    {

    	$data=array("c1.classid"=>$cid);
        $temp=array("stuinfo"=>$this->rm->studentbyclassid($data),
                    "classid"=>$cid
                 );
    	$this->load->view("institute/addmaterials",$temp);
    } 
    public function addResource($cid)
    {
    	$d2=array("classid"=>$cid,
                  "instituteuserid"=>$_SESSION['uid']);

        $rid='';
       if($this->input->post('type')=="video")
       {
	       $video=$_FILES['rimg']['name'];
	      
         copy($_FILES['rimg']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/institutevideo/".$video)or die("Video Not Uploaded");
	    //  $url="http://localhost/E_course/resources/shared/institutevideo/".$video;
	       $data=array(
	       				"classid"=>$d2['classid'],
	       				"instituteuserid"=>$d2['instituteuserid'],
	                   "resourcetype"=>0,
	                  "resourcetitle"=>$this->input->post("rtitle"),
	                   "resourcedescription"=>$this->input->post("rdes"),
	                   "resourceurl"=>$video
	               );

	        $rid=$this->rm->insertResource($data);
            
                redirect("institute/Resources/loadAllLec/$cid");

       }
       else if($this->input->post('type')=="pdf")
       {
	        $pdf=$_FILES['rimg']['name'];
	      
            $all_ext = array("pdf");
            $ext=explode('.',$pdf);
            if(in_array("pdf", $ext,true))
            {
         copy($_FILES['rimg']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/institutepdf/".$pdf)or die("Pdf File Not Uploaded");
	       $data=array(

	       				"classid"=>$d2['classid'],
	       				"instituteuserid"=>$d2['instituteuserid'],
	                   "resourcetype"=>1,
	                   "resourcetitle"=>$this->input->post("rtitle"),
	                   "resourcedescription"=>$this->input->post("rdes"),
	                   "resourceurl"=>$pdf);
                $rid=$this->rm->insertResource($data);      

                $resacs=$this->input->post("txtstudents");
                
                foreach ($resacs as $r) {
                $data2=array("studentid"=>$r,
                    "resourceid"=>$rid
                    );
                $this->am->insertintoresaccess($data2);
                }
                redirect("institute/Resources/loadAllLec/$cid");
        
           }
            else{
              $dd=array("c1.classid"=>$cid);
        $te=array("stuinfo"=>$this->rm->studentbyclassid($dd),
                    "classid"=>$cid,
                    "err"=>"not valid file is Uploaded as selected resource type."
                 );
           $this->load->view("institute/addmaterials",$te);

            }
       }
        else if($this->input->post('type')=="doc")
        {
	         $doc=$_FILES['rimg']['name'];
	         $all_ext = array("txt");
            $ext=explode('.',$doc);
            if(in_array("docx", $ext,true))
            {
          copy($_FILES['rimg']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/institutedocument/".$doc)or die("Document File Not Uploaded");
	        $data=array(
                
                        "classid"=>$d2['classid'],
                        "instituteuserid"=>$d2['instituteuserid'],
	                    "resourcetype"=>2,
	                    "resourcetitle"=>$this->input->post("rtitle"),
	                    "resourcedescription"=>$this->input->post("rdes"),
	                    "resourceurl"=>$doc);
                $rid=$this->rm->insertResource($data);      
	       
                $resacs=$this->input->post("txtstudents");
                
                foreach ($resacs as $r) {
                $data2=array("studentid"=>$r,
                    "resourceid"=>$rid
                    );
                $this->am->insertintoresaccess($data2);
                }
                redirect("institute/Resources/loadAllLec/$cid");
        
           }
            else{
              $dd=array("c1.classid"=>$cid);
        $te=array("stuinfo"=>$this->rm->studentbyclassid($dd),
                    "classid"=>$cid,
                    "err"=>"not valid file is Uploaded as selected resource type."
                 );
           $this->load->view("institute/addmaterials",$te);

            }
      }
        else if($this->input->post('type')=="txt")
       {
            $txt=$_FILES['rimg']['name'];
            $all_ext = array("txt");
            $ext=explode('.',$txt);
            if(in_array("txt", $ext,true))
            {
copy($_FILES['rimg']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/institutetext/".$txt)or die("Text File Not Uploaded");
//$url="http://localhost/E_course/resources/shared/institutetext/".$txt;
           $data=array(
                         "classid"=>$d2['classid'],
                        "instituteuserid"=>$d2['instituteuserid'],
                       "resourcetype"=>5,
                       "resourcetitle"=>$this->input->post("rtitle"),
                       "resourcedescription"=>$this->input->post("rdes"),
                       "resourceurl"=>$txt);
            $rid=$this->rm->insertResource($data);      
           


                $resacs=$this->input->post("txtstudents");
                
                foreach ($resacs as $r) {
                $data2=array("studentid"=>$r,
                    "resourceid"=>$rid
                    );
                $this->am->insertintoresaccess($data2);
                }
                redirect("institute/Resources/loadAllLec/$cid");
        
           }
            else{
              $dd=array("c1.classid"=>$cid);
        $te=array("stuinfo"=>$this->rm->studentbyclassid($dd),
                    "classid"=>$cid,
                    "err"=>"not valid file is Uploaded as selected resource type."
                 );
           $this->load->view("institute/addmaterials",$te);

            }
           
       }
      else if($this->input->post('type')=="oth")
       {
            $oth=$_FILES['rimg']['name'];
           copy($_FILES['rimg']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/instituteother/".$oth)or die("Other File Not Uploaded");
           $data=array(
                         "classid"=>$d2['classid'],
                        "instituteuserid"=>$d2['instituteuserid'],
                       "resourcetype"=>6,
                       "resourcetitle"=>$this->input->post("rtitle"),
                       "resourcedescription"=>$this->input->post("rdes"),
                       "resourceurl"=>$oth);
            $rid=$this->rm->insertResource($data);

             $resacs=$this->input->post("txtstudents");
                
                foreach ($resacs as $r) {
                $data2=array("studentid"=>$r,
                    "resourceid"=>$rid
                    );
                $this->am->insertintoresaccess($data2);
                }
                redirect("institute/Resources/loadAllLec/$cid");      
       }
           else if($this->input->post('type')=="ann")
       {
            $ann=$_FILES['rimg']['name'];
            $all_ext = array("txt");
            $ext=explode('.',$ann);
            if(in_array("txt", $ext,true))
            {
           copy($_FILES['rimg']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/instituteannouncement/".$ann)or die("Announcement Not Uploaded");
           $data=array(
                         "classid"=>$d2['classid'],
                        "instituteuserid"=>$d2['instituteuserid'],
                       "resourcetype"=>7,
                       "resourcetitle"=>$this->input->post("rtitle"),
                       "resourcedescription"=>$this->input->post("rdes"),
                       "resourceurl"=>$ann);
            $rid=$this->rm->insertResource($data);      


                $resacs=$this->input->post("txtstudents");
                
                foreach ($resacs as $r) {
                $data2=array("studentid"=>$r,
                    "resourceid"=>$rid
                    );
                $this->am->insertintoresaccess($data2);
                }
                redirect("institute/Resources/loadAllLec/$cid");
        
           }
            else{
              $dd=array("c1.classid"=>$cid);
        $te=array("stuinfo"=>$this->rm->studentbyclassid($dd),
                    "classid"=>$cid,
                    "err"=>"not valid file is Uploaded as selected resource type."
                 );
           $this->load->view("institute/addmaterials",$te);
         }

       }            	
       else if($this->input->post('type')=="exc")
       {
	        $exc=$_FILES['rimg']['name'];
            $ext=explode('.',$exc);
            if(in_array("xlsx", $ext,true))
            {
	       copy($_FILES['rimg']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/instituteexcel/".$exc)or die("Excle File Not Uploaded");
	       $data=array(
	                       "classid"=>$d2['classid'],
                        "instituteuserid"=>$d2['instituteuserid'],
                     "resourcetype"=>3,
	                   "resourcetitle"=>$this->input->post("rtitle"),
	                   "resourcedescription"=>$this->input->post("rdes"),
	                   "resourceurl"=>$exc);
            $rid=$this->rm->insertResource($data);      


                $resacs=$this->input->post("txtstudents");
                
                foreach ($resacs as $r) {
                $data2=array("studentid"=>$r,
                    "resourceid"=>$rid
                    );
                $this->am->insertintoresaccess($data2);
                }
                redirect("institute/Resources/loadAllLec/$cid");
        
           }
            else{
              $dd=array("c1.classid"=>$cid);
        $te=array("stuinfo"=>$this->rm->studentbyclassid($dd),
                    "classid"=>$cid,
                    "err"=>"not valid file is Uploaded as selected resource type."
                 );
           $this->load->view("institute/addmaterials",$te);
         }
	   }
    else{
              $dd=array("c1.classid"=>$cid);
        $te=array("stuinfo"=>$this->rm->studentbyclassid($dd),
                    "classid"=>$cid,
                    "err"=>"not select resource type"
                 );
           $this->load->view("institute/addmaterials",$te);      
    } 
    } 
    public function removeResource($id,$cid)
    {
    	$data=array("resourceid"=>$id);
    	$this->rm->deleteResource($data);
    	redirect("institute/Resources/loadAllLec/$cid");
    }    
    public function loadupdResource($id,$cid)
    {
    	$data=array("resourceid"=>$id);
    	$tp=array("linfo"=>$this->rm->selectAllLecByresId($data),
    				"classid"=>$cid
    				);

    		$this->load->view("institute/updmaterials",$tp);

    }
    public function updResourceinf($rid,$cid)
    {
    	$data=array("resourceid"=>$rid);
    $data2=array(
	                  "resourcetitle"=>$this->input->post("rtitle"),
	                   "resourcedescription"=>$this->input->post("rdes"),
	               );

	        $this->rm->updateResourceinf($data2,$data);
    	
	    redirect("institute/Resources/loadAllLec/$cid");
	  		  
    }
    public function updResourceurl($rid,$cid)
    {
    	$where=array("resourceid"=>$rid);
    	
      $data=array();
      if($this->input->post('type')==0)
       {
	       $video=$_FILES['rimg']['name'];
	       copy($_FILES['rimg']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/institutevideo/".$video)or die("Video Not Uploaded");	
	    //  $url="http://localhost/E_course/resources/shared/institutevideo/".$video;
	       $data["resourceurl"]=$video;
         $data["resourcetype"]=0;

       }
       else if($this->input->post('type')==1)
       {
	        $pdf=$_FILES['rimg']['name'];
	       copy($_FILES['rimg']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/institutepdf/".$pdf)or die("Pdf File Not Uploaded");
	       $data["resourceurl"]=$pdf;
	     $data["resourcetype"]=1;
       }
       elseif ($this->input->post('type')==2) {
         $doc=$_FILES['rimg']['name'];
          copy($_FILES['rimg']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/institutedocument/".$doc)or die("Document File Not Uploaded");
        $data["resourceurl"]=$doc;
        $data["resourcetype"]=2;
      }
       else if($this->input->post('type')==3)
       {
          $exc=$_FILES['rimg']['name'];
copy($_FILES['rimg']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/instituteexcel/".$exc)or die("Excle File Not Uploaded");
       $data["resourceurl"]=$exc;
       $data["resourcetype"]=3;
        }
        else if($this->input->post('type')==5)
       {
        $txt=$_FILES['rimg']['name'];
        
       copy($_FILES['rimg']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/institutetext/".$txt)or die("Text File Not Uploaded");
       $data["resourceurl"]=$txt;
       $data["resourcetype"]=5;
        }
        else if($this->input->post('type')==6)
       {
            $oth=$_FILES['rimg']['name'];
           copy($_FILES['rimg']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/instituteother/".$oth)or die("Other File Not Uploaded"); 
           $data["resourceurl"]=$oth;
           $data["resourcetype"]=6;
        }
           else if($this->input->post('type')==7)
       {
            $ann=$_FILES['rimg']['name'];
        
copy($_FILES['rimg']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/instituteannouncement/".$ann)or die("Announcement Not Uploaded");
         $data["resourceurl"]=$ann;
         $data["resourcetype"]=7; 
      }
      $this->rm->updateResourceinf($data,$where);
	    redirect("institute/Resources/loadAllLec/$cid");
    } 
    public function loadsinglelecture($rid)
    {
    	$where=array("resourceid"=>$rid);
    	$data=array("linfo"=>$this->rm->selectAllLecByresId($where),
            "qinfo"=>$this->rm->quetionsbyresid($where),
            "ansinfo"=>$this->rm->answerbyresid($where),
            "msg"=>$this->rm->loadmsg()
            );
    	 
    		$this->load->view("institute/singlelecture",$data);
	    	
    }
    public function addanswer($qid,$rid)
    {
    	$where=array(
    		  "questionid"=>$qid
    		);
    	$data=array("answer"=>$this->input->post("txtans"),
    			"instituteuserid"=>$_SESSION["uid"]
    		);
    	$this->rm->insertanswer($data,$where);

	    redirect("institute/Resources/loadsinglelecture/$rid");
    }
    public function blockquestion($qid,$rid)
    {
      $where=array(
          "questionid"=>$qid
        );
      $data=array("status"=>"1");

      $this->rm->insertanswer($data,$where);

            redirect("institute/Resources/loadsinglelecture/$rid");

    }
    public function blockmsg($mid,$rid)
    {
      $where=array(
          "questionstudentpostid"=>$mid
        );
      $data=array("status"=>"1");

      $this->rm->blockreply($data,$where);

            redirect("institute/Resources/loadsinglelecture/$rid");      
    }
}

?>