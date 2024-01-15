<?php 
defined('BASEPATH')or die("no direct script is allowed");
 
class Student extends CI_Controller
{
public function __construct()
	{
		parent::__construct();
		$this->load->model("user/StudentM","sm");
	}
	public function index()
	{
		$this->load->view('user/login');
	}
	public function validatelogin()
    	{
    		$data=array("username"=>$this->input->post("txtuname"),
				"password"=>$this->input->post("txtpwd")
    			);
    		$loggedinfo=$this->sm->selectlogindata($data);
    		if(count($loggedinfo)>0)
    		{
    			if($loggedinfo[0]->status=="0")
                {
                $_SESSION['stid']=$loggedinfo[0]->studentid;
    			$_SESSION['stname']=$loggedinfo[0]->username;
    			$_SESSION['propic']=$loggedinfo[0]->profilepic;
                 redirect("user/Home/home2");
                }
                else{
                    $this->load->view("user/blockacc");
                }
    		}else
    		{
    			$temp=array("loginerr"=>"invalid username or password");
    			$this->load->view("user/login",$temp);
    		}
    	}
    	public function reg()
    	{
    		$temp=array("states"=>$this->sm->selectallstate());
    		
    		$this->load->view("user/reg",$temp);
    	}
    	public function regstudent()
    	{
    		$img=$_FILES['fup']['name'];
    		copy($_FILES['fup']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/images/".$img)or die("can not upload image");
    		$data=array("fullname"=>$this->input->post('txtfname'),
    			"username"=>$this->input->post('txtuname'),
    			"password"=>$this->input->post('txtpwd'),
    			"emailid"=>$this->input->post('txtmail'),
    			"mobilenumber"=>$this->input->post('txtmno'),
    			"cityid"=>$this->input->post('txtcity'),
    			"profilepic"=>$img,
    			//"bio"=>$this->input->post('txtbio'),
    	);

    		$this->sm->insertstudent($data);
    		redirect("user/Home");
    	
    	}
        public function sendotp()
        {

            $ma=$this->input->post('otmail');
                $ab=rand("10000","99999");
                 $this->load->library('email');
        $config=array(
            'protocol'=>'smtp',
            'smtp_host'=>'ssl://smtp.gmail.com',
            'smtp_port'=>465,
            'smtp_user'=>'ecourselearning99@gmail.com',
            'smtp_pass'=>'Vishal12345'
        );
        $this->email->initialize($config);
      $this->email->from('ecourselearning99@gmail.com', 'Ecourse');
      $this->email->to($ma);
      $this->email->subject("Registration OTP");
      $this->email->message($ab
      );
      $this->email->set_newline("\r\n");
     $this->email->send();

        echo md5($ab);
        }
    	public function loadcitybystate($sid)
    	{
    		$data=array("stateid"=>$sid);
 		$city=$this->sm->selectcitybystateid($data);
                  echo "<option value=-1>select city</option>";
 		foreach ($city as $c) {
 		?>
 			      <option value="<?php echo $c->cityid ?>"><?php echo $c->cityname ?></option>
 		<?php  
 		}
    	}
    	public function logoutstudent()
    	{
    		session_destroy();
    		redirect('user/Home');
    	}
        public function checkusername()
        {
            $query='';

            if($this->input->post('query'))
            {
            $query=$this->input->post('query');
            }
            $data=$this->sm->fetch_data();

            foreach ($data as $k) {
            if($k->username === $query)
            {
                ?>
                *Already taken
                <?php
            }
            }
        
        }
        public function checkmail()
        {

            $query='';

            if($this->input->post('query'))
            {
            $query=$this->input->post('query');
            }
            $data=$this->sm->fetch_data();

            foreach ($data as $k) {
            if($k->emailid === $query)
            {
                ?>
                *Already taken
                <?php
            }
            }
            if(filter_var($query, FILTER_VALIDATE_EMAIL)==false)
            {
                ?>
                Enter valid email
                <?php
            }    
        }
        public function checkmno()
        {

            $query='';

            if($this->input->post('query'))
            {
            $query=$this->input->post('query');
            }
            $data=$this->sm->fetch_data();

            foreach ($data as $k) {
            if($k->mobilenumber === $query)
            {
                ?>
                *Already taken
                <?php
            }
            
            }
            if(!preg_match("/^[6-9]\d{9}$/",$query))
            {
                ?>
                *Not valid number
                <?php
            }    
        }
           public function openforgotpass()
        {
         $this->load->view("user/forgetpas");   
        }
         public function sendpassotp()
        {

            $ma=$this->input->post('otmail');
                $ab=rand("10000","99999");
                 $this->load->library('email');
        $config=array(
            'protocol'=>'smtp',
            'smtp_host'=>'ssl://smtp.gmail.com',
            'smtp_port'=>465,
            'smtp_user'=>'ecourselearning99@gmail.com',
            'smtp_pass'=>'Vishal12345'
        );
        $this->email->initialize($config);
      $this->email->from('ecourselearning99@gmail.com', 'Ecourse');
      $this->email->to($ma);
      $this->email->subject("Change password OTP");
      $this->email->message($ab
      );
      $this->email->set_newline("\r\n");
     $this->email->send();

        echo md5($ab);
        }
        public function changepass()
        {
            $data=array("password"=>$this->input->post("txtcpas"));

            $where = array("emailid"=>$this->input->post("txtemail"));

            $this->sm->chgpass($data,$where);
            redirect("user/Student");
        }

}

?>