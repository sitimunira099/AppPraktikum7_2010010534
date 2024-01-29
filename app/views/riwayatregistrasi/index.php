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
        <div class="row">
            <div class="col-sm-12">
                <?php
                Flasher::Message();
                ?>
            </div>
        </div>
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><?= $data['title'] ?></h3>
                <div class="btn-group float-right">
                    <a href="<?= base_url; ?>/riwayatregistrasi/tambah" class="btn float-right btn-xs btn btn-primary">Tambah Riwayat Registrasi</a>
                    <a href="<?= base_url; ?>/riwayatregistrasi/laporan" class="btn float-right btn-xs btn btn-info" target="_blank">Laporan Riwayat Registrasi</a>
                    <a href="<?= base_url; ?>/riwayatregistrasi/lihatlaporan" class="btn float-right btn-xs btn btn-warning" target="_blank">Lihat Laporan Riwayat Registrasi</a>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width:10px">No</th>
                            <th>Registrasi Id</th>
                            <th>Mahasiswa Id</th>
                            <th>Tahun Ajaran</th>
                            <th>Semester</th>
                            <th>Mata Kuliah Id</th>
                            <th style="width:150px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($data['riwayatregistrasi'] as $row) : ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $row['RegistrasiID']; ?></td>
                                <td><?= $row['MahasiswaID']; ?></td>
                                <td><?= date('d-m-Y', strtotime($row['TahunAjaran'])); ?></td>
                                <td><?= $row['Semester']; ?></td>
                                <td><?= $row['MataKuliahID']; ?></td>
                                <td>
                                    <a href="<?= base_url; ?>/riwayatregistrasi/edit/<?= $row['RegistrasiID'] ?>" class="badge badge-info">Edit</a>
                                    <a href="<?= base_url; ?>/riwayatregistrasi/hapus/<?= $row['RegistrasiID'] ?>" class="badge badge-danger" onclick="return confirm('Hapus data?');">Hapus</a>
                                </td>
                            </tr>
                            <?php $no++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->