<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="col-lg-12 col-md-12">

	<div class="table-responsive text-nowrap">
		<!-- Button trigger modal -->
		<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
			Tambah Kategori
		</button>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-md" role="document">
				<form action="<?= base_url('admin/kategori/simpan') ?>" method="post">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Tambah Kategori</h5>
							<button type="button" class="btn btn-close" data-bs-dismiss="modal"
								aria-label="Close"></button>
						</div>
						<div class="modal-body">
								<div class="col mb-2">
									<label class="form-label">Nama Kategori</label>
									<input type="text" class="form-control" placeholder="Nama" name="nama_kategori" required />
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
			<table class="table table-sm table-hover">
				<thead class="bg-secondary">
					<p class="card-title">Kategori Konten</p>
					<tr>
						<th>No</th>
						<th>Nama Kategori Konten</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					<?php $no=1; foreach ($kategori as $aa) { ?>
					<tr>
						<td><?= $no; ?></td>
						<td><?= $aa['nama_kategori'] ?></td>
						<td>
							<a href="<?php echo site_url('admin/kategori/delete_data/'.$aa['id_kategori']);?>"
								class="btn btn-sm btn-danger"
								onClick="return confirm('Apakah anda yakin menghapus data ini')"><span
									class=" ti ti-trash"></span></a>
							<button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal"
								data-bs-target="#edit<?= $aa['id_kategori'] ?>">
								<span class="ti ti-pencil-alt"></span>
							</button>
							<div class="modal fade" id="edit<?= $aa['id_kategori'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
								aria-hidden="true">
								<div class="modal-dialog modal-md" role="document">
									<form action="<?= base_url('admin/kategori/update') ?>" method="post">
										<input type="hidden" name="id_kategori" value="<?= $aa['id_kategori'] ?>">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Perbarui Kategori</h5>
												<button type="button" class="btn btn-close" data-bs-dismiss="modal"
													aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<div class="row">
													<div class="col mb-3">
														<label class="form-label">Nama Kategori Konten</label>
														<input type="text" class="form-control" value="<?= $aa['nama_kategori'] ?>"
															name="nama_kategori" required />
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
					<?php $no++; } ?>
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