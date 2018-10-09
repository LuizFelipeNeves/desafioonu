<?php

    Class Order_model extends CI_Model{
        function __construct(){
            parent::__construct();
        }

        function getAllNewOrder(){
            $condition = "status = 'Legalizado' ORDER BY datei DESC";
            $this->db->select('*');
            $this->db->from('pessoas');
            $this->db->where($condition);

            return $this->db->get();
        }

        function getNewId(){

            $this->db->select("MAX(`identificador`) AS 'lastId'");
            $this->db->from('pessoas');

            return $this->db->get()->row()->lastId + 1;
        }

        function getAllOrder(){
            $this->db->select('*');
            $this->db->from('pessoas');

            return $this->db->get();
        }
		function getAllCountry(){
            $this->db->select('*');
            $this->db->from('pais');

            return $this->db->get();
        }
		
		function getOrderID($_id){
            $this->db->select('*');
            $this->db->from('pessoas');
			      $this->db->where('identificador = ', $_id);
            return $this->db->get();
        }

        function insertOrder($_data){
            $this->db->insert('pessoas',$_data);
        }
		function updateOrder($_data, $_id){
			$this->db->where('`identificador` = ', $_id);
			$this->db->update('pessoas',$_data);
		}

        function updateStatus($_data, $_condition){
            $this->db->where($_condition);
            $this->db->update('pessoas', $_data);
        }

        function deleteOrder($_id){
            $this->db->where('identificador', $_id);
            $this->db->delete('pessoas');
        }
		function picOrder($_id){
			$array = $this->Order_model->getOrderID($_id)->result_array();
			$this->output->set_content_type('application/json')->set_output(json_encode($array));
			/*print_r(json_encode($array));*/
        }
    }
?>
