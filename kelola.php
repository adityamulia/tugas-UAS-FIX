<div class="col-lg-8">
    <div class="card">
        <div class="card-header">
           
        </div>
        <div class="card-body">
            <h5 class="card-title">Kelola layanan</h5>
             <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>nama Layanan</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <?php
                    include "koneksi.php";
                    $data = $conn->query("select * from listLayanan");
                ?>
                <tbody>
                    <?php
                        $No =1;
                        while($row=$data->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $No ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['deskripsi']; ?></td>
                        <td>

                    <a href="hapus.php?id_hapus=<?php echo $row['no'] ?>">hapus</a> 
                        | 
                    <a href="?menu=7&id_edit=<?php echo $row['no']?>">
                        edit
                    </a>
                    </td>
                    </tr>
                    <?php 
                        $No++;
                        }
                    ?>

                </tbody>
             </table> 
             <a href="?menu=6">
                 <button class="btn btn-primary">Tambah Layanan</button>  
             </a>
        </div>
    </div>
</div>