<?php

class Admin extends CI_Controller
{
	
	public function index() 
	{
		$data['admin'] = $this->m_admin->tampil_data()->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('admin', $data);

		$this->load->view('template/footer');
	}

	public function hapus($id)
	{
		$where = array('id' => $id);
		$this->m_admin->hapus_data($where, 'login');
		redirect ('admin/index');
	}

	public function edit ($id){
		$where = array('id' => $id);
		$data ['admin'] = $this->m_admin->edit_data($where, 'login')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('edit_admin', $data);

		$this->load->view('template/footer');
	}

	public function update (){
		$id				=$this->input->post('id');
		$Nama 			=$this->input->post('Nama');
		$Tlp 			=$this->input->post('Tlp');
		$Alamat 		=$this->input->post('Alamat');
		$Tgl_lahir 		=$this->input->post('Tgl_lahir');
		$username 		= $this->input->post('username');
		$email 			= $this->input->post('email');
		$password 		= $this->input->post('password');

		$data=array(
				'id'			=> $id,
				'Nama' 			=> $Nama,
				'Tlp' 			=> $Tlp,
				'Alamat' 		=> $Alamat,
				'Tgl_lahir' 	=> $Tgl_lahir,
				'username'		=>$username,
				'email'			=>$email,
				'password'		=>$password
		);

		$where = array(
			'id' => $id
		);

		$this->m_admin->update_data($where,$data,'login');
		redirect ('admin/index');
	}

	public function detail($id)
	{
		$this->load->model('m_admin');
		$detail = $this->m_admin->detail_data($id);
		$data['detail'] = $detail;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('Detail_admin', $data);

		$this->load->view('template/footer');
	}

	

}










?>