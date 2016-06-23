<div class="row">
<h2 class="page-header">Atendimentos - Demandas</h2>
	<div class="col-md-12">

		<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<th>Demanda</th>
					<th>Usuario</th>
					<th>Descrição</th>
					<th>Data</th>
					<th>Classificação</th>
					<th>Tipo</th>
					<th>Situação</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					<?php foreach($demandas as $demanda): ?>
						<tr>
							<?php echo "<td><a href='". base_url()."index.php/demandas/edit_view/". $demanda->da_id ."'>".$demanda->da_id."</a></td>" ?>
							<?php echo "<td>".$demanda->us_id."</td>" ?>
							<?php echo "<td>".$demanda->da_descricao."</td>" ?>
							<?php echo "<td>".$demanda->da_data."</td>" ?>
							<?php echo "<td>".$demanda->da_classificacao."</td>" ?>
							<?php echo "<td>".$demanda->da_tipo."</td>" ?>
							<?php echo "<td>".$demanda->da_situacao."</td>" ?>
							<?php echo "<td><a href='".base_url()."index.php/demandas/edit_view/".$demanda->da_id."' class='btn btn-info btn-block'>Editar</a></td>"; ?>
							<?php echo "<td><a href='".base_url()."index.php/demandas/delete/".$demanda->da_id."' class='btn btn-danger btn-block'>Excluir</a></td>"; ?>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>

	</div>
</div>
<div class="row">
	<?php echo "<a class='btn btn-primary' href='".base_url()."index.php/demandas/create_view'>Nova Demanda</a>"; ?>
	<?php echo "<a class='btn btn-success' href='".base_url()."index.php/demandas/'>Pesquisar</a>"; ?>
</div>