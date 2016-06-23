<div class="row">
<h2 class="page-header">Cadastrar Clientes</h2>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-md-6 col-md-offset-3">
				<?php $attributes = array('
					id' => 'cliente_form',
					'class' => 'form-horizontal'
					);
				?>
				<?php echo form_open('clientes/create', $attributes);?>
					
					<div class="form-group">
						<?php echo form_label('Nome'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'cli_nome',
							);
						 ?>
						 <?php echo form_input($data);?>
					</div>
					<div class="form-group">
						<?php echo form_label('Descrição'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'cli_descricao',
							);
						 ?>
						 <?php echo form_textarea($data);?>
					</div>
					<div class="form-group">
						<?php echo form_label('Telefone'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'cli_telefone',
							);
						 ?>
						 <?php echo form_input($data);?>
					</div>
					<div class="form-group">
						<?php echo form_label('E-mail'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'cli_email',
							);
						 ?>
						 <?php echo form_input($data);?>
					</div>
					<div class="form-group">
						<?php 
							$data = array(
								'class' => 'btn btn-primary',
								'name' => 'btn_cadastrar',
								'value' => 'Cadastrar'
							);
						 ?>
						 <?php echo form_submit($data);?>
					</div>
				<?php echo form_close(); ?>
				<?php echo validation_errors("<li class='alert alert-danger'>", "</li>"); ?>


				<?php if($this->session->flashdata('cliente_registrado')): ?>
					<?php echo "<div class='alert alert-success'> <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".
					$this->session->flashdata('cliente_registrado')."</div>" ?>
				<?php endif; ?>

				<?php if($this->session->flashdata('cliente_nao_registrado')): ?>
					<?php echo "<div class='alert alert-danger'> <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".
					$this->session->flashdata('cliente_nao_registrado')."</div>" ?>
				<?php endif; ?>


				<?php if($this->session->flashdata('cliente_editado')): ?>
					<?php echo "<div class='alert alert-success'> <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".
					$this->session->flashdata('cliente_editado')."</div>" ?>
				<?php endif; ?>

				<?php if($this->session->flashdata('cliente_nao_editado')): ?>
					<?php echo "<div class='alert alert-danger'> <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".
					$this->session->flashdata('cliente_nao_editado')."</div>" ?>
				<?php endif; ?>

			</div>
		</div>
	</div>
</div>