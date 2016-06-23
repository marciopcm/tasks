<?php 

class Projetos extends CI_Controller {

	public function index() {

		$data['projetos'] = $this->projetos_model->get_projetos();

		$data['main_view'] = 'projetos/index';
		$this->load->view('layouts/main', $data);
	}

	// para exibir o formulario com os dados
	public function edit_view($id) {

		$data['dados_clientes'] = $this->clientes_model->get_clientes();
		$data['projeto'] = $this->projetos_model->get_projetos_id($id);

		$data['main_view'] = 'projetos/edit_view';
		$this->load->view('layouts/main', $data);
	}

	// post
	public function edit() {

		$this->form_validation->set_rules('proj_nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('proj_descricao', 'Descrição', 'trim|required');
		$this->form_validation->set_rules('proj_data', 'Data de Início', 'trim|required');
		$this->form_validation->set_rules('proj_cliente', 'Cliente', 'trim|required');

		if($this->form_validation->run() == FALSE) {
			//redirect('projetos/index');
		}
		else {
			$nome = $this->input->post('proj_nome');
			$descricao = $this->input->post('proj_descricao');
			$data = $this->input->post('proj_data');
			$cliente = $this->input->post('proj_cliente');
			$id = $this->input->post('id');

			$data = array(
				'cli_id' 			=> $cliente,
				'proj_nome' 		=> $nome,
				'proj_descricao' 	=> $descricao,
				'proj_datacriacao' 	=> $data
			);
			$res = $this->projetos_model->update_projeto($data, $id);
			if ($res) {
				$this->session->set_flashdata('projeto_alterado', 'Alteração realizada com sucesso!');
			} else {
				$this->session->set_flashdata('projeto_nao_alterado', 'Problemas ao alterar o cadastro!');
			}
			$this->create_view();
		}

	}

	// para exibir o formulario
	public function create_view() {
		$data['dados_clientes'] = $this->clientes_model->get_clientes();
		$data['main_view'] = 'projetos/create_view';
		$this->load->view('layouts/main', $data);
	}

	// post
	public function create() {

		$this->form_validation->set_rules('proj_nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('proj_descricao', 'Descrição', 'trim|required');
		$this->form_validation->set_rules('proj_data', 'Data de Início', 'trim|required');
		$this->form_validation->set_rules('proj_cliente', 'Data de Início', 'trim|required');

		if($this->form_validation->run() == FALSE) {
			$this->create_view();
		}
		else {
			$nome = $this->input->post('proj_nome');
			$descricao = $this->input->post('proj_descricao');
			$data = $this->input->post('proj_data');
			$cliente = $this->input->post('proj_cliente');

			$data = array(
				'cli_id' 			=> $cliente,
				'proj_nome' 		=> $nome,
				'proj_descricao' 	=> $descricao,
				'proj_datacriacao' 	=> $data
			);
			$res = $this->projetos_model->create_projeto($data);

			if ($res) {
				$this->session->set_flashdata('projeto_cadastrado', 'Cadastro realizado com sucesso!');
			} else {
				$this->session->set_flashdata('projeto_nao_cadastrado', 'Problemas ao realizar o cadastro!');
			}
			$this->create_view();
		}
	}

	public function delete($id) {
		$this->projetos_model->delete_projeto($id);
		redirect('projetos/index');
	}
}

?>