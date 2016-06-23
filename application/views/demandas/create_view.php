<div class="row">
<h2 class="page-header">Cadastrar Atendimentos - Demandas</h2>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-md-6 col-md-offset-3">
				<?php $attributes = array('
					id' => 'projeto_form',
					'class' => 'form-horizontal'
					);
				?>
				<?php echo form_open('demandas/create', $attributes);?>
					
					<div class="form-group">
						<?php echo form_label('Classificação'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'da_classificacao',
							);
							$options = array(
						        'N' => 'Normal',
						        'M'	=> 'Média',
						        'U' => 'Urgente',
							);
						 ?>
						 <?php echo form_dropdown($data, $options);?>
					</div>
					<div class="form-group">
						<?php echo form_label('Descrição'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'da_descricao',
							);
						 ?>
						 <?php echo form_textarea($data);?>
					</div>
					<div class="form-group">
						<?php echo form_label('Situação'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'da_situacao',
							);
							$options = array(
						        'A' => 'Análise',
						        'F'	=> 'A Fazer',
						        'D' => 'Em Desenvolvimento',
						        'T' => 'Teste',
						        'H' => 'Homologação',
						        'P' => 'Pronto',
							);
						 ?>
						 <?php echo form_dropdown($data, $options);?>
					</div>
					<div class="form-group">
						<?php echo form_label('Tipo'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'da_tipo',
							);
							$options = array(
						        'B' => 'Bug',
						        'M' => 'Melhoria'
							);
						 ?>
						 <?php echo form_dropdown($data, $options);?>
					</div>
					<div class="form-group">
						<?php echo form_label('Cliente'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'da_cliente',
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


				<?php if($this->session->flashdata('demanda_cadastrado')): ?>
					<?php echo "<div class='alert alert-success'> <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".
					$this->session->flashdata('demanda_cadastrado')."</div>" ?>
				<?php endif; ?>

				<?php if($this->session->flashdata('demanda_nao_cadastrado')): ?>
					<?php echo "<div class='alert alert-danger'> <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".
					$this->session->flashdata('demanda_nao_cadastrado')."</div>" ?>
				<?php endif; ?>


				<?php if($this->session->flashdata('demanda_alterado')): ?>
					<?php echo "<div class='alert alert-success'> <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".
					$this->session->flashdata('demanda_alterado')."</div>" ?>
				<?php endif; ?>

				<?php if($this->session->flashdata('demanda_nao_alterado')): ?>
					<?php echo "<div class='alert alert-danger'> <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>".
					$this->session->flashdata('demanda_nao_alterado')."</div>" ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>