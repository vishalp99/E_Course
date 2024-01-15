<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Institutereg extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("institute/InstituteregM","im");
	}
	public function index()
	{
		$temp=array("states"=>$this->im->selectstate());

		$this->load->view("institute/institutereg",$temp);
	}
	public function loadcitybystate($sid)
    	{
    		$data=array("stateid"=>$sid);
 		$city=$this->im->selectcitybystateid($data);
              echo "<option value=-1>select city</option>";
 		foreach ($city as $c) {
 		?>
 			      <option value="<?php echo $c->cityid ?>"><?php echo $c->cityname ?></option>
 		<?php  
 		}
    	}
    	public function addins()
    	{
 			$img=$_FILES['fup']['name'];
 			copy($_FILES['fup']['tmp_name'],"C:/xampp/htdocs/E_Course/resources/shared/instituteimg/".$img)or die("not uploaded");

 				$data=array("email"=>$this->input->post("txtmail"),
 					"institutename"=>$this->input->post("txtiname"),
 					//"description"=>$this->input->post("txtdesc"),
 					"coverpic"=>$img,
 					"cityid"=>$this->input->post("txtcity"),
 					"address"=>$this->input->post("txtaddr"),
 					"contactnumber"=>$this->input->post("txtmno")
 			);
 				$d2=$this->im->insertinstitute($data);
 				    $data2=array("instituteid"=>$d2,
 				    	"username"=>$this->input->post("txtuname"),
 				    	"password"=>$this->input->post("txtpwd"),
 				    	"email"=>$this->input->post("txtumail"),
 				    //	"description"=>$this->input->post("txtudesc"),
 				    	"mobilenumber"=>$this->input->post("txtcno"),
 				    	"level"=>"1"
 				);
 				$this->im->insertdefaultuser($data2);    
 				redirect("institute/InsLogin");
    	}

    	 public function checkmail()
        {

            $query='';

            if($this->input->post('query'))
            {
            $query=$this->input->post('query');
            }
            $data=$this->im->fetch_data();

            foreach ($data as $k) {
            if($k->email === $query)
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
            $data=$this->im->fetch_data();

            foreach ($data as $k) {
            if($k->contactnumber === $query)
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


        public function checksuperusername()
        {
            $query='';

            if($this->input->post('query'))
            {
            $query=$this->input->post('query');
            }
            $data=$this->im->fetch_sudata();

            foreach ($data as $k) {
            if($k->username === $query)
            {
                ?>
                *Already taken
                <?php
            }
            }
        
        }
        public function checksupermail()
        {

            $query='';

            if($this->input->post('query'))
            {
            $query=$this->input->post('query');
            }
            $data=$this->im->fetch_sudata();

            foreach ($data as $k) {
            if($k->email === $query)
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
        public function checksupermno()
        {

            $query='';

            if($this->input->post('query'))
            {
            $query=$this->input->post('query');
            }
            $data=$this->im->fetch_sudata();

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
}
?>