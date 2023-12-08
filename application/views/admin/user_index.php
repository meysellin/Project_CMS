<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">

	<div class="table-responsive text-nowrap">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
			Tambah User
		</button>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<form action="<?= base_url('admin/user/simpan') ?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
							<button type="button" class="btn btn-close" data-bs-dismiss="modal"
								aria-label="Close"></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col">
									<label class="form-label">Nama</label>
									<input type="text" class="form-control" placeholder="Nama" name="nama" required />
								</div>
							</div>
							<div class="row">
								<div class="col">
									<label class="form-label">Username</label>
									<input type="text" class="form-control" placeholder="Username" name="username"
										required />
								</div>
							</div>
							<div class="row">
								<div class="col">
									<label class="form-label">Password</label>
									<input type="password" class="form-control" placeholder="Password" name="password"
										required />
								</div>
							</div>
							<div class="row">
								<div class="col">
									<label class="form-label">Level</label>
									<select name="level" class="form-control">
										<option value="Admin">Admin</option>
										<option value="Kontributor">Kontributor</option>
									</select>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Simpan</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="card">
			<div class="container">
				<table class="table table-sm  table-hover ">
					<thead class="bg-secondary">
						<p class="card-title">Data Pengguna</p>
						<tr>
							<th>No</th>
							<th>Username</th>
							<th>Nama</th>
							<th>level</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody class="table-border-bottom-0">
						<?php $no = 1 ?>
						<?php foreach ($user as $aa) { ?>
						<tr>
							<td><?= $no++ ?></td>
							<td><?= $aa['username'] ?></td>
							<td><?= $aa['nama'] ?></td>
							<td><?= $aa['level'] ?></td>
							<td>
								<a href="<?php echo site_url('admin/user/delete_data/'.$aa['id_user']);?>"
									class="btn btn-sm btn-danger"
									onClick="return confirm('Apakah anda yakin menghapus data ini')"><span
										class=" ti ti-trash"></span></a>
								<button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
									data-bs-target="#edit<?= $aa['id_user'] ?>">
									<span class="ti ti-pencil-alt"></span>
								</button>
								<div class="modal fade" id="edit<?= $aa['id_user'] ?>" tabindex="-1"
									aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-md" role="document">
										<form action="<?= base_url('admin/user/update') ?>" method="post">
											<input type="hidden" name="id_user" value="<?= $aa['id_user'] ?>">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Perbarui Nama User
													</h5>
													<button type="button" class="btn btn-close" data-bs-dismiss="modal"
														aria-label="Close"></button>
												</div>
												<div class="modal-body">
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Nama</label>
															<input type="text" class="form-control"
																value="<?= $aa['nama'] ?>" name="nama" required />
														</div>
													</div>
													<div class="row">
														<div class="col mb-3">
															<label class="form-label">Username</label>
															<input type="text" class="form-control"
																value="<?= $aa['username'] ?>" name="username"
																readonly />
														</div>
													</div>
													<div class="modal-footer">
														<button type="button" class="btn btn-secondary"
															data-bs-dismiss="modal">Close</button>
														<button type="submit" class="btn btn-primary">Simpan</button>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
	integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
</script>
