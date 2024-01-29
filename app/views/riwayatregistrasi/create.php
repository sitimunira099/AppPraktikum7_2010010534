<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $data['title']; ?></h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title"><?= $data['title']; ?></h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="<?= base_url; ?>/riwayatregistrasi/simpanriwayatregistrasi" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label>Registrasi Id</label>
                        <input type="text" class="form-control" placeholder="Masukkan registrasi id..." name="RegistrasiID">
                    </div>
                    <div class="form-group">
                        <label>Mahasiswa Id</label>
                        <select class="form-control" name="MahasiswaID">
                            <option>Pilih</option>
                            <?php foreach ($data['mahasiswa'] as $row) : ?>
                                <option value="<?= $row['MahasiswaID']; ?>"><?= $row['MahasiswaID']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Tahun Ajaran</label>
                        <input type="date" class="form-control" name="TahunAjaran">
                    </div>
                    <div class="form-group">
                        <label>Semester</label>
                        <input type="text" class="form-control" placeholder="Masukkan semester..." name="Semester">
                    </div>
                    <div class="form-group">
                        <label>Mata Kuliah Id</label>
                        <input type="text" class="form-control" placeholder="Masukkan mata kuliah..." name="MataKuliahID">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->