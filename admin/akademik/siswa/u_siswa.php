<?php
session_start();
$id = $_GET['id'];
$s = $k->query("SELECT * FROM tb_siswa WHERE kd_siswa = '$id'");
$t = $s->fetch_assoc();
?>
<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <?php
                if (isset($_SESSION['pesan'])) 
                {
                    echo $_SESSION['pesan'];
                    unset($_SESSION['pesan']);
                }

                ?>
                <div class="card">
                    <div class="header bg-red">
                        <h2>
                            UBAH DATA SISWA
                        </h2>
                    </div>
                    <div class="body">
                        <form action="akademik/siswa/p_u_siswa.php" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="hidden" class="form-control date" name="kd_siswa" value="<?= $t['kd_siswa'];?>">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nis" value="<?= $t['nis'];?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nm_siswa" value="<?= $t['nm_siswa'];?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="tp_lahir" value="<?= $t['tp_lahir'];?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_offer</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                       <div class="form-group">
                                            <div class="form-line">
                                                <input type="date" class="form-control date" name="tgl_lahir" value="<?= $t['tgl_lahir'];?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                       <div class="input-group">
                                        <select class="form-control show-tick" name="agama">
                                            <option <?php if ($t['agama'] == "Islam") { echo "selected";}?> value="Islam">Islam</option>
                                            <option <?php if ($t['agama'] == "Kristen") { echo "selected";}?> value="Kristen">Kristen</option>
                                            <option <?php if ($t['agama'] == "Katholik") { echo "selected";}?> value="Katholik">Katholik</option>
                                            <option <?php if ($t['agama'] == "Hindu") { echo "selected";}?> value="Hindu">Hindu</option>
                                            <option <?php if ($t['agama'] == "Budha") { echo "selected";}?> value="Budha">Budha</option>
                                        </select>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_library</i>
                                        </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="ta" value="<?= $t['ta'];?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_offer</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="status" value="<?= $t['status'];?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_offer</i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                             <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="alamat"><?= $t['alamat'];?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                             <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nm_ayah" value="<?= $t['nm_ayah'];?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_offer</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nm_ibu" value="<?= $t['nm_ibu'];?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_offer</i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                             <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="alamat_ortu"><?= $t['alamat_ortu'];?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="pk_ayah" value="<?= $t['pk_ayah'];?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_offer</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="pk_ibu" value="<?= $t['pk_ibu'];?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_offer</i>
                                        </span>
                                    </div>
                                </div>
                                 <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control date" name="password" value="<?= $t['password'];?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_offer</i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                             <div class="row clearfix">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="tlp_ortu" value="<?= $t['tlp_ortu'];?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_offer</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="file" class="form-control date" name="foto" value="<?= $t['foto'];?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="form-inline">
                                            <div style="margin-top:20px" align="right">
                                                <img name="pict" width="150px" src="../assets/images/siswa/<?= $t['foto']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <button type="submit" name="simpan" class="btn btn-info waves-effect">
                                    <i class="material-icons">lock</i>
                                    <span>SIMPAN</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
