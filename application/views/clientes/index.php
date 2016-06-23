<div class="row">
<h2 class="page-header">Clientes</h2>
	<div class="col-md-12">

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<th>Nome</th>
					<th>Descrição</th>
					<th>Telefone</th>
					<th>E-mail</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					<?php foreach($clientes as $cliente): ?>
						<tr>
							<?php echo "<td><a href='". base_url()."index.php/clientes/display/". $cliente->id ."'>".$cliente->cli_nome."</a></td>" ?>
							<?php echo "<td>".$cliente->cli_descricao."</td>" ?>
							<?php echo "<td>".$cliente->cli_telefone."</td>" ?>
							<?php echo "<td>".$cliente->cli_email."</td>" ?>
							<?php echo "<td><a href='".base_url()."index.php/clientes/edit_view/".$cliente->id."' class='btn btn-info btn-block'>Editar</a></td>"; ?>
							<?php echo "<td><a href='".base_url()."index.php/clientes/delete/".$cliente->id."' class='btn btn-danger btn-block'>Excluir</a></td>"; ?>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>
</div>
<div class="row">
	<?php echo "<a class='btn btn-primary' href='".base_url()."index.php/clientes/create_view'>Novo cliente</a>"; ?>
	<?php echo "<a class='btn btn-success' href='".base_url()."index.php/clientes/'>Pesquisar</a>"; ?>
</div>