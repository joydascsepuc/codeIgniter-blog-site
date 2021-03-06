<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<?php 
	
	class Categories_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_categories(){

			$this->db->order_by('name');
			$query = $this->db->get('categories');
			return $query->result_array();
		}

		public function create_category(){
			$slug = url_title($this->input->post('title'));

			$data = array(

				'name' => $this->input->post('name'),
			);

			return $this->db->insert('categories',$data);
		}


		public function get_category($id){
			$query = $this->db->get_where('categories',array('id => $id'));
			return $query->row();
		}
		
	}
