<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
        <a href="?hal=det_kelas&act=tambah"><button type="button" class="btn btn-primary waves-effect" style="margin-bottom:20px;margin-left:15px;">
            <i class="material-icons">add</i>
            <span>TAMBAH</span>
        </button></a>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                 <div class="card">
                        <div class="header bg-red">
                            <h2>
                                TABEL DETAIL KELAS
                               
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tab-nav-right" role="tablist">
                                <li role="presentation" class="active"><a href="#kelas1" data-toggle="tab">Kelas 1</a></li>
                                <li role="presentation"><a href="#kelas2" data-toggle="tab">Kelas 2</a></li>
                                <li role="presentation"><a href="#kelas3" data-toggle="tab">Kelas 3</a></li>
                                <li role="presentation"><a href="#kelas4" data-toggle="tab">Kelas 4</a></li>
                                <li role="presentation"><a href="#kelas5" data-toggle="tab">Kelas 5</a></li>
                                <li role="presentation"><a href="#kelas6" data-toggle="tab">Kelas 6</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="kelas1">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                KELAS 1
                                            </h2>
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kode</th>
                                                            <th>Kelas</th>
                                                            <th>Siswa</th>
                                                            <th>Tahun Ajaran</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $no=0;
                                                        $sql = $k->query("SELECT
                                                                tb_detail_kel.kode,
                                                                tb_detail_kel.kd_kelas,
                                                                tb_detail_kel.kd_siswa,
                                                                tb_detail_kel.ta,
                                                                tb_kelas.kelas,
                                                                tb_siswa.nm_siswa
                                                                FROM
                                                                tb_detail_kel
                                                                INNER JOIN tb_kelas ON tb_detail_kel.kd_kelas = tb_kelas.kd_kelas
                                                                INNER JOIN tb_siswa ON tb_detail_kel.kd_siswa = tb_siswa.kd_siswa WHERE
                                                                tb_kelas.kelas = 'I' ;");
                                                        while ($t = $sql->fetch_assoc()) 
                                                        {
                                                            $no++;
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $t['kode'];?></td>
                                                            <td><?php echo $t['kelas'];?></td>
                                                            <td><?php echo $t['nm_siswa'];?></td>
                                                            <td><?php echo $t['ta'];?></td>
                                                            <td align="center">
                                                                <a href="?hal=det_kelas&act=ubah&id=<?php echo $t['kode'];?>"><button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                                    <i class="material-icons">update</i></button></a>
                                                                <a href="?hal=det_kelas&act=hapus&id=<?php echo $t['kode'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')"><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
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
                                <div role="tabpanel" class="tab-pane fade" id="kelas2">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                KELAS 2
                                            </h2>
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kode</th>
                                                            <th>Kelas</th>
                                                            <th>Siswa</th>
                                                            <th>Tahun Ajaran</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $no=0;
                                                        $sql = $k->query("SELECT
                                                                tb_detail_kel.kode,
                                                                tb_detail_kel.kd_kelas,
                                                                tb_detail_kel.kd_siswa,
                                                                tb_detail_kel.ta,
                                                                tb_kelas.kelas,
                                                                tb_siswa.nm_siswa
                                                                FROM
                                                                tb_detail_kel
                                                                INNER JOIN tb_kelas ON tb_detail_kel.kd_kelas = tb_kelas.kd_kelas
                                                                INNER JOIN tb_siswa ON tb_detail_kel.kd_siswa = tb_siswa.kd_siswa WHERE
                                                                tb_kelas.kelas = 'II' ;");
                                                        while ($t = $sql->fetch_assoc()) 
                                                        {
                                                            $no++;
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $t['kode'];?></td>
                                                            <td><?php echo $t['kelas'];?></td>
                                                            <td><?php echo $t['nm_siswa'];?></td>
                                                            <td><?php echo $t['ta'];?></td>
                                                            <td align="center">
                                                                <a href="?hal=det_kelas&act=ubah&id=<?php echo $t['kode'];?>"><button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                                    <i class="material-icons">update</i></button></a>
                                                                <a href="?hal=det_kelas&act=hapus&id=<?php echo $t['kode'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')"><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
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
                                <div role="tabpanel" class="tab-pane fade" id="kelas3">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                KELAS 3
                                            </h2>
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kode</th>
                                                            <th>Kelas</th>
                                                            <th>Siswa</th>
                                                            <th>Tahun Ajaran</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $no=0;
                                                        $sql = $k->query("SELECT
                                                                tb_detail_kel.kode,
                                                                tb_detail_kel.kd_kelas,
                                                                tb_detail_kel.kd_siswa,
                                                                tb_detail_kel.ta,
                                                                tb_kelas.kelas,
                                                                tb_siswa.nm_siswa
                                                                FROM
                                                                tb_detail_kel
                                                                INNER JOIN tb_kelas ON tb_detail_kel.kd_kelas = tb_kelas.kd_kelas
                                                                INNER JOIN tb_siswa ON tb_detail_kel.kd_siswa = tb_siswa.kd_siswa WHERE
                                                                tb_kelas.kelas = 'III' ;");
                                                        while ($t = $sql->fetch_assoc()) 
                                                        {
                                                            $no++;
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $t['kode'];?></td>
                                                            <td><?php echo $t['kelas'];?></td>
                                                            <td><?php echo $t['nm_siswa'];?></td>
                                                            <td><?php echo $t['ta'];?></td>
                                                           <td align="center">
                                                                <a href="?hal=det_kelas&act=ubah&id=<?php echo $t['kode'];?>"><button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                                    <i class="material-icons">update</i></button></a>
                                                                <a href="?hal=det_kelas&act=hapus&id=<?php echo $t['kode'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')"><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
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
                                <div role="tabpanel" class="tab-pane fade" id="kelas4">
                                     <div class="card">
                                        <div class="header">
                                            <h2>
                                                KELAS 4
                                            </h2>
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kode</th>
                                                            <th>Kelas</th>
                                                            <th>Siswa</th>
                                                            <th>Tahun Ajaran</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $no=0;
                                                        $sql = $k->query("SELECT
                                                                tb_detail_kel.kode,
                                                                tb_detail_kel.kd_kelas,
                                                                tb_detail_kel.kd_siswa,
                                                                tb_detail_kel.ta,
                                                                tb_kelas.kelas,
                                                                tb_siswa.nm_siswa
                                                                FROM
                                                                tb_detail_kel
                                                                INNER JOIN tb_kelas ON tb_detail_kel.kd_kelas = tb_kelas.kd_kelas
                                                                INNER JOIN tb_siswa ON tb_detail_kel.kd_siswa = tb_siswa.kd_siswa WHERE
                                                                tb_kelas.kelas = 'IV' ;");
                                                        while ($t = $sql->fetch_assoc()) 
                                                        {
                                                            $no++;
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $t['kode'];?></td>
                                                            <td><?php echo $t['kelas'];?></td>
                                                            <td><?php echo $t['nm_siswa'];?></td>
                                                            <td><?php echo $t['ta'];?></td>
                                                           <td align="center">
                                                                <a href="?hal=det_kelas&act=ubah&id=<?php echo $t['kode'];?>"><button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                                    <i class="material-icons">update</i></button></a>
                                                                <a href="?hal=det_kelas&act=hapus&id=<?php echo $t['kode'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')"><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
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
                                <div role="tabpanel" class="tab-pane fade" id="kelas5">
                                    <div class="card">
                                        <div class="header">
                                            <h2>
                                                KELAS 5
                                            </h2>
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kode</th>
                                                            <th>Kelas</th>
                                                            <th>Siswa</th>
                                                            <th>Tahun Ajaran</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $no=0;
                                                        $sql = $k->query("SELECT
                                                                tb_detail_kel.kode,
                                                                tb_detail_kel.kd_kelas,
                                                                tb_detail_kel.kd_siswa,
                                                                tb_detail_kel.ta,
                                                                tb_kelas.kelas,
                                                                tb_siswa.nm_siswa
                                                                FROM
                                                                tb_detail_kel
                                                                INNER JOIN tb_kelas ON tb_detail_kel.kd_kelas = tb_kelas.kd_kelas
                                                                INNER JOIN tb_siswa ON tb_detail_kel.kd_siswa = tb_siswa.kd_siswa WHERE
                                                                tb_kelas.kelas = 'V' ;");
                                                        while ($t = $sql->fetch_assoc()) 
                                                        {
                                                            $no++;
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $t['kode'];?></td>
                                                            <td><?php echo $t['kelas'];?></td>
                                                            <td><?php echo $t['nm_siswa'];?></td>
                                                            <td><?php echo $t['ta'];?></td>
                                                            <td align="center">
                                                                <a href="?hal=det_kelas&act=ubah&id=<?php echo $t['kode'];?>"><button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                                    <i class="material-icons">update</i></button></a>
                                                                <a href="?hal=det_kelas&act=hapus&id=<?php echo $t['kode'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')"><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
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
                                <div role="tabpanel" class="tab-pane fade" id="kelas6">
                                     <div class="card">
                                        <div class="header">
                                            <h2>
                                                KELAS 6
                                            </h2>
                                        </div>
                                        <div class="body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Kode</th>
                                                            <th>Kelas</th>
                                                            <th>Siswa</th>
                                                            <th>Tahun Ajaran</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                        $no=0;
                                                        $sql = $k->query("SELECT
                                                                tb_detail_kel.kode,
                                                                tb_detail_kel.kd_kelas,
                                                                tb_detail_kel.kd_siswa,
                                                                tb_detail_kel.ta,
                                                                tb_kelas.kelas,
                                                                tb_siswa.nm_siswa
                                                                FROM
                                                                tb_detail_kel
                                                                INNER JOIN tb_kelas ON tb_detail_kel.kd_kelas = tb_kelas.kd_kelas
                                                                INNER JOIN tb_siswa ON tb_detail_kel.kd_siswa = tb_siswa.kd_siswa WHERE
                                                                tb_kelas.kelas = 'VI' ;");
                                                        while ($t = $sql->fetch_assoc()) 
                                                        {
                                                            $no++;
                                                    ?>
                                                        <tr>
                                                            <td><?php echo $no; ?></td>
                                                            <td><?php echo $t['kode'];?></td>
                                                            <td><?php echo $t['kelas'];?></td>
                                                            <td><?php echo $t['nm_siswa'];?></td>
                                                            <td><?php echo $t['ta'];?></td>
                                                            <td align="center">
                                                                <a href="?hal=det_kelas&act=ubah&id=<?php echo $t['kode'];?>"><button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                                    <i class="material-icons">update</i></button></a>
                                                                <a href="?hal=det_kelas&act=hapus&id=<?php echo $t['kode'];?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini ?')"><button type="button" class="btn btn-danger btn-circle waves-effect waves-circle waves-float">
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
                        </div>
                    </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
