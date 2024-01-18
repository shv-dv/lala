<?php include "header.php"; ?>
<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-8"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"><span class="glyphicon glyphicon-list"></span> Form Keranjang</h2>
				<h3> <u> <center> Belanja lah sesuai dengan budget. </center> </u></h3>
					<form action="admin/proses-input-keranjang.php" method="post">
						<table class="table table-hover">
							<tr>
								<td>Nama Lengkap
								<input type="text" name="nama" class="form-control input-md" placeholder="Isikan nama anda dengan lengkap" required>
								</td>
							</tr>
							<tr>
								<td>Alamat Rumah lengkap
								<textarea name="alamat" class="form-control input-md" placeholder="Isikan alamat rumah yang lengkap" required> </textarea>
								</td>
							</tr>
							<tr>
								<td>No HP 
								<input type="no_hp" class="form-control input-md" placeholder="Isikan No telepon yang Benar" required>
								</td>
							</tr>
							<tr>
								<td>Nama Barang
								<input type="nama_barang" class="form-control input-md" placeholder="pastikan memilih barang yang Benar" required>
								</td>
							</tr>
							<tr>
								<td><div class="form-group">
									<label for="jenis_barang">Jenis Barang</label>
									<select name="jenis_barang" class="form-control" required>
									<option value="tas wanita">TAS WANITA</option>
									<option value="aksesoris">AKSESORIS</option>
									<option value="tas sekolah">TAS SEKOLAH</option>
									</select><br>
									</div>
								</td>
							</tr>
							<tr>
								<td>Harga Barang
								<input type="harga_barang" class="form-control input-md" placeholder="masukkan Jumlah barang yang Benar" required>
								</td>
							</tr>
							<tr>
								<td>Jumlah Barang 
								<input type="jumlah_barang" class="form-control input-md" placeholder="Hitung total harga yang Benar" required>
								</td>
							</tr>
							<tr>
								<td>Total Harga 
								<input type="total_harga" class="form-control input-md" placeholder="Hitung total harga yang Benar" required echo>
								</td>
							</tr>
							<tr>
								<td>
								<input type="submit" value="Masukkan Keranjang" class="btn btn-lg btn-info"> <input type="reset" value="Batal" class="btn btn-lg btn-warning">
								</td>
							</tr>
						</table>
					</form>
				</div>
      </div>
      <br>
			</div><!-- Akhir Kolom Pertama -->
        <br>
        <br>
        <?php include "footer.php";?>