
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header bg-red">
                <h2>
                    TABEL HISTORY TAHUN AJARAN
                </h2>
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
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                           <?php
                                                    $thn = $_POST['filter'];
                                                    $no=0;
                                                    $sql = $k->query("SELECT * FROM thn_ajaran WHERE kelas = 'K-001' AND ta = '$thn'");
                                                    while ($t = $sql->fetch_assoc()) 
                                                {
                                                    $no++;
                                         
                                               
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $t['id'];?></td>
                                                    <td><?php echo $t['kelas'];?></td>
                                                    <td><?php echo $t['siswa'];?></td>
                                                    <td align="center">
                                                        <a href="?hal=history&act=tampil&id=<?php echo $t['siswa'];?>"><button type="button" class="btn btn-primary btn-circle waves-effect waves-circle waves-float">
                                                            <i class="material-icons">remove_red_eye</i></button></a>
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
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                           <?php
                                 
                                                    $no=0;
                                                    $sql = $k->query("SELECT * FROM thn_ajaran WHERE kelas = 'K-002' AND ta = '$thn'");
                                                    while ($t = $sql->fetch_assoc()) 
                                                {
                                                    $no++;
                                         
                                               
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $t['id'];?></td>
                                                    <td><?php echo $t['kelas'];?></td>
                                                    <td><?php echo $t['siswa'];?></td>
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
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                           <?php
                                 
                                                    $no=0;
                                                    $sql = $k->query("SELECT * FROM thn_ajaran WHERE kelas = 'K-003' AND ta = '$thn'");
                                                    while ($t = $sql->fetch_assoc()) 
                                                {
                                                    $no++;
                                         
                                               
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $t['id'];?></td>
                                                    <td><?php echo $t['kelas'];?></td>
                                                    <td><?php echo $t['siswa'];?></td>
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
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                           <?php
                                 
                                                    $no=0;
                                                    $sql = $k->query("SELECT * FROM thn_ajaran WHERE kelas = 'K-004' AND ta = '$thn'");
                                                    while ($t = $sql->fetch_assoc()) 
                                                {
                                                    $no++;
                                         
                                               
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $t['id'];?></td>
                                                    <td><?php echo $t['kelas'];?></td>
                                                    <td><?php echo $t['siswa'];?></td>
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
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                           <?php
                                 
                                                    $no=0;
                                                    $sql = $k->query("SELECT * FROM thn_ajaran WHERE kelas = 'K-005' AND ta = '$thn'");
                                                    while ($t = $sql->fetch_assoc()) 
                                                {
                                                    $no++;
                                         
                                               
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $t['id'];?></td>
                                                    <td><?php echo $t['kelas'];?></td>
                                                    <td><?php echo $t['siswa'];?></td>
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
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                           <?php
                                 
                                                    $no=0;
                                                    $sql = $k->query("SELECT * FROM thn_ajaran WHERE kelas = 'K-006' AND ta = '$thn'");
                                                    while ($t = $sql->fetch_assoc()) 
                                                {
                                                    $no++;
                                         
                                               
                                            ?>
                                                <tr>
                                                    <td><?php echo $no; ?></td>
                                                    <td><?php echo $t['id'];?></td>
                                                    <td><?php echo $t['kelas'];?></td>
                                                    <td><?php echo $t['siswa'];?></td>
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
        <a href="laporan/pdf/pdf_mapel.php" target="_blank"><button onclick="button" type="button" class="btn btn-danger waves-effect" style="margin-left:10px;">
        <i class="material-icons">picture_as_pdf</i>
        <span>PDF</span></button></a>
    </div>
</div>