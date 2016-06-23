<?php 

class Usuario extends CI_Controller {

	// autenticação
	public function index() {
		$this->load->view('usuario/index');
	}


	public function login() {

		$this->form_validation->set_rules('usuario_email', 'Email', 'trim|required');
		$this->form_validation->set_rules('usuario_senha', 'Senha', 'trim|required');

		if($this->form_validation->run() == FALSE) {
			$this->index();
		}
		else {
			$email = $this->input->post('usuario_email');
			$senha = $this->input->post('usuario_senha');
			$res = $this->usuario_model->login_usuario($email, $senha);

			if ($res) {
				redirect('home');
			} else {
				$this->session->set_flashdata('login_error', 'Email ou senha incorreto!');
				$this->load->view('usuario/index');
			}

		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect('usuario');
	}

	public function create_view() {
		$data['main_view'] = 'usuario/create_view';
		$this->load->view('layouts/main', $data);
	}

	// post
	public function create() {

		$this->form_validation->set_rules('us_nome', 'Nome', 'trim|required');
		$this->form_validation->set_rules('us_senha', 'Senha', 'trim|required');
		$this->form_validation->set_rules('us_conf_senha', 'Confirmação da Senha', 'trim|required|min_length[3]|matches[us_senha]');
		$this->form_validation->set_rules('us_email', 'Email', 'trim|required');
		$this->form_validation->set_rules('us_conf_email', 'Confirmação do Email', 'trim|required|min_length[3]|matches[us_email]');



		if($this->form_validation->run() == FALSE) {
			
			// mostra a página de cadastro
			$data['main_view'] = 'usuario/create_view';
			$this->load->view('layouts/main', $data);

		} else {

			$options = ['cost' => 12];
			$encripted_pass = password_hash($this->input->post('us_senha'), PASSWORD_BCRYPT, $options);

			$nome = $this->input->post('us_nome');
			$email = $this->input->post('us_email');

			$data = array(
				'us_nome' => $nome,
				'us_senha' => $encripted_pass,
				'us_email' => $email,
			);
			$res = $this->usuario_model->create_usuario($data);

			if ($res) {
				$this->session->set_flashdata('usuario_registrado', 'Cadastro realizado com sucesso!');
			} else {
				$this->session->set_flashdata('usuario_nao_registrado', 'Problemas ao realizar o cadastro!');
			}

			$data['main_view'] = 'usuario/create_view';
			$this->load->view('layouts/main', $data);
		}
	}
	
}


 ?>