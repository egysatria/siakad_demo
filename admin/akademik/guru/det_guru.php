<?php
    $id = $_GET['id'];
    $s = $k->query("SELECT * FROM tb_guru WHERE nip = '$id'");
    $t = $s->fetch_assoc();
?>
<section class="content">
    <div class="container-fluid">
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header bg-red">
                        <h2>
                            DETAIL GURU
                        </h2>
                    </div>
                    <div class="body">
                       <form id="form_validation" method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" value="<?= $t['nip'];?>" required>
                                        <label class="form-label">NIP</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="surname" value="<?= $t['nm_guru'];?>" required>
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="email" value="<?= $t['tp_lahir'];?>" required>
                                        <label class="form-label">Tempat Lahir</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="email" value="<?= $t['tgl_lahir'];?>" required>
                                        <label class="form-label">Tanggal Lahir</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="radio" name="gender" id="lk" class="with-gap" <?php if($t['jk'] == "Laki - Laki"){echo "checked";} ?>/>
                                    <label for="lk">Laki - Laki</label>

                                    <input type="radio" name="gender" id="female" class="with-gap" <?php if($t['jk'] == "Perempuan"){echo "checked";} ?>/>
                                    <label for="female" class="m-l-20">Perempuan</label>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="email" value="<?= $t['agama'];?>" required>
                                        <label class="form-label">Agama</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="email" value="<?= $t['jabatan'];?>" required>
                                        <label class="form-label">Jabatan</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" required><?= $t['alamat'];?></textarea>
                                        <label class="form-label">Alamat</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="email" value="<?= $t['golongan'];?>" required>
                                        <label class="form-label">Golongan Darah</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="email" value="<?= $t['status'];?>" required>
                                        <label class="form-label">Status Pegawai</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" class="form-control" name="email" value="<?= $t['password'];?>" required>
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="email" value="<?= $t['pendidikan'];?>" required>
                                        <label class="form-label">Pendidikan</label>
                                    </div>
                                    <div style="margin-top:20px">
                                        <img name="pict" width="150px" src="../assets/images/guru/<?= $t['foto']?>">
                                    </div>
                                </div>
                        </form>
                        <a href="?hal=guru"><button class="btn btn-primary waves-effect" type="button">KEMBALI</button></a>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
