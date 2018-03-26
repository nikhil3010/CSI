<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

function __construct()
    {
        parent::__construct();
        
    }
	
	public function abc()
	{
		$inp=$this->input->post();
		$name=$inp['name'];
		$cname=$inp['Cname'];
		$sex=$inp['sex'];
		$email=$inp['email'];
		$mob=$inp['mobile'];
		$pass=$inp['password'];
		$cpass=$inp['password_confirmation'];
		$csi=$inp['csi'];

		if($pass==$cpass)
		{
			$array = array('Name' => $name,'College_Name'=>$cname, 'Gender'=>$sex,'Email'=>$email,'Mobile'=>$mob,'Password'=>$pass,'CSI_No'=>$csi );
			
			$this->load->model('csimodel');
			$this->csimodel->register($array);
		}

		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */