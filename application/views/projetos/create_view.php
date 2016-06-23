<div class="row">
<h2 class="page-header">Cadastrar Projeto</h2>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-md-6 col-md-offset-3">
				<?php $attributes = array('
					id' => 'projeto_form',
					'class' => 'form-horizontal'
					);
				?>
				<?php echo form_open('projetos/create', $attributes);?>
					
					<div class="form-group">
						<?php echo form_label('Nome'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'proj_nome',
							);
						 ?>
						 <?php echo form_input($data);?>
					</div>
					<div class="form-group">
						<?php echo form_label('Descrição'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'proj_descricao',
							);
						 ?>
						 <?php echo form_textarea($data);?>
					</div>
					<div class="form-group">
						<?php echo form_label('Data de Início'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'proj_data',
							);
						 ?>
						 <?php echo form_input($data);?>
					</div>
					<div class="form-group">
						<?php echo form_label('Cliente'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'proj_cliente',
							);
							$options = array();
							foreach ($dados_clientes as $object) {
								$options[$object->id] = $object->cli_nome;
							}
						 ?>
						 <?php echo form_dropdown($data, $options);?>
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


				<?php if($this->session->flashdata('projeto_cadastrado')): ?>
					<?php echo "<div class='alert alert-success'> <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".
					$this->session->flashdata('projeto_cadastrado')."</div>" ?>
				<?php endif; ?>

				<?php if($this->session->flashdata('projeto_nao_cadastrado')): ?>
					<?php echo "<div class='alert alert-danger'> <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".
					$this->session->flashdata('projeto_nao_cadastrado')."</div>" ?>
				<?php endif; ?>


				<?php if($this->session->flashdata('projeto_alterado')): ?>
					<?php echo "<div class='alert alert-success'> <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".
					$this->session->flashdata('projeto_alterado')."</div>" ?>
				<?php endif; ?>

				<?php if($this->session->flashdata('projeto_nao_alterado')): ?>
					<?php echo "<div class='alert alert-danger'> <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".
					$this->session->flashdata('projeto_nao_alterado')."</div>" ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>