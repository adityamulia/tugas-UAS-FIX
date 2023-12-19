<div class="container-fluid pt-5 pb-5 kontak">
      <div class="container">
        <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
        <p class="text-center">
        Silahkan hubungi kami di kapan saja antara setiap hari (kecuali Sabtu dan Minggu) untuk semua pertanyaan Anda.
        </p>
        <form action="kontakP.php" method="POST">
            <div class="row pb-3">
              <div class="col-md-3 mx-auto">
                <input
                  class="from-control from-control-lg mb-3"
                  type="text"
                  placeholder="Nama"
                  name='nama'
                />
                <input
                  class="from-control from-control-lg mb-3"
                  type="text"
                  placeholder="Email"
                  name="email"
                />
                <input
                  class="from-control from-control-lg"
                  type="text"
                  placeholder="No. Phone"
                  name="noHp"
                />
              </div>
              <div class="col-md-3 mx-auto">
                <textarea class="from-control from-control-lg" rows="5" name="pesan"></textarea>
              </div>
            </div>
            <div class="col-md-3 mx-auto text-center">
              <button type="submit" class="btn btn-primary btn-lg">
                Kirim Pesan
              </button>
            </div>
        </form>
      </div>
    </div>
    <!-- <div class="container text-center pt-5 pb-5">
      All Rights Reserved &copy; 2023
    </div> -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
