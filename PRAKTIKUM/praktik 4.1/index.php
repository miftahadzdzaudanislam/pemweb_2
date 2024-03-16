<?php include_once "layout/header.php" ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <form action="hasil_nilai.php" method="post">
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                    <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="matakuliah" class="col-4 col-form-label">Mata Kuliah</label>
                    <div class="col-8">
                        <select id="matakuliah" name="matakuliah" class="custom-select" required>
                            <option value="">Pilih Mata Kuliah</option>
                            <option value="Dasar Dasar Pemrograman">Dasar Dasar Pemrograman</option>
                            <option value="Basis Data I">Basis Data I</option>
                            <option value="Pemrograman Web 2">Pemrograman Web 2</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="Manajemen Proyek">Manajemen Proyek</option>

                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uts" class="col-4 col-form-label">Nilai UTS</label>
                    <div class="col-8">
                        <input id="uts" name="uts" placeholder="Nilai UTS" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="uas" class="col-4 col-form-label">Nilai UAS</label>
                    <div class="col-8">
                        <input id="uas" name="uas" placeholder="Nilai UAS" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tugas" class="col-4 col-form-label">Nilai Tugas</label>
                    <div class="col-8">
                        <input id="tugas" name="tugas" placeholder="Nilai Tugas" type="number" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button id="submit" name="submit" type="submit"  class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
            <hr>
        </div>
    </div>
</div>

<?php include_once "layout/footer.php" ?>