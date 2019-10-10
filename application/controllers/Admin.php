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

	public function hapus($NPM)
	{
		$where = array('Admin_id' => $Admin_id);
		$this->m_admin->hapus_data($where, 'login');
		redirect ('admin/index');
	}

	public function edit ($NPM){
		$where = array('NPM' => $NPM);
		$data ['mahasiswa'] = $this->m_mahasiswa->edit_data($where, 'tb_mhs')->result();
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('edit', $data);

		$this->load->view('template/footer');
	}

	public function update (){
		$NPM 		=$this->input->post('NPM');
		$Nama 		=$this->input->post('Nama');
		$Tlp 		=$this->input->post('Tlp');
		$Alamat 	=$this->input->post('Alamat');
		$Tgl_lahir 	=$this->input->post('Tgl_lahir');
		$Jurusan 	= $this->input->post('Jurusan');
		$Kelas 		= $this->input->post('Kelas');
		$IPK 		= $this->input->post('IPK');

		$data=array(
				'NPM'		=> $NPM,
				'Nama' 		=> $Nama,
				'Tlp' 		=> $Tlp,
				'Alamat' 	=> $Alamat,
				'Tgl_lahir' => $Tgl_lahir,
				'Jurusan'	=>$Jurusan,
				'Kelas'		=>$Kelas,
				'IPK'		=>$IPK
		);

		$where = array(
			'NPM' => $NPM
		);

		$this->m_mahasiswa->update_data($where,$data,'tb_mhs');
		redirect ('mahasiswa/index');
	}

	public function detail($NPM)
	{
		$this->load->model('m_mahasiswa');
		$detail = $this->m_mahasiswa->detail_data($NPM);
		$data['detail'] = $detail;
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('Detail', $data);

		$this->load->view('template/footer');
	}

	

}










?>