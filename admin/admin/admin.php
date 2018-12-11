<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
                <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header bg-deep-orange">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>Tabel Admin</h2>
                            </div>
                        </div>
                    </div>
                    <div class="body">

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Admin</th>
                                        <th>Username</th>
                                        <th>Nama</th>
                                        <th>Akses</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                               <?php
                                    $no=0;
                                    $sql = $k->query("SELECT * FROM tb_admin ORDER BY kd_admin DESC");
                                    while ($t = $sql->fetch_assoc()) 
                                    {
                                        $no++;
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $t['kd_admin'];?></td>
                                        <td><?php echo $t['username'];?></td>
                                        <td><?php echo $t['nama'];?></td>
                                        <td><?php echo $t['akses'];?></td>
                                        <td align="center">
                                            <a href="?hal=admin&act=ubah&id=<?php echo $t['kd_admin'];?>"><button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">update</i></button></a>
                                            <a href="?hal=admin&act=hapus&id=<?php echo $t['kd_admin'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')"><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i></button></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <a href="?hal=admin&act=tambah"><button type="button" class="btn btn-success waves-effect" style="margin-bottom:20px;margin-left:15px;">
                    <i class="material-icons">add</i>
                    <span>TAMBAH</span></button></a>
                    <a href="laporan/pdf/pdf_admin.php" target="_blank"><button onclick="button" type="button" class="btn btn-danger waves-effect" style="margin-bottom:20px;margin-left:10px;">
                    <i class="material-icons">picture_as_pdf</i>
                    <span>PDF</span></button></a>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
