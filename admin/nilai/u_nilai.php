<?php
$id = $_GET['id'];
$q = $k->query("SELECT * FROM tb_nilai WHERE kd_nilai = '$id'");
$a = $q->fetch_assoc();
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
                            INPUT DATA NILAI
                        </h2>
                    </div>
                    <div class="body">
                        <form action="nilai/p_u_nilai.php" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <input type="hidden" class="form-control date" name="kd_nilai" value="<?= $a['kd_nilai']?>">
                                 <div class="col-md-6">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="nis">
                                            <?php
                                            $s = $k->query("SELECT * FROM `tb_siswa`");
                                            if (mysqli_num_rows($s) != "") 
                                            {
                                                while ($t = $s->fetch_assoc()) 
                                                {
                                                    ?>
                                                        <option value="<?php echo $t['kd_siswa']; ?>"><?php echo $t['nm_siswa']; ?></option>
                                                    <?php
                                                }
                                            }

                                         ?>
                                        </select>
                                        <span class="input-group-addon">
                                            NIS
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                         <select class="form-control show-tick" name="kd_kelas">
                                            <?php
                                            $s = $k->query("SELECT * FROM `tb_kelas`");
                                            if (mysqli_num_rows($s) != "") 
                                            {
                                                while ($t = $s->fetch_assoc()) 
                                                {
                                                    ?>
                                                        <option value="<?php echo $t['kd_kelas']; ?>"><?php echo $t['kelas']; ?></option>
                                                    <?php
                                                }
                                            }

                                         ?>
                                        </select>
                                        <span class="input-group-addon">
                                            Kode Kelas
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="kd_mapel">
                                            <?php
                                            $s = $k->query("SELECT * FROM `tb_mapel`");
                                            if (mysqli_num_rows($s) != "") 
                                            {
                                                while ($t = $s->fetch_assoc()) 
                                                {
                                                    ?>
                                                        <option value="<?php echo $t['kd_mapel']; ?>"><?php echo $t['nm_mapel']; ?></option>
                                                    <?php
                                                }
                                            }

                                         ?>
                                        </select>
                                        <span class="input-group-addon">
                                            Kode Mapel
                                        </span>
                                    </div>
                                </div>
                            </div> 
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="ta">
                                            <?php
                                            $s = $k->query("SELECT ta FROM `tb_siswa`");
                                            if (mysqli_num_rows($s) != "") 
                                            {
                                                while ($t = $s->fetch_assoc()) 
                                                {
                                                    ?>
                                                        <option value="<?php echo $t['ta']; ?>"><?php echo $t['ta']; ?></option>
                                                    <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                        <span class="input-group-addon">
                                            Tahun Ajaran
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="semester" value="<?= $a['semester']?>">
                                        </div>
                                        <span class="input-group-addon">
                                            Semseter
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="n_tgs" value="<?= $a['n_tugas']?>">
                                        </div>
                                        <span class="input-group-addon">
                                            Nilai Tugas
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="n_uh" value="<?= $a['n_uh']?>">
                                        </div>
                                        <span class="input-group-addon">
                                            Nilai UH
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="n_uts" value="<?= $a['n_uts']?>">
                                        </div>
                                        <span class="input-group-addon">
                                            Nilai UTS
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="n_uas" value="<?= $a['n_uas']?>">
                                        </div>
                                        <span class="input-group-addon">
                                            Nilai UAS
                                        </span>
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
    </div>
</section>
