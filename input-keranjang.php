<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-keranjang.php" method="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_hp">No Hp</label>
                        <input type="number" name="no_hp" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nama_barang" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_barang">Jenis Barang</label>
                        <input type="text" name="jenis_barang" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="harga_barang">Harga Barang</label>
                        <input type="number" name="harga_barang" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="number" name="jumlah_barang" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="total_harga">Total harga</label>
                        <input type="number" name="total_harga" class="form-control">
                    </div>
                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>