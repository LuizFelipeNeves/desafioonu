<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_traslados extends CI_Controller {

    public function index()
    {
		/* Inserir aqui a Função para checar a permissão */
		$this->load->view('Order_traslados');
    }
}
