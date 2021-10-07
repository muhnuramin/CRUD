<div class="container">
    <h2>Tambah Data Peserta</h2>
    <form action="proses/peserta-input.php" method="POST" enctype="multipart/form-data">
        <div class="form-group row mb-4">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Nama" name="nama_siswa">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="alamat" placeholder="Alamat" rows="2" name="alamat"></textarea>
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <input type="radio" class="form-check-input" value="L" name='jenis_kelamin'>Laki-Laki</input><br>
                <input type="radio" class="form-check-input" value="P" name='jenis_kelamin'>Perempuan</input>
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-10">
                <select class="form-select" id="agama" placeholder="Agama" name='agama'>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Katolik">Katolik</option>
                </select>
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="school" class="col-sm-2 col-form-label">Sekolah Asal</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="school" placeholder="Sekolah Asal" name="sekolah_asal">
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <button type="button" onClick="window.location.reload()" class="btn btn-info text-light">Reset</button>
    </form>
</div>