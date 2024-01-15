<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Des extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		
        $this->load->model("admin/DesM","dm");
    if(!isset($_SESSION['aid']))
        {
        redirect("admin/Login");
    }
	}
    public function index()
    {
    	$tmp=array(
    		       "tins"=>count($this->dm->selectAllinstitute()),                 //for institute
                   "insu"=>count($this->dm->selectAllinstituteUser()),             //for instituteuser
                   "stu"=>count($this->dm->selectAllstudent()),                    //for student
                   "cls"=>count($this->dm->selectAllclass()),                      //for class
                   "cty"=>count($this->dm->selectAllcity()),                       //for city
                   "sta"=>count($this->dm->selectAllstate())                       //for state
                     );
    	$this->load->view("admin/deshbord",$tmp);
    }
    public function loadAllinstitute()
    {
    	$tmp=array("insinfo"=>$this->dm->selectAllinstitute());
    	$this->load->view("admin/dallinstitute",$tmp);    	
    }
    public function loadAllinstituteuser()
    {
    	$tmp=array("insuinfo"=>$this->dm->selectAllinstituteUser());
    	$this->load->view("admin/dallinstituteuser",$tmp);    	
    }    
    public function loadAllstudents()
    {
    	$tmp=array("stuinfo"=>$this->dm->selectAllstudent());
    	$this->load->view("admin/dallstudent",$tmp);    	
    }
    public function loadAllclass()
    {
    	$tmp=array("clsinfo"=>$this->dm->selectAllclass());
    	$this->load->view("admin/dallclass",$tmp);    	
    }    
    public function loadAllcity()
    {
    	$tmp=array("ctyinfo"=>$this->dm->selectAllcity());
    	$this->load->view("admin/dallcity",$tmp);    	
    }    
    public function loadAllstate()
    {
    	$tmp=array("stainfo"=>$this->dm->selectAllstate());
    	$this->load->view("admin/dallstate",$tmp);    	
    }        
    public function blockInsStatus($id)              //For Institute
    {
        $where=array("instituteid"=>$id);
        $data=array("status"=>1);
        $this->dm->updateInsStatus($where,$data);
        
        $this->dm->updateClassStatus($where,$data);
        $d2=$this->dm->allClsByInsid($where);
        foreach($d2 as $i)
        {
            $d=array("classid"=>$i->classid);
            $this->dm->updateClsStudent($d,$data);
        }
        redirect("admin/Des/loadAllinstitute");
    }    
    public function unblockInsStatus($id)
    {
        $where=array("instituteid"=>$id);
        $data=array("status"=>0);
        $this->dm->updateInsStatus($where,$data);
        $d2=$this->dm->allClsByInsid($where);
        foreach($d2 as $i)
        {
            $d=array("classid"=>$i->classid);
            $this->dm->updateClsStudent($d,$data);
        }        
        redirect("admin/Des/loadAllinstitute");
    }
    public function blockStuStatus($id)             //For Student  
    {
        $where=array("studentid"=>$id);
        $data=array("status"=>1);
        $this->dm->updateStuStatus($where,$data);
        redirect("admin/Des/loadAllstudents");
    }    
    public function unblockStuStatus($id)
    {
        $where=array("studentid"=>$id);
        $data=array("status"=>0);
        $this->dm->updateStuStatus($where,$data);
        redirect("admin/Des/loadAllstudents");
    }           
    public function loadData1()
    {
        $qry='';
        if($this->input->post('qry'))
        {
           $qry=$this->input->post('qry');
           $i1=$this->dm->SearchDataIns($qry);
            if(count($i1)>0)
            {
                ?>
                    <tr>
                        <td><?php echo $i1->instituteid; ?></td>
                        <td><?php echo $i1->email; ?></td>
                        <td><?php echo $i1->institutename; ?></td>
                        <td><a href=""><?php echo $i1->website; ?></a></td>
                        <td><?php echo $i1->description; ?></td>
                        <td><img src="<?php echo base_url('resources/shared/instituteimg/'.$i1->coverpic)?>"  height="85px"> </td>
                        <td><a href=""><?php echo $i1->googlemapurl; ?></a></td>
                        <td><a href=""><?php echo $i1->fblink; ?></a></td>
                        <td><a href=""><?php echo $i1->instalink; ?></a></td>
                        <td><a href=""><?php echo $i1->twitterlink; ?></a></td>
                        <td><a href=""><?php echo $i1->linkedinlink; ?></a></td>
                        <td><a href=""><?php echo $i1->youtubelink; ?></a></td>
                        <td><?php echo $i1->cityid; ?></td>
                        <td><?php echo $i1->address; ?></td>
                        <td><?php echo $i1->contactnumber; ?></td>
                        <td><?php echo $i1->status; ?></td>
                        <td><?php echo $i1->regdatetime; ?></td>
                        <td>
                            <?php
                            if($i1->status == 0)
                            {
                                ?>
                                <a href="<?php echo site_url("admin/Des/blockInsStatus/".$i1->instituteid) ?>" class="btn btn-red">Block</a>
                                <?php
                            }
                            else if($i1->status == 1)
                            {
                                ?>
                                <a href="<?php echo site_url("admin/Des/unblockInsStatus/".$i1->instituteid) ?>" class="btn btn-primary">Allow</a>
                                <?php
                            }
                            ?>
                        </td>
                    </tr>            
                <?php
            }
        }
        else
        {
            $d2=$this->dm->selectAllinstitute();
            if(count($d2)>0)
            {
              ?>
                <?php
                   foreach ($d2 as $i1)
                   {
                      ?>                                        
                        <tr>
                            <td><?php echo $i1->instituteid; ?></td>
                            <td><?php echo $i1->email; ?></td>
                            <td><?php echo $i1->institutename; ?></td>
                            <td><a href=""><?php echo $i1->website; ?></a></td>
                            <td><?php echo $i1->description; ?></td>
                            <td><img src="<?php echo base_url('resources/shared/instituteimg/'.$i1->coverpic)?>"  height="85px"> </td>
                            <td><a href=""><?php echo $i1->googlemapurl; ?></a></td>
                            <td><a href=""><?php echo $i1->fblink; ?></a></td>
                            <td><a href=""><?php echo $i1->instalink; ?></a></td>
                            <td><a href=""><?php echo $i1->twitterlink; ?></a></td>
                            <td><a href=""><?php echo $i1->linkedinlink; ?></a></td>
                            <td><a href=""><?php echo $i1->youtubelink; ?></a></td>
                            <td><?php echo $i1->cityid; ?></td>
                            <td><?php echo $i1->address; ?></td>
                            <td><?php echo $i1->contactnumber; ?></td>
                            <td><?php echo $i1->status; ?></td>
                            <td><?php echo $i1->regdatetime; ?></td>
                            <td>
                                <?php
                                if($i1->status == 0)
                                {
                                    ?>
                                    <a href="<?php echo site_url("admin/Des/blockInsStatus/".$i1->instituteid) ?>" class="btn btn-red">Block</a>
                                    <?php
                                }
                                else if($i1->status == 1)
                                {
                                    ?>
                                    <a href="<?php echo site_url("admin/Des/unblockInsStatus/".$i1->instituteid) ?>" class="btn btn-primary">Allow</a>
                                    <?php
                                }
                                ?>
                            </td>
                        </tr>
                       <?php
                   }
                ?>            
              <?php 
            }            
        }

    }
    public function loadStudent1()
    {
        $qry='';
        if($this->input->post('qry'))
        {
            $qry=$this->input->post('qry');
            $i1=$this->dm->SearchDataStu($qry);
            if(count($i1)>0)
            {
                ?>
                    <tr>
                        <td><?php echo $i1->studentid; ?></td>
                        <td><?php echo $i1->fullname; ?></td>
                        <td><?php echo $i1->username; ?></td>
                        <td><?php echo $i1->emailid; ?></td>
                        <td><?php echo $i1->mobilenumber; ?></td>
                        <td><?php echo $i1->cityid; ?></td>
                        <td><img src="<?php echo base_url('resources/shared/images/'.$i1->profilepic)?>" width="85px" height="150px"> </td>
                        <td><?php echo $i1->bio; ?></td>
                        <td><?php echo $i1->regdatetime; ?></td>
                        <td><?php echo $i1->status; ?></td>
                        <td>
                            <?php
                            if($i1->status == 0)
                            {
                                ?>
                                <a href="<?php echo site_url("admin/Des/blockStuStatus/".$i1->studentid) ?>" class="btn btn-red">Block</a>
                                <?php
                            }
                            else if($i1->status == 1)
                            {
                                ?>
                                <a href="<?php echo site_url("admin/Des/unblockStuStatus/".$i1->studentid) ?>" class="btn btn-primary">Allow</a>
                                <?php
                            }
                            ?>
                        </td>                                                   
                    </tr>
                <?php
            }
        }
        else
        {
            $d3=$this->dm->selectAllstudent();
            if(count($d3)>0)
            {
                ?>
                    <?php
                       foreach ($d3 as $i1)
                       {
                          ?>        
                                <tr>
                                    <td><?php echo $i1->studentid; ?></td>
                                    <td><?php echo $i1->fullname; ?></td>
                                    <td><?php echo $i1->username; ?></td>
                                    <td><?php echo $i1->emailid; ?></td>
                                    <td><?php echo $i1->mobilenumber; ?></td>
                                    <td><?php echo $i1->cityid; ?></td>
                                    <td><img src="<?php echo base_url('resources/shared/images/'.$i1->profilepic)?>" width="85px" height="150px"> </td>
                                    <td><?php echo $i1->bio; ?></td>
                                    <td><?php echo $i1->regdatetime; ?></td>
                                    <td><?php echo $i1->status; ?></td>
                                    <td>
                                        <?php
                                        if($i1->status == 0)
                                        {
                                            ?>
                                            <a href="<?php echo site_url("admin/Des/blockStuStatus/".$i1->studentid) ?>" class="btn btn-red">Block</a>
                                            <?php
                                        }
                                        else if($i1->status == 1)
                                        {
                                            ?>
                                            <a href="<?php echo site_url("admin/Des/unblockStuStatus/".$i1->studentid) ?>" class="btn btn-primary">Allow</a>
                                            <?php
                                        }
                                        ?>
                                    </td>                                                   
                                </tr>
                           <?php
                        }
                    ?>
                <?php                      
            }
        }
    }
}

?>