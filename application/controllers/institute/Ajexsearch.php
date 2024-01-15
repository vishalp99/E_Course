<?php
defined('BASEPATH')or exit("No direct script is allowed");


class Ajexsearch extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model("institute/AjexsearchM","ajm");

		$this->load->model("institute/ResourcesM","rm");


		$this->load->model("institute/AccessreqM","am");
		if(!isset($_SESSION['uid']))
		{
			redirect("user/Home");
		}
	}

	public function fetch()
	{
		$query='';
		$d2=array();
			
		if($this->input->post('query'))
		{
			$query=$this->input->post('query');
			$d2["c1.classid"]=$this->input->post('cid');
		}
		$data=$this->ajm->fetch_data($query);
		$data2=$this->ajm->fetch_class($d2);
		$data3=$this->rm->selectAllLecByclassId($d2);
		$data4=$this->ajm->fetchstudentsfromclassid($d2);
		$cnt=0;
		if(count($data)>0)
		{
		 foreach ($data as $s) {
			foreach ($data4 as $ss) {
			if($ss->studentid===$s->studentid)
			{
				$cnt++;
			}
		  }
	      }
		 if($cnt === 0)
		 {
 		 ?>
 		 <form method="post" action="<?php echo site_url("institute/Ajexsearch/allowestudentbyfac/$s->studentid/$data2->classid")  ?>">
                                <div class="member-friends messages panel">
                                    <div class="panel-body">
                                        <div class="form-group row wow fadeIn">
                                            <div class="col-sm-9 col-xs-12">
                                                <div class="authorbox">
                                                    <div class="row">
                                                        <div class="col-sm-12 col-md-12">
                                                            <div class="clearfix">
                                                                <div class="avatar-author">
                                                                    <a href="">
                                                                        <img alt="" src="<?php echo base_url("resources/shared/images/$s->profilepic")?>" class="img-responsive">
                                                                    </a>
                                                                </div>
                                                                <div class="author-title desc">
                                                                    <h4><a href="member-profile.html"><?php echo $s->username?></a></h4>
                                                                    <p><?php echo $s->emailid ?></p>

                                                                    <p>Class Lectures</p>
                                                                    <ul class="list-inline social-small">
                                                                    	   <div class="col-lg-3 custom-form clearfix" style="width:auto;">
                                                                      <li><i class="fa fa-unlock-alt" aria-hidden="true"></i>
                                                                      </li>
                                                                     
                                                                        <?php
                                                                        foreach ($data3 as $l) {
                                                                      ?>
                                                                      <li>
                                     <input style="margin-left:10px" type="checkbox" name="txtres[]" value="<?php echo $l->resourceid ?>" checked> <?php echo $l->resourcetitle;?> 

                                                                      </li>
                                                                      
                                                                        <br>
                                                                      <?php 
                                                                        }
                                                                        ?>

                                                                  </div>
                                                                    </ul>

                                                                </div>
                                                            </div>
                                                        </div><!-- end col -->
                                                    </div><!-- end row -->
                                                </div><!-- end authorbox -->
                                            </div>
                                            <div class="col-sm-3 col-xs-12 text-center">
                                                <ul>
                                                    <li><input type="submit" class="btn btn-primary" value="Add"></li>
                                                </ul>
                                            </div>
                                        </div><!-- end form-group -->       

                                        <hr>     
                                    </div><!-- end panel body -->
                                </div><!-- end storelist -->

                        </form>
 		  <?php  
 		   }
 		   else{
 		   	?>
			<h3>Already in Class</h3>
			<?php
 		   }
 	    }
		else{
			?>
			<h3>No Data Found</h3>
			<?php
		}
	}
	public function allowestudentbyfac($sid,$cid)
		{
			$data=array("studentid"=>$sid,
				"classid"=>$cid,
				"addedby"=>"1"
		);
			
			$this->am->givepermission($data);



		$resacs=$this->input->post("txtres");
 		
 		foreach ($resacs as $r) {
		$data2=array("studentid"=>$sid,
			"resourceid"=>$r
			);
		
		$this->am->insertintoresaccess($data2);
	   }
	    redirect("institute/Resources/loadAllLecforfaculty/$cid");
	  	
}
}
?>