<?= include '../views/layouts/header.view.php' ?>
<div class="container">
	<div class="jumbotron">
		<h3 class="text-dark text-center"><?= $data['title'] ? $data['title'] : 'Dashboard' ?></h3>
	</div>
	<div class="card">
		<div class="card-header">
			<h3 class="text-gray-800">User Management</h3>
		</div>
		<div class="card-body">
			<table class="table">
				<thead>
					<th>No</th>
					<th>Username</th>
					<th>Alamat</th>
					<th>Pendidikan</th>
					<th>Umur</th>
					<th class="text-center"><i class="fas fa-cogs"></i></th>
				</thead>
				<?php $i = 1; foreach ($data['users'] as $key): ?>
					<tbody>
						<tr>
							<td><?= $i++ ?></td>
							<td><?= $key['username']?></td>
							<td><?= $key['alamat']?></td>
							<td><?= $key['pendidikan']?></td>
							<td><?= $key['umur']?></td>
							<td align="center">	
								<button class="btn btn-warning btn-sm open_modal_management" value="<?= $key['id_users']?>"><i class="fas fa-pencil-alt"></i>
								</button>
								<button class="btn btn-danger btn-sm delete-management" value="<?= $key['id_users']?>"><i class="fas fa-trash"></i>
								</button>
							</td>
						</tr>
					</tbody>
				<?php endforeach ?>
		</table>
	</div>
</div>
</div>
<?= include '../views/layouts/footer.view.php' ?>