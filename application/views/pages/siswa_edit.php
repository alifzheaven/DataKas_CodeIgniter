<?php
	if ($query == NULL) {
		$title = "Tambah";
	}else{
		$title = "Edit";

	}
	if($query->num_rows() == 0 ) redirect('siswa');
	$r = $query->result()[0];
?> 
<div class="card card-default" style="border-radius: 0px;  margin: 20px 0;">
	<div class="card-header"><?php echo $title; ?> Data Siswa</div>
	<div class="card-body">
		<?php echo anchor ('siswa','kembali','class="btn btn-secondary"
		style="margin: 0 5px; margin-bottom: 5px;"'); ?> 
		<hr/> 
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form method="post" action="../update/<?php echo $r->siswa_id; ?>">
					<div class="form-group"> 
						<label>NISN</label>
						<input type="text" name="siswa_nisn" value="<?php echo $r->nisn; ?>" 
						class="form-control" placeholder=".."> 
						<small class="form-text text-muted"> Isikan
						NISN sesuai dengan data dari Website : 
						http://nisn.kemendikbud.go.id </small>
					</div>

					<div class="form-group"> 
						<label>NamaLengkap</label>
						<input type="text" name="siswa_nama_lengkap" value="<?php echo $r->nama_lengkap; ?>"
						class="form-control" placeholder="..."> 
					</div>

					<div class="form-group"> 
						<label> minggu1</label>
						<input type="text" name="siswa_minggu1" value="<?php echo $r->minggu1; ?>"
						class="form-control" placeholder="..."> 
					</div>

					<div class="form-group"> 
						<label>minggu2 </label>
						<input type="text" name="siswa_minggu2" value="<?php echo $r->minggu2; ?>"
						class="form-control" placeholder="..."> 
					</div>

					<div class="form-group"> 
						<label>minggu3 </label>
						<input type="text" name="siswa_minggu3" value="<?php echo $r->minggu3; ?>"
						class="form-control" placeholder="..."> 
					</div>

					<div class="form-group"> 
						<label>minggu4 </label>
						<input type="text" name="siswa_minggu4" value="<?php echo $r->minggu4; ?>"
						class="form-control" placeholder="..."> 
					</div>

					<div class="form-group">
						<label>Tanggal </label>
						<input type="date" name="siswa_tanggal"  value="<?php echo $r->tanggal; ?>"
						class="form-control" placeholder="...">
					</div>

					

					<div class="form-group">
						<label>bulan</label>
						<?php
							$option = array 
							(
								""=>"- Pilih bulan -",
								"01"=> "Januari", 
								"02"=> "Februari",
								"03"=> "Maret",
								"04"=> "April",
								"05"=> "Mei",
								"06"=> "Juni",
								"07"=> "Juli",
								"08"=> "Agustus",
								"09"=> "September",
								"10"=> "Oktober",
								"11"=> "November",
								"12"=> "Desember",

							);
							// echo form_dropdown ('siswa_bulan' , $option, '', 'class="form-control"');

						?>
						<select class="form-control" name="siswa_bulan"> 
							<?php
								foreach ($option as $key => $value) {
									if($r->bulan == $key) 
										echo '<option selected value="'.$key.'">'.$value.'</option>';
									else
										echo '<option value="'.$key.'">'.$value.'</option>';

								}
							?>
						</select>
					
					</div>

						<button type="submit" class="btn btn-primary mb-2"> Simpan </button>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
			</div>