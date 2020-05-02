<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->helper('url_helper');
    }
    public function index()
    {
        $data['users'] = $this->User_model->get_all_user();
        $this->load->view('crud/index', $data);
    }
    public function create()
    {
        $this->load->helper('form');
        
        $data = array(
            'firstname' => $this->input->post('firstName'),
            'lastname' => $this->input->post('lastName')
        );
        
        // echo "<pre>";
        // var_dump($result);
        // die();

        if ($result) {
            return redirect('Crud');
        }
    }
    public function read($id)
    {
        $data['user'] = $this->User_model->get_user($id);

        // echo "<pre>";
        // var_dump($data);
        // die();

        $this->load->view('crud/edit', $data);
    }
    public function update($id)
    {
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data = array(
            'firstname' => $this->input->post('firstName'),
            'lastname' => $this->input->post('lastName')
        );

        // echo "<pre>";
        // var_dump($this->input->post());
        // die();

        $result = $this->User_model->update_user($data, $id);

        if ($result) {
            return redirect('Crud');
        }
    }
    public function delete($id)
    {
        $result = $this->User_model->delete_user($id);
        
        // var_dump($result);
        // die();

        if ($result) {
            return redirect('Crud');
        }
    }
    public function konfirmasi($id)
    {
        $data['id'] = $id;
        $this->load->view('crud/konfirmasi', $data);
    }
}
