<div id="ngilang">
	<?= $this->session->flashdata('alert') ?>
</div>
<div class="card m-0" style="width: 950px;">
	<form action="<?= base_url('admin/caraousel/simpan/') ?>" method="post" enctype='multipart/form-data'>
		<h6 class="card-header">File Input</h6>
		<div class="col mb-2">
			<label class="form-label">Judul</label>
			<input type="text" class="form-control" placeholder="judul foto" name="judul" required />
		</div>
		<div class="mb-2">
			<label for="formFile" class="form-label">Pilih Foto dengan ukuran (1:3)</label>
			<input class="form-control bg-white" type="file" name="foto">
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
	</form>
</div>
<?php foreach ($caraousel as $aa){ ?>
<div class="col-md-5 mb-3 mt-3">
	<div class="card h-100">
		<img class="card-img-top" src="<?= base_url('assets/upload/caraousel/'.$aa['foto']) ?>">
		<div class="card-body">
			<h5 class="card-title"><?= $aa['judul'] ?></h5>
			<a href="<?php echo base_url('admin/caraousel/delete_data/'.$aa['foto']); ?>" class="btn btn-sm btn-danger"
				onClick="return confirm('Apakah anda yakin menghapus data ini?')"><span class="ti ti-trash"></span>
			</a>
		</div>
	</div>
</div>
<?php } ?>
