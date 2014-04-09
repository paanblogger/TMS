<?php if (!defined('BASEPATH')) die();
class Main extends Main_Controller {

   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('login');
      $this->load->view('include/footer');
	}
	public function login()
	{		
		$user = $this->input->post('log-username');
		$pass = $this->input->post('log-password');
		
		if(!(($user = NULL) && ($pass = NULL)))
		{
			echo $user;
			echo $pass;
			//$sql = "SELECT * FROM `user` WHERE `u_username` = \'asip.amn\' AND `u_pass` = \'1\'";
			$query = $this->db->query("SELECT * FROM user WHERE u_username = \'asip.amn\' AND u_pass = ".$pass.";");
			$row = $query->row();
			if ($query->num_rows() > 0)
			{
				$this->load->view('include/header');
				$this->load->view('user/index');
				$this->load->view('include/footer');
			}
		}
		else
			{
				$this->load->view('include/header');
				$this->load->view('login');
				$this->load->view('include/footer');
			}
		
		
	}
   
}

/* End of file frontpage.php */
/* Location: ./application/controllers/frontpage.php */
