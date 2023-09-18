<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{
	    protected $db2;
		public function __construct()
	{
		parent::__construct();
		
		$this->db2 = $this->load->database('db2', TRUE);

		
	}
	
public function  getdata()
{
	// $db2 = $this->load->database('db2', TRUE);
	//  $data=$this->db2->get('usertable')->result_array();

	$name="CALL getdata(?)";
	$data = array('user_id' =>'p5r77799' , );
	$result=$this->db->query($name,$data)->result_array();
	debug($result);exit;


   // $this->db2->select('usertable.*,gocartusertable.*');
   // $this->db2->from('usertable');
   // $this->db2->join('gocartusertable','gocartusertable.gocartid = usertable.gocartid','outer');
   // $result=$this->db2->get()->result_array();
   // $result=$this->db2->last_query();
  $this->load->library('table');



echo $this->table->generate($data);exit;
}



public function save_data($data)
{
	 $data['userid']=random_str(8);
	 unset($data['type']);

	$this->db->insert('user',$data);
	

}

public function checkLogin($data)
{
	$response = array();
	$sql= "CALL checklogin(?,?)";
    // $this->db->select('*');
	// $this->db->from('user');
	// $this->db->where('email',$data['email']);
	$arr = array('username' =>$data['email'] ,'pass'=>$data['password'] );
	$result=$this->db->query($sql,$arr);
	$count=$result->num_rows();
	if($count>0)
	{
		$res=$result->result_array();
		debug($res);
		if($res[0]['password']==$data['password'])
		{
			$sess_data = array('name' =>$res[0]['name'],'email'=>$res[0]['email'],'userid'=>$res[0]['userid'],'id'=>$res[0]['id']);
			$this->session->set_userdata($sess_data);

			$response = array('st_code' =>200 ,'status'=>'success','msg'=>'Logged in successfully' );
		}
		else
		{
			$response = array('st_code' =>201 ,'status'=>'error','msg'=>'Invalid password' );
		}
	}
	else
	{
		$response = array('st_code' =>202 ,'status'=>'error','msg'=>'Invalid User' );
	}

	return $response;
}
	 
	
}

/**
 * 
 */
class Vehicle 
{
	
	private $name;
	private $color;
	private $wheel;

	public function setname($n)
	{
		$this->name=$n;
	}

	public function getname()
	{
		return $this->name;
	}

	public function abc()
	{
		echo "parent class abc function";
	}
}

/**
 * 
 */
class Car extends Vehicle
{
	  
	public function abc()
	{
		echo "child class abc function";
	}
}

$v=new Vehicle();
debug($v->abc());
// debug($v);exit;
$car_obj=new car();
debug($car_obj->abc());exit;

$name1=$car_obj->setname('akhil');
$name1=$car_obj->getname();
debug($name1);exit;


?>

