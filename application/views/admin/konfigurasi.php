<form action="<?= base_url('admin/konfigurasi/update') ?>" method="post">
	<div class="modal-content">
		<div class="modal-header">
			<h6 class="modal-title" id="exampleModalLabel">Konfigurasi</h6>
			<button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		</div>
		<div class="modal-body">
			<div class="row">
				<div class="col mb-1">
					<label class="form-label">Judul Website</label>
					<input type="text" class="form-control" name="judul"
						value="<?= $konfig->judul_website; ?>" />
				</div>
			</div>
			<div class="row">
				<div class="col mb-1">
					<label class="form-label">Profile</label>
					<textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?> </textarea>
				</div>
			</div>
			<div class="row">
				<div class="col mb-1">
					<label class="form-label">Instagram</label>
					<input type="text" class="form-control" name="instagram" value="<?= $konfig->instagram; ?>" />
				</div>
			</div>
			<div class="row">
				<div class="col mb-1">
					<label class="form-label">Facebook</label>
					<input type="text" class="form-control" name="facebook" value="<?= $konfig->facebook; ?>" />
				</div>
			</div>
			<div class="row">
				<div class="col mb-1">
					<label class="form-label">Email</label>
					<input type="email" class="form-control" name="email" value="<?= $konfig->email; ?>" />
				</div>
			</div>
			<div class=" row">
				<div class="col mb-1">
					<label class="form-label">Alamat</label>
					<input type="text" class="form-control" name="alamat" value="<?= $konfig->alamat; ?>" />
				</div>
			</div>
			<div class=" row">
				<div class="col mb-1">
					<label class="form-label">Whatsapp</label>
					<input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>" />
				</div>
			</div>
		</div>
		<div class=" modal-footer">
			<button type="submit" class="btn btn-primary">Simpan</button>
		</div>
</form>
