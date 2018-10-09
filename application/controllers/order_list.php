<?php
defined('BASEPATH') OR exit('No direct script access allowed.');

class Order_list extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Order_model');
    }

    public function index(){
		$data['listOrder'] = $this->Order_model->getAllOrder();
        $this->load->view('order_list', $data);
    }

    public function updateStatus(){
        $data['status'] = $this->input->post('status_modal_update');
        $condition['identificador'] = $this->input->post('id_order_update');

        $this->Order_model->updateStatus($data, $condition);

        redirect(base_url('order_list'));
    }

    public function deleteOrder(){
        $id = $this->input->post('id_order_delete');

        $this->Order_model->deleteOrder($id);

        redirect(base_url('order_list'));
	}

	public function picOrder(){

        $id = $this->input->post('id_order_pic');

        $this->Order_model->picOrder($id);

    }
}
?>
