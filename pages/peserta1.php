<div class="container">
    <h2>Pendaftar</h2><hr>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama Peserta</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Sekolah Asal</th>
                <th>Status</th>
            </tr>
        </thead>
        <?php
        include"koneksi.php";
        $query="SELECT*FROM siswa";
        $peserta = mysqli_query($db,$query);
        ?>
        <tbody>
            <?php $nomor=1; while($isi=mysqli_fetch_array($peserta)){?>
            <tr>
                <td><?php echo $nomor++;?></td>
                <td><?php echo $isi['nama_siswa'];?></td>
                <td><?php echo $isi['alamat'];?></td>
                <td><?php echo $isi['jenis_kelamin'];?></td>
                <td><?php echo $isi['agama'];?></td>
                <td><?php echo $isi['sekolah_asal'];?></td>
                <td><?php echo $isi['Setatus'];?></td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>
    </div>