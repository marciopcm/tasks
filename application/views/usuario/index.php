<!DOCTYPE html>
<html lang='pt-br'>
<head>
	<meta charset="utf-8">
	<title>Tarefas - Autenticação do Usuario</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">

				<?php $attributes = array('
					id' => 'login_form',
					'class' => 'form-horizontal'
					);
				?>
				<?php echo form_open('usuario/login', $attributes);?>
					<h2 class="page-header text-center">Autenticação</h2>
					<div class="form-group">
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'usuario_email',
								'placeholder' => 'Informe seu email'
							);
						 ?>
						 <?php echo form_input($data);?>
					</div>
					<div class="form-group">
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'usuario_senha',
								'placeholder' => 'Informe sua senha'
							);
						 ?>
						 <?php echo form_password($data);?>
					</div>
					<div class="form-group">
						<?php 
							$data = array(
								'class' => 'btn btn-primary btn-block',
								'name' => 'btn_logar',
								'value' => 'login'
							);
						 ?>
						 <?php echo form_submit($data);?>
					</div>
				<?php echo form_close(); ?>
				<?php echo validation_errors("<p class='bg-danger'>"); ?>

				<?php if($this->session->flashdata('login_error')): ?>
					<?php echo "<div class='alert alert-danger'> <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".
					$this->session->flashdata('login_error')."</div>" ?>
				<?php endif; ?>

			</div>
		</div>
	</div>

	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>