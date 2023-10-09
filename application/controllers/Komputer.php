<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Komputer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("penjualan_model");
        $this->load->library('session');
    }

    public function index()
    {
        $this->load->view('template/header');  
        $this->load->view('template/sidebar');
        $this->load->view('dasboard'); 
        $this->load->view('template/footer');
    }
    public function penjualan_komputer() 
    {
        $this->load->view('template/header');  
        $this->load->view('template/sidebar');
        $this->load->view('form_input'); 
        $this->load->view('template/footer'); 
    }
    public function simpan_data()
    {
         $simpan_data = $this->penjualan_model;
        $hasil = $simpan_data->save();

        if($hasil){
            $this->session->set_flashdata('message', 'success');
            redirect('komputer/penjualan_komputer');
        }else{
            $this->session->set_flashdata('message', 'error');
            redirect('komputer/penjualan_komputer');


        }
    }
    public function data_penjualan()
    {
        $data  = $this->penjualan_model;
        $hasil['data'] = $data->select();
        $this->load->view('template/header');  
        $this->load->view('template/sidebar');
        $this->load->view('data_penjualan', $hasil); 
        $this->load->view('template/footer'); 
    }
    public function update_penjualan()
    {    
        $data  = $this->penjualan_model;
        $hasil['data'] = $data->show_data();
        $this->load->view('template/header');  
        $this->load->view('template/sidebar');
        $this->load->view('form_update',$hasil); 
        $this->load->view('template/footer'); 
    }

    public function update_data()
    {
        $data = $this->penjualan_model;
        $update = $data->update();

        if($update){
            $this->session->set_flashdata('message', 'success update');
            redirect('komputer/data_penjualan');
        }else{
            $this->session->set_flashdata('message', 'error');
            redirect('komputer/data_penjualan');
        }
    }

    public function delete_data()
    {
        $data = $this->penjualan_model;
        $delete = $data->delete($this->input->get('id'));

        if($delete){
            $this->session->set_flashdata('message', 'success delete');
            redirect('komputer/data_penjualan');
        }else{
            $this->session->set_flashdata('message', 'error');
            redirect('komputer/data_penjualan');


        }
    }
}
/* End of file Komputer.php and path \application\controllers\Komputer.php */
