<?php 
 /**
   * 
   */
  class Auth extends CI_controller
  {
  	
  	public function __construct()
  	{
  		parent::__construct();
  		$this->load->library('form_validation');
  		$this->load->library('encrypt');
  		$this->load->model('register_model');  		
  	}

  	function index ()
  	{
  		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('register');
		$this->load->view('template/footer');	
	}

	function validation()
	{
		$this->form_validation->set_rules('username','username','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('password','password','required');
		if($this->form_validation->run())
		{
			$data = array(
				'username' 	=> $this->input->post('username'),
				'email'		=> $this->input->post('email'), 
				'password'	=>  $this->input->post('password')

		);
			$id = $this->register_model->insert($data);
			if ($id > 0)
			{
				 $this->session->set_flashdata('message', 'Penambahan Admin Berhasil');
     redirect('auth');
				
			}
		}
		else
		{
			$this->index();
		}
	}

  }