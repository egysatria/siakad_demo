<?php
$id = $_GET['id'];
$s = $k->query("SELECT * FROM tb_guru WHERE nip = '$id'");
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
                            UBAH DATA GURU
                        </h2>
                    </div>
                    <div class="body">
                        <form action="akademik/guru/p_u_guru.php" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <input type="hidden" class="form-control date" name="nip" value="<?= $t['nip'];?>">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nm_guru" value="<?= $t['nm_guru'];?>">
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
                                        <select class="form-control show-tick" name="jk">
                                            <option <?php if ($t['jk'] == "Laki - Laki") { echo "selected";}?> value="Laki - Laki">Laki - Laki</option>
                                            <option <?php if ($t['jk'] == "Perempuan") { echo "selected";}?> value="Perempuan">Perempuan</option>
                                        </select>
                                        <span class="input-group-addon">
                                            <i class="material-icons">transfer_within_a_station</i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
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
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="jabatan" value="<?= $t['tp_lahir'] ?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_offer</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="gol">
                                            <option <?php if ($t['golongan'] == "A") { echo "selected";}?> value="A">A</option>
                                            <option <?php if ($t['golongan'] == "B") { echo "selected";}?> value="B">B</option>
                                            <option <?php if ($t['golongan'] == "AB") { echo "selected";}?> value="AB">AB</option>
                                            <option <?php if ($t['golongan'] == "O") { echo "selected";}?> value="O">O</option>
                                        </select>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_hospital</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="alamat"><?= $t['alamat'];?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="status">
                                            <option <?php if ($t['status'] == "PNS") { echo "selected";}?> value="PNS">PNS</option>
                                            <option <?php if ($t['status'] == "Honorer") { echo "selected";}?> value="Honorer">Honorer</option>
                                        </select>
                                        <span class="input-group-addon">
                                            <i class="material-icons">transfer_within_a_station</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                       <div class="form-group">
                                            <div class="form-line">
                                                <input type="password" class="form-control date" name="password" value="<?= $t['password'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="pendidikan">
                                            <option <?php if ($t['status'] == "SLTA") { echo "selected";}?> value="SLTA">SLTA</option>
                                            <option <?php if ($t['status'] == "D3") { echo "selected";}?> value="D3">D3</option>
                                            <option <?php if ($t['status'] == "D4/S1") { echo "selected";}?> value="D4/S1">D4/S1</option>
                                            <option <?php if ($t['status'] == "S2") { echo "selected";}?> value="S2">S2</option>
                                            <option <?php if ($t['status'] == "S3") { echo "selected";}?> value="S3">S3</option>
                                        </select>
                                        <span class="input-group-addon">
                                            <i class="material-icons">transfer_within_a_station</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-11">
                                        <div class="input-group" style="margin-left:40px;">
                                            <div class="form-line">
                                                    <input name="foto" type="file" value="<?= $t['foto']?>" />
                                            </div>
                                            <div style="margin-top:20px">
                                                <img name="pict" width="150px" src="../assets/images/guru/<?= $t['foto']?>">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="margin-left:40px;">
                                    <button type="submit" name="simpan" class="btn btn-info waves-effect">
                                        <i class="material-icons">lock</i>
                                        <span>SIMPAN</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
