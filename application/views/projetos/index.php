<div class="row">
<h2 class="page-header">Projetos</h2>
	<div class="col-md-12">

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<th>Nome</th>
					<th>Cliente</th>
					<th>Descrição</th>
					<th>Data Criação</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					<?php foreach($projetos as $projeto): ?>
						<tr>
							<?php echo "<td><a href='". base_url()."index.php/projetos/display/". $projeto->proj_id ."'>".$projeto->proj_nome."</a></td>" ?>
							<?php echo "<td>".$projeto->cli_id."</td>" ?>
							<?php echo "<td>".$projeto->proj_descricao."</td>" ?>
							<?php echo "<td>".$projeto->proj_datacriacao."</td>" ?>
							<?php echo "<td><a href='".base_url()."index.php/projetos/edit_view/".$projeto->proj_id."' class='btn btn-info btn-block'>Editar</a></td>"; ?>
							<?php echo "<td><a href='".base_url()."index.php/projetos/delete/".$projeto->proj_id."' class='btn btn-danger btn-block'>Excluir</a></td>"; ?>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>
</div>
<div class="row">
	<?php echo "<a class='btn btn-primary' href='".base_url()."index.php/projetos/create_view'>Novo projeto</a>"; ?>
	<?php echo "<a class='btn btn-success' href='".base_url()."index.php/projetos/'>Pesquisar</a>"; ?>
</div>