<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>
<div class="row">
    <div class="col-12 col-md-8 my-1">
        <div class="form-floating">
            <input type="text" class="form-control mb-2" id="judulTugas">
            <label for="judulTugas">Judul Tugas</label>
        </div>
        <div class="form-floating">
            <textarea class="form-control mb-2" id="deskripsiTugas" style="height: 200px"></textarea>
            <label for="deskripsiTugas">Deskripsi Tugas</label>
        </div>
    </div>
    <div class="col-12 col-md-4 my-1">
        <div class="form-group">
            <label class="form-label">Pilih Kelas</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Kelas</option>
                <option value="1">Sains 9B</option>
                <option value="2">Matematika 9B</option>
                <option value="3">Agama 9B</option>
            </select>
        </div>
        <div class="form-group">
            <p class="form-label">Pilih Tenggat Waktu</p>
            <input type="date">
            <input type="time">
        </div>
        <input type="submit" class="btn btn-primary my-2 w-100" value="Tugaskan">
    </div>
</div>
<?= $this->endsection() ?>