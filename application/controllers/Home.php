<?php 

class Home extends CI_Controller {

	public function index() {
		$data['main_view'] = 'home/index';
		$this->load->view('layouts/main', $data);
	}
}

?>