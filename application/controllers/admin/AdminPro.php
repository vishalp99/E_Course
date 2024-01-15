<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPro extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
       
       $this->load->model("admin/AdminProM","am");
	   if(!isset($_SESSION['aid']))
        {
        redirect("admin/Login");
       }
    }
    public function index()
    {
        $tmp=array("ins"=>$this->am->selectIns(),
                   "insiu"=>$this->am->selectInsInsU(),
                   "stu"=>$this->am->selectStudent());
        $this->load->view("admin/admin_profile",$tmp);
    }
    public function loadEditPro()
    {
        $data=array("adminid"=>$_SESSION['aid']);
        $tmp=array("ainf"=>$this->am->selectAdminById($data));
        $this->load->view("admin/editadminpro",$tmp);
    }
    public function editBasicInfo()
    {
        $data=array(
                    "username"=>$this->input->post("txtaname"),
                    "emailid"=>$this->input->post("txtaemail")
                    );
        $_SESSION['uname']=$this->input->post("txtaname");
        $where=array("adminid"=>$_SESSION['aid']);
        $this->am->updateAdminPro($data,$where);
        redirect("admin/AdminPro");
    }
    public function editPassInfo()
    {
        $opass=$this->input->post("txtopass");
        $npass=$this->input->post("txtnpass");
        $cpass=$this->input->post("txtcpass");
        $data=array("adminid"=>$_SESSION['aid']);
        $ainfo=$this->am->selectAdminById($data);
        if($npass!==$cpass)
        {
            $tmp=array("ainf"=>$ainfo,
                       "err"=>"Please Enter Valid Confirm Password");
            
            $this->load->view("admin/editadminpro",$tmp);
         }  
         else
         {
            if($opass!==$ainfo[0]->password)
            {
                $tmp=array("ainf"=>$ainfo,
                           "err"=>"InValid Valid Old Password");
                $this->load->view("admin/editadminpro",$tmp);                
            }
            else
            {
                $data=array("password"=>$npass);
                $where=array("adminid"=>$_SESSION['aid']);
                $this->am->updateAdminPro($data,$where);
        
                $tmp=array("ainf"=>$ainfo,
                           "err1"=>"Password Changed");
                $this->load->view("admin/editadminpro",$tmp);                         
            }
         }  
    }
    public function editImgInfo()
    {
        if(!empty($_FILES['txtaimg']['name']))
        {
            $img=$_FILES['txtaimg']['name'];
            copy($_FILES['txtaimg']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/images/".$img)or die("Image Not Uploaded");
            $where=array("adminid"=>$_SESSION['aid']);
            $data=array("contact"=>$this->input->post("txtacon"),
                         "profilepic"=>$img);
            $_SESSION['uimg']=$img;
            $_SESSION['contact']=$this->input->post("txtacon");
            $this->am->updateAdminPro($data,$where);                                     
            redirect("admin/AdminPro");
        }
        else
        {
            $where=array("adminid"=>$_SESSION['aid']);
            $data=array("contact"=>$this->input->post("txtacon"));
            $_SESSION['contact']=$this->input->post("txtacon");
            $this->am->updateAdminPro($data,$where);                                     
            redirect("admin/AdminPro");            
        }
    }
}
?>
