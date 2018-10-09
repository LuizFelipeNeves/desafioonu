<?php
defined('BASEPATH') OR exit('No direct script access allowed.');

class Order_insert extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Order_model');
    }

    public function index(){
		   $data['listOrder'] = $this->Order_model->getAllCountry();
           $data['getNewId'] = $this->Order_model->getNewId();
           $this->load->view('order_insert', $data);
    }

    function insertOrder(){
          $data = array(
              'identificador' => $this->input->post('identificador'),
              'nome' => $this->input->post('name_clients'),
              'foto' => $this->input->post('pic'),
              'data_nascimento' => $this->input->post('date'),
              'pais' => $this->input->post('country'),
              'passaporte' => $this->input->post('passport')
          );

          $this->Order_model->insertOrder($data);
          redirect(base_url('order_list'));
    }
  }
?>
