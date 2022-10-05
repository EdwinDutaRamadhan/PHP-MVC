<div class="container mt-5">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
        Tambah Data Mahasiswa
        </button>
        <br><br>
            <h3>Daftar Mahasiswa</h3>
        </div>
    
    <ul class="list-group">
    <?php foreach($data['mhs'] as $mhs): ?>
        <li class="list-group-item ">
            <?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" 
            class="badge bg-danger float-end ms-1" onclick="return confirm('yakin ingin menghapus');">hapus</a>
            <a href="<?= BASEURL; ?>/mahasiswa/update/<?= $mhs['id']; ?>" 
            class="badge bg-success float-end ms-1 tampilModalUpdate" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">update</a>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" 
            class="badge bg-primary float-end ms-1">detail</a>
        </li>
    <?php endforeach; ?>
    </ul>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close buttonTambahData" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="number" class="form-control" id="nim" placeholder="Nim" name="nim">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email.gmail.com" name="email">
            </div>

            <div class="mb-3">
                <label for="jurusan">Jurusan</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="jurusan" name="jurusan">
                    <option selected>Open this select menu</option>
                    <option value="Teknik Informatika">Teknik Infromatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                </select>
            </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="buttonModalLabel">Tambah Data</button>
         </form>
      </div>
    </div>
  </div>
</div>