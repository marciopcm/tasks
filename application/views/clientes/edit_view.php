<div class="row">
<h2 class="page-header">Alterar Cliente</h2>
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-md-6 col-md-offset-3">
				<?php $attributes = array('
					id' => 'cliente_form',
					'class' => 'form-horizontal'
					);
				?>
				<?php echo form_open('clientes/edit', $attributes);?>
					
					<div class="form-group">
						<?php echo form_label('Nome'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'cli_nome',
							);
							$value = $cliente[0]->cli_nome
						 ?>
						 <?php echo form_input($data, $value);?>
					</div>
					<div class="form-group">
						<?php echo form_label('Descrição'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'cli_descricao',
							);
							$value = $cliente[0]->cli_descricao
						 ?>
						 <?php echo form_textarea($data, $value);?>
					</div>
					<div class="form-group">
						<?php echo form_label('Telefone'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'cli_telefone',
							);
							$value = $cliente[0]->cli_telefone
						 ?>
						 <?php echo form_input($data, $value);?>
					</div>
					<div class="form-group">
						<?php echo form_label('E-mail'); ?>
						<?php 
							$data = array(
								'class' => 'form-control',
								'name' => 'cli_email',
							);
							$value = $cliente[0]->cli_email
						 ?>
						 <?php echo form_input($data, $value);?>
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
							'id' => $cliente[0]->id,
						);
						echo form_hidden($data_hdn);
					?>

				<?php echo form_close(); ?>
				<?php echo validation_errors("<p class='bg-danger'>"); ?>
			</div>
		</div>
	</div>
</div>