<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
        <a href="?hal=arsip&act=tambah"><button type="button" class="btn btn-primary waves-effect" style="margin-bottom:20px;margin-left:15px;">
            <i class="material-icons">add</i>
            <span>TAMBAH</span>
        </button></a>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        <h2>
                            TABEL ARSIP
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Arsip</th>
                                        <th>Judul</th>
                                        <th>File</th>
                                        <th>Tanggal Publish</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                               <?php
                                    $no=0;
                                    $sql = $k->query("SELECT * FROM tb_arsip ORDER BY kd_arsip DESC");
                                    while ($t = $sql->fetch_assoc()) 
                                    {
                                        $no++;
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $t['kd_arsip'];?></td>
                                        <td><?php echo $t['judul'];?></td>
                                        <td><?php echo $t['file'];?></td>
                                        <td><?php echo $t['tgl_publis'];?></td>
                                        <td align="center">
                                            <a href="?hal=arsip&act=ubah&id=<?php echo $t['kd_arsip'];?>"><button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">update</i></button></a>
                                            <a href="?hal=arsip&act=hapus&id=<?php echo $t['kd_arsip'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')"><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i></button></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
