
<div class="container-fluid layanan pt-5 pb-5">
      <div class="container text-center">
        <h2 class="display-3" id="layanan">Layanan</h2>
        <p>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi, iste.
        </p>
        <div class="row pt-4">
          <?php 
            include "koneksi.php";
            $data = $conn->query('select * from listLayanan');
            while($row=$data->fetch_assoc()) {
          ?> 
          <div class="col-md-4">
            <span class="lingkaran " style=" background: url('<?php echo $row['img'] ?>') no-repeat;  background-size: cover;
              background-position: center;">
              <!-- gambar -->
            </span>
            <h3 class="mt-3"><?php echo $row['nama'] ?></h3>
            <p>
              <?php echo $row['deskripsi'] ?>
            </p>
          </div>
          <?php } ?>
          <!-- <div class="col-md-4">
            <span class="lingkaran"
              ><i class="bi bi-code-slash fa-5x"></i
            ></span>
            <h3 class="mt-3">Desain</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Pariatur, fuga.
            </p>
          </div>

          <div class="col-md-4">
            <span class="lingkaran"
              ><i class="bi bi-code-slash fa-5x"></i
            ></span>
            <h3 class="mt-3">Programing</h3>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Pariatur, fuga.
            </p>
          </div> -->
        </div>
      </div>
      <a href="?menu=5" style="display:flex; justify-content:center">
        <button class="btn btn-primary">list Layanan</button>
      </a>
    </div>