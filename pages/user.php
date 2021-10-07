<div class="container">
    <h2>USER</h2><hr>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Roles</th>
            </tr>
        </thead>
        <?php
        include"koneksi.php";
        $query="SELECT*FROM user";
        $peserta = mysqli_query($db,$query);
        ?>
        <tbody>
            <?php $nomor=1; while($isi=mysqli_fetch_array($peserta)){?>
            <tr>
                <td><?php echo $nomor++;?></td>
                <td><?php echo $isi['nama'];?></td>
                <td><?php echo $isi['username'];?></td>
                <td><?php echo $isi['password'];?></td>
                <td><?php echo $isi['roles'];?></td>
            </tr>
            <?php  } ?>
        </tbody>
    </table>
    </div>