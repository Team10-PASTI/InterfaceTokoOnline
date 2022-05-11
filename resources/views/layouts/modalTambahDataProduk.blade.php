<div class="modal fade " id="tambahDataProduk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA PRODUK</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      
      <form enctype="multipart/form-data" action="/tambahProduk/Simpan" method="post" >
        @csrf

      <div class="modal-body">
          <div class="form-group mt-3">
              <div class="d-flex justify-content-center">
                  <label class="mx-4 w-25" >Nama Produk</label>
                  <input type="text" name="nama" class="form-control mx-3">
              </div>
          </div>

          <div class="form-group mt-3">
              <div class="d-flex justify-content-center">
                  <label class="mx-4 w-25" >Kategori</label>
                  <input type="text" name="kategori" class="form-control mx-3">
              </div>
          </div>

          <div class="form-group mt-3">
              <div class="d-flex justify-content-center">
                  <label class="mx-4 w-25" >Harga</label>
                  <input type="number" name="harga" class="form-control mx-3">
              </div>
          </div>

          <div class="form-group mt-3">
              <div class="d-flex justify-content-center">
                  <label class="mx-4 w-25" >Jumlah</label>
                  <input type="text" name="jumlah" class="form-control mx-3">
              </div>
          </div>

          <div class="form-group mt-3">
              <div class="d-flex justify-content-center">
                  <label class="mx-4 w-25" >Deskripsi</label>
                  <textarea name="detail" id="" cols="30" rows="10" class="form-control mx-3"></textarea>
              </div>
          </div>

          <div class="form-group mt-3">
              <div class="d-flex justify-content-center">
                  <label class="mx-4 w-25" >Gambar</label>
                  <input type="file" name = "gambar" class="form-control mx-3">
              </div>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>

      </form>

    </div>
  </div>
</div>