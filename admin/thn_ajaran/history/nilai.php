<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
        <a href="?hal=nilai&act=tambah"><button type="button" class="btn btn-primary waves-effect" style="margin-bottom:20px;margin-left:15px;">
            <i class="material-icons">add</i>
            <span>TAMBAH</span>
        </button></a>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        <h2>
                            TABEL NILAI
                        </h2>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tahun Ajaran</th>
                                        <th>Semester</th>
                                        <th>Tugas</th>
                                        <th>Ulangan Harian</th>
                                        <th>UTS</th>
                                        <th>UAS</th>
                                        <th>Nilai akhir</th>
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no=0;
                                    $id = $_GET['id'];
                                    $sql = $k->query("SELECT * FROM tb_nilai WHERE kd_siswa = '$id'");
                                    while ($t = $sql->fetch_assoc()) 
                                    {
                                        $no++;
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $t['ta'];?></td>
                                        <td><?php echo $t['semester'];?></td>
                                        <td><?php echo $t['n_tugas'];?></td>
                                        <td><?php echo $t['n_uh'];?></td>
                                        <td><?php echo $t['n_uts'];?></td>
                                        <td><?php echo $t['n_uas'];?></td>
                                        <td><?php echo $t['n_akhir'];?></td>
                                        <td><?php echo $t['ket'];?></td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href="laporan/pdf/pdf_nilai.php" target="_blank"><button type="button" class="btn btn-danger waves-effect" style="margin-left:10px;">
                <i class="material-icons">picture_as_pdf</i>
                <span>PDF</span></button></a>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
