<?php 

class Demandas extends CI_Controller {


	public function index() {
		$data['demandas'] = $this->demandas_model->get_demandas();


		
		$data['main_view'] = 'demandas/index';
		$this->load->view('layouts/main', $data);
	}

	public function create_view() {
		$data['dados_clientes'] = $this->clientes_model->get_clientes();
		$data['main_view'] = 'demandas/create_view';
		$this->load->view('layouts/main', $data);
	}

	public function create() {

		$this->form_validation->set_rules('da_classificacao', 'Classificação', 'trim|required');
		$this->form_validation->set_rules('da_descricao', 'Descrição', 'trim|required');
		$this->form_validation->set_rules('da_situacao', 'Situação', 'trim|required');
		$this->form_validation->set_rules('da_cliente', 'Cliente', 'trim|required');
		$this->form_validation->set_rules('da_tipo', 'Tipo', 'trim|required');

		if($this->form_validation->run() == FALSE) {
			$data['dados_clientes'] = $this->clientes_model->get_clientes();
			$data['main_view'] = 'demandas/create_view';
			$this->load->view('layouts/main', $data);	
		} else {

			$usuario = $this->session->userdata('us_id'); // setado no login (usuario_model)
			$classificacao = $this->input->post('da_classificacao');
			$descricao = $this->input->post('da_descricao');
			$situacao = $this->input->post('da_situacao');
			$cliente = $this->input->post('da_cliente');
			$tipo = $this->input->post('da_tipo');

			$data = array(
				'us_id' 			=> $usuario,
				'cli_id' 			=> $cliente,
				'da_data' 			=> date('d-m-Y'),
				'da_descricao' 		=> $descricao,
				'da_classificacao' 	=> $classificacao,
				'da_situacao'		=> $situacao,
				'da_tipo'			=> $tipo
			);
			$res = $this->demandas_model->create_demanda($data);

			if ($res) {
				$this->session->set_flashdata('demanda_registrado', 'Cadastro realizado com sucesso!');

				$data['demandas'] = $this->demandas_model->get_demandas();
				$data['dados_clientes'] = $this->clientes_model->get_clientes();
				$data['main_view'] = 'demandas/index';
				$this->load->view('layouts/main', $data);
			} else {
				$this->session->set_flashdata('demanda_nao_registrado', 'Problemas ao realizar o cadastro!');

				$data['dados_clientes'] = $this->clientes_model->get_clientes();
				$data['main_view'] = 'demandas/create_view';
				$this->load->view('layouts/main', $data);
			}
		}
	}

}

 ?>