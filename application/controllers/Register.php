<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('User_model');
    }
	public function index()
	{
        $this->db->from('user');
        $this->db->order_by('nama', 'ASC');
        $user = $this->db->get()->result_array();
		$data = array(
			'judul_halaman' => 'Data Pengguna',
            'user'          => $user
		);
		$this->load->view('register', $data);
	}
    public function simpan()
    {
        $this->db->from('user');
        $this->db->where('username',$this->input->post('username'));
        $cek = $this->db->get()->result_array();
        if($cek<>NULL){
            $this->session->set_flashdata('alert','
            <div class="alert alert-dark alert-dismissible mb-0" role="alert">
                Username sudah ada.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            ');
            redirect('register');
        }
        $this->User_model->register();
        $this->session->set_flashdata('alert','
        <div class="alert alert-dark alert-dismissible mb-0" role="alert">
            Berhasil menambahkan user.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ');
        redirect('auth');
    }
}