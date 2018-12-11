<?php
    $id = $_GET['id'];
    $s = $k->query("SELECT * FROM tb_siswa WHERE kd_siswa = '$id'");
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
                            DETAIL SISWA
                        </h2>
                    </div>
                    <div class="body">
                       <form id="form_validation" method="POST">
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="name" value="<?= $t['nis'];?>" required>
                                    <label class="form-label">NIS</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="surname" value="<?= $t['nm_siswa'];?>" required>
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
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="email" value="<?= $t['agama'];?>" required>
                                    <label class="form-label">Agama</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="email" value="<?= $t['ta'];?>" required>
                                    <label class="form-label">Tahun Ajaran</label>
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
                                    <input type="text" class="form-control" name="email" value="<?= $t['status'];?>" required>
                                    <label class="form-label">Status Siswa</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="email" value="<?= $t['nm_ayah'];?>" required>
                                    <label class="form-label">Nama Ayah</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="password" class="form-control" name="email" value="<?= $t['nm_ibu'];?>" required>
                                    <label class="form-label">Nama Ibu</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <textarea name="description" cols="30" rows="5" class="form-control no-resize" required><?= $t['alamat_ortu'];?></textarea>
                                    <label class="form-label">Alamat Orangtua</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="email" value="<?= $t['pk_ayah'];?>" required>
                                    <label class="form-label">Pekerjaan ayah</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="email" value="<?= $t['pk_ibu'];?>" required>
                                    <label class="form-label">Pekerjaan Ibu</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="text" class="form-control" name="email" value="08<?= $t['pk_ibu'];?>" required>
                                    <label class="form-label">Telepon Orangtua</label>
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <div class="form-line">
                                    <input type="password" class="form-control" name="email" value="<?= $t['password'];?>" required>
                                    <label class="form-label">Password</label>
                                </div>
                                <div style="margin-top:20px">
                                    <img name="pict" width="150px" src="../assets/images/siswa/<?= $t['foto']?>">
                                </div>
                            </div>
                        </form>
                        <a href="?hal=history"><button class="btn btn-danger waves-effect" type="button">KEMBALI</button></a>
                        <a href="?hal=history&act=nilai&id=<?php echo $t['kd_siswa'];?>"><button class="btn btn-info waves-effect" type="button">Nilai</button></a>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
