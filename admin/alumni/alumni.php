<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
        <a href="?hal=alumni&act=tambah"><button type="button" class="btn btn-primary waves-effect" style="margin-bottom:20px;margin-left:15px;">
            <i class="material-icons">add</i>
            <span>TAMBAH</span>
        </button></a>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        <h2>
                            TABEL ALUMNI
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Tahun Masuk</th>
                                        <th>Tahun Keluar</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no=0;
                                    $sql = $k->query("SELECT * FROM tb_alumni ORDER BY kd_alumni DESC");
                                    while ($t = $sql->fetch_assoc()) 
                                    {
                                        $no++;
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $t['kd_alumni'];?></td>
                                        <td><?php echo $t['nm_alumni'];?></td>
                                        <td><?php echo $t['alamat'];?></td>
                                        <td><?php echo $t['thn_masuk'];?></td>
                                        <td><?php echo $t['thn_keluar'];?></td>
                                        <td align="center">
                                            <a href="?hal=alumni&act=ubah&id=<?php echo $t['kd_alumni'];?>"><button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">update</i></button></a>
                                            <a href="?hal=alumni&act=hapus&id=<?php echo $t['kd_alumni'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')"><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i></button></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href="laporan/pdf/pdf_alumni.php" target="_blank"><button onclick="button" type="button" class="btn btn-danger waves-effect" style="margin-left:10px;">
                <i class="material-icons">picture_as_pdf</i>
                <span>PDF</span></button></a>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
