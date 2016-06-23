<div class="row">
<h2 class="page-header">Alterar Projeto</h2>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-md-6 col-md-offset-3">
				<?php $attributes = array('
					id' => 'projeto_form',
					'class' => 'form-horizontal'
					);
				?>
				<?php echo form_open('projetos/edit', $attributes);?>
					
					<div class="form-group">
						<?php echo form_label('Nome'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'proj_nome',
							);
						 ?>
						 <?php $value = $projeto[0]->proj_nome ?>
						 <?php echo form_input($data, $value);?>
					</div>
					<div class="form-group">
						<?php echo form_label('Descrição'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'proj_descricao',
							);
						 ?>
						 <?php $value = $projeto[0]->proj_descricao ?>
						 <?php echo form_textarea($data, $value);?>
					</div>
					<div class="form-group">
						<?php echo form_label('Data de Início'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'proj_data',
							);
						 ?>
						 <?php $value = $projeto[0]->proj_datacriacao ?>
						 <?php echo form_input($data, $value);?>
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
								'value' => 'Alterar'
							);
						 ?>
						 <?php echo form_submit($data);?>
					</div>
						<?php 
							$data_hdn = array(
								'id' => $projeto[0]->proj_id,
							);
							echo form_hidden($data_hdn);
						?>
				<?php echo form_close(); ?>
				<?php echo validation_errors("<p class='bg-danger'>"); ?>
			</div>
		</div>
	</div>
</div>