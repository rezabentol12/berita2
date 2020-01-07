<div class="container">
	<div class="card shadow">
		<div class="card-body">
			<?php echo form_open_multipart('admin/Admin/add'); ?>
			<div class="form-group">
				<label>judul</label>
				<input type="text" name="judul" class="form-control">
			</div>
			<div class="form-group">
				<label>kategori</label>
				<select class="form-control" name="kategori" >
					<option>Nasional</option>
					<option>Ekonomi</option>	
					<option>Olahraga</option>
					<option>Teknologi</option>			
				</select>
			</div>
			<div class="form-group">
				<label>Type menu</label>
				<select class="form-control" name="type" >
					<option>Horizontal</option>
					<option>Vertical</option>				
				</select>
			</div>
			<div class="form-group">
				<label>Sub Berita Nasional</label>
				<select class="form-control" name="sub" >
					<option value="" disabled selected>Sub Nasional</option>
					<option>Politik</option>
					<option>Hukum&Kriminal</option>
					<option>Peristiwa</option>	
				</select>
			</div>
			<div class="form-group">
				<label>Sub Berita Ekonomi</label>
				<select class="form-control" name="sub">
					<option value="" disabled selected>Sub Ekonomi</option>
					<option>Keuangan</option>
					<option>Energi</option>
					<option>Bisnis</option>
					<option>makro</option>	
				</select>
			</div>
			<div class="form-group">
				<label>Sub Berita Olahraga</label>
				<select class="form-control" name="sub">
					<option value="" disabled selected>Sub Olahraga</option>
					<option>SepakBola</option>
					<option>MotorGP</option>
					<option>F1</option>
					<option>Raket</option>		
				</select>
			</div>
			<div class="form-group">
				<label>Sub Berita Teknologi</label>
				<select class="form-control" name="sub">
					<option value="" disabled selected>Sub Teknologi</option>
					<option>TeknologiInformasi</option>
					<option>Sains</option>
					<option>Telekomunikasi</option>	
					<option>Otomotif</option>
				</select>
			</div>
            <div class="form-group">
				<label>foto</label>
				<input type="file" name="foto" class="form-control">
			</div>
			<div class="form-group">
				<label>Deskripsi</label>
				<textarea name="descripsi" id="editor" rows="10" cols="80"></textarea>
			</div>

			<button type="submit" class="btn btn-sm btn-primary">simpan</button>
		</form>
	</div>
</div>
</div>