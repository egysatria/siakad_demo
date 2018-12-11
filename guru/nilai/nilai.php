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
                                        <th>Kode</th>
                                        <th>NIS</th>
                                        <th>Kelas</th>
                                        <th>Mapel</th>
                                        <th>Tugas</th>
                                        <th>UH</th>
                                        <th>UTS</th>
                                        <th>UAS</th>
                                        <th>NA</th>
                                        <th>Ket</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no=0;
                                    $sql = $k->query("SELECT
                                        tb_nilai.kd_nilai,
                                        tb_nilai.kd_siswa,
                                        tb_nilai.kd_kelas,
                                        tb_nilai.kd_mapel,
                                        tb_nilai.ta,
                                        tb_nilai.semester,
                                        tb_nilai.n_tugas,
                                        tb_nilai.n_uh,
                                        tb_nilai.n_uts,
                                        tb_nilai.n_uas,
                                        tb_nilai.n_akhir,
                                        tb_nilai.ket,
                                        tb_mapel.nm_mapel,
                                        tb_kelas.kelas,
                                        tb_siswa.nm_siswa
                                        FROM
                                        tb_nilai
                                        INNER JOIN tb_mapel ON tb_nilai.kd_mapel = tb_mapel.kd_mapel
                                        INNER JOIN tb_kelas ON tb_nilai.kd_kelas = tb_kelas.kd_kelas
                                        INNER JOIN tb_siswa ON tb_nilai.kd_siswa = tb_siswa.kd_siswa");
                                    while ($t = $sql->fetch_assoc()) 
                                    {
                                        $no++;
                                ?>
                                    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $t['kd_nilai'];?></td>
                                        <td><?php echo $t['nm_siswa'];?></td>
                                        <td><?php echo $t['kelas'];?></td>
                                        <td><?php echo $t['nm_mapel'];?></td>
                                        <td><?php echo $t['n_tugas'];?></td>
                                        <td><?php echo $t['n_uh'];?></td>
                                        <td><?php echo $t['n_uts'];?></td>
                                        <td><?php echo $t['n_uas'];?></td>
                                        <td><?php echo $t['n_akhir'];?></td>
                                        <td><?php if ($t['ket'] == "Tuntas") 
                                        {
                                            echo '<span class="label bg-cyan">Tuntas</span>';
                                        }
                                        else
                                        {
                                            echo '<span class="label bg-red">Tidak Tuntas</span>';
                                        }
                                        ?></td>
                                        <td>
                                            <a href="?hal=nilai&act=ubah&id=<?php echo $t['kd_nilai'];?>"><button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">update</i></button></a>
                                            <a href="?hal=nilai&act=hapus&id=<?php echo $t['kd_nilai'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')"><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">delete</i></button></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href="laporan/pdf_nilai.php" target="_blank"><button type="button" class="btn btn-danger waves-effect" style="margin-left:10px;">
                <i class="material-icons">picture_as_pdf</i>
                <span>PDF</span></button></a>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
