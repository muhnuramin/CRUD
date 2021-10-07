<?php
    include"koneksi.php";
    $id_siswa=$_GET['id_siswa'];
    $query=mysqli_query($db,"SELECT*FROM siswa WHERE id_siswa='$id_siswa'");
    $isi=mysqli_fetch_array($query);
?>
<div class="container">
    <h2>Tambah Data Peserta</h2>
    <form action="proses/peserta-edit.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_siswa" value="<?php echo $isi['id_siswa'];?>">
        <div class="form-group row mb-4">
            <label for="name" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" placeholder="Nama" name="nama_siswa" value="<?php echo $isi['nama_siswa']?>">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="alamat" placeholder="Alamat" rows="2" name="alamat"><?php echo $isi['alamat']?></textarea>
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="gender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-10">
                <?php
                    if ($isi['jenis_kelamin']=="L") {
                        echo"<input type='radio' class='form-check-input' value='L' name='jenis_kelamin' checked>Laki-Laki</input><br>
                        <input type='radio' class='form-check-input' value='P' name='jenis_kelamin'>Perempuan</input>";
                    }elseif ($isi['jenis_kelamin']=="P") {
                        echo"<input type='radio' class='form-check-input' value='L' name='jenis_kelamin' >Laki-Laki</input><br>
                        <input type='radio' class='form-check-input' value='P' name='jenis_kelamin' checked>Perempuan</input>";
                    }
                ?>
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
            <div class="col-sm-10">
                <select class="form-select" id="agama" placeholder="Agama" name='agama'>
                    <option value="<?php echo $isi['agama']?>"><?php echo $isi['agama']?></option>
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
                <input type="text" class="form-control" id="school" placeholder="Sekolah Asal" name="sekolah_asal" value="<?php echo $isi['sekolah_asal']?>">
            </div>
        </div>
        <div class="form-group row mb-4">
            <label for="Setatus" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <select class="form-select" id="Setatus" placeholder="Setatus" name='Setatus'>
                    <option value="<?php echo $isi['Setatus']?>"><?php echo $isi['Setatus']?></option>
                    <option value="Diterima">Diterima</option>
                    <option value="Ditolak">Ditolak</option>
                    <option value="Cadangan">Cadangan</option>
                </select>
            </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
        <button type="button" onClick="window.location.reload()" class="btn btn-info text-light">Reset</button>
        <button type="button" class="btn btn-success"><a style="text-decoration:none;color:white;"href="index.php?p=home">Kembali</a></button>
    </form>
</div>