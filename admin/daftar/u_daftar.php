<?php
$id = $_GET['id'];
$s = $k->query("SELECT * FROM tb_daftar WHERE kd_daftar='$id'");
$t = $s->fetch_assoc();
?>
<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
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
                            INPUT DATA PENDAFTARAN SISWA BARU
                        </h2>
                    </div>
                    <div class="body">
                       <form action="daftar/p_u_daftar.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" class="form-control" name="kd_daftar" value="<?= $t['kd_daftar']?>" required>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="nm_pendaftar" value="<?= $t['nm_pendaftar']?>" required>
                                    <label class="form-label">Nama Pendaftar</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="tp_lahir" value="<?= $t['tp_lahir']?>" required>
                                    <label class="form-label">Tempat Lahir</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="date" class="form-control" name="tgl_lahir" value="<?= $t['tgl_lahir']?>" required>
                                </div>
                            </div>
                            <div class="form-group">
                                 <select class="form-control show-tick" name="jk">
                                    <option <?php if ($t['jk'] == "Laki - Laki") { echo "selected";}?> value="Laki - Laki">Laki - Laki</option>
                                    <option <?php if ($t['jk'] == "Perempuan") { echo "selected";}?> value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                 <select class="form-control show-tick" name="agama">
                                    <option <?php if ($t['agama'] == "Islam") { echo "selected";}?> value="Islam">Islam</option>
                                    <option <?php if ($t['agama'] == "Kristen") { echo "selected";}?> value="Kristen">Kristen</option>
                                    <option <?php if ($t['agama'] == "Katholik") { echo "selected";}?> value="Katholik">Katholik</option>
                                    <option <?php if ($t['agama'] == "Hindu") { echo "selected";}?> value="Hindu">Hindu</option>
                                    <option <?php if ($t['agama'] == "Budha") { echo "selected";}?> value="Budha">Budha</option>
                                </select>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea name="alamat" cols="30" rows="5" class="form-control no-resize" required><?= $t['alamat']?></textarea>
                                    <label class="form-label">Alamat</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="nm_ayah" value="<?= $t['nm_ayah']?>" required>
                                    <label class="form-label">Nama Ayah</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="nm_ibu" value="<?= $t['nm_ibu']?>" required>
                                    <label class="form-label">Nama Ibu</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea name="alamat_ortu" cols="30" rows="5" class="form-control no-resize" required><?= $t['alamat_ortu']?></textarea>
                                    <label class="form-label">Alamat Orangtua</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="pk_ayah" value="<?= $t['pk_ayah']?>" required>
                                    <label class="form-label">Pekerjaan Ayah</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="pk_ibu" value="<?= $t['pk_ibu']?>" required>
                                    <label class="form-label">Pekerjaan Ibu</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="number" class="form-control" name="no_tlp" value="<?= $t['tlp_ortu']?>" required>
                                    <label class="form-label">Telepon Orangtua</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="date" class="form-control" name="tgl_daftar" value="<?= $t['tgl_daftar']?>" required>
                                    <label class="form-label">Tanggal Daftar</label>
                                </div>
                            </div>
                            <div class="form-group">
                                 <select class="form-control show-tick" name="status">
                                    <option <?php if ($t['status'] == "1") { echo "selected";}?> value="1">Diterima</option>
                                    <option <?php if ($t['status'] == "0") { echo "selected";}?> value="0">Belum Diterima</option>
                                </select>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="file" class="form-control" name="foto" value="<?= $t['foto']?>">
                                </div>
                                <div style="margin-top:20px">
                                    <img name="pict" width="150px" src="../assets/images/pendaftar/<?= $t['foto']?>">
                                </div>
                            </div>
                             <button type="submit" name="simpan" class="btn btn-info waves-effect">
                                <i class="material-icons">lock</i>
                                <span>SIMPAN</span>
                            </button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
