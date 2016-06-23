<?php 


class Clientes extends CI_Controller {


	public function index() {

		$data['clientes'] = $this->clientes_model->get_clientes();

		$data['main_view'] = 'clientes/index';
		$this->load->view('layouts/main', $data);
	}

	// exibe formulario
	public function create_view() {
		$data['main_view'] = 'clientes/create_view';
		$this->load->view('layouts/main', $data);	
	}

	// post do cliente
	public function create() {

		$this->form_validation->set_rules('cli_nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('cli_descricao', 'Descrição', 'trim|required');
		$this->form_validation->set_rules('cli_telefone', 'Telefone', 'trim|required');
		$this->form_validation->set_rules('cli_email', 'Telefone', 'trim|required');

		if($this->form_validation->run() == FALSE) {
			$data['main_view'] = 'clientes/create_view';
			$this->load->view('layouts/main', $data);	
		}
		else {
			$nome = $this->input->post('cli_nome');
			$descricao = $this->input->post('cli_descricao');
			$telefone = $this->input->post('cli_telefone');
			$email = $this->input->post('cli_email');

			$data = array(
				'cli_nome' => $nome,
				'cli_descricao' => $descricao,
				'cli_telefone' => $telefone,
				'cli_email' => $email,
			);
			$res = $this->clientes_model->create_cliente($data);
			if ($res) {
				$this->session->set_flashdata('cliente_registrado', 'Cadastro realizado com sucesso!');
			} else {
				$this->session->set_flashdata('cliente_nao_registrado', 'Problemas ao realizar o cadastro!');
			}
			$data['main_view'] = 'clientes/create_view';
			$this->load->view('layouts/main', $data);	
		}
	}

	// exibe formulario
	public function edit_view($id) {
		$data['cliente'] = $this->clientes_model->get_cliente_id($id);

		$data['main_view'] = 'clientes/edit_view';
		$this->load->view('layouts/main', $data);
	}

	// post do edit
	public function edit() {

		$this->form_validation->set_rules('cli_nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('cli_descricao', 'Descrição', 'trim|required');
		$this->form_validation->set_rules('cli_telefone', 'Telefone', 'trim|required');
		$this->form_validation->set_rules('cli_email', 'Telefone', 'trim|required');

		if($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {

			$id = $this->input->post('id'); // campo hidden
			$nome = $this->input->post('cli_nome');
			$descricao = $this->input->post('cli_descricao');
			$telefone = $this->input->post('cli_telefone');
			$email = $this->input->post('cli_email');

			$data = array(
				'cli_nome' 		=> $nome,
				'cli_descricao' => $descricao,
				'cli_telefone' 	=> $telefone,
				'cli_email' 	=> $email,
			);
			$res = $this->clientes_model->update_cliente($data, $id);
			if ($res) {
				$this->session->set_flashdata('cliente_editado', 'Cadastro atualizado com sucesso!');
			} else {
				$this->session->set_flashdata('cliente_nao_editado', 'Problemas ao atualizar o cadastro!');
			}
			$data['main_view'] = 'clientes/create_view';
			$this->load->view('layouts/main', $data);
		}
	}

	public function delete($id) {
		$this->clientes_model->delete_cliente($id);
		redirect('clientes/index');
	}
	
}
 ?>