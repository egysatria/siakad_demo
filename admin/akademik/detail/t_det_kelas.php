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
                            INPUT DATA DETAIL KELAS
                        </h2>
                    </div>
                    <div class="body">
                        <form action="akademik/detail/p_t_det_kelas.php" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="kelas">
                                            <option value="">-- Kelas --</option>
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
                                            <i class="material-icons">transfer_within_a_station</i>
                                        </span>
                                    </div>
                                </div>
                            </div>                    
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="siswa">
                                            <option value="">-- Siswa --</option>
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
                                            <i class="material-icons">transfer_within_a_station</i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group">
                                    <select class="form-control show-tick" name="ta">
                                        <option value="">-- Tahun Ajaran --</option>
                                        <?php
                                            $s = $k->query("SELECT thn_ajaran,status FROM tb_master WHERE status = '1'");
                                            if (mysqli_num_rows($s) != "") 
                                            {
                                                while ($t = $s->fetch_assoc()) 
                                                {
                                                    ?>
                                                        <option value="<?php echo $t['thn_ajaran']; ?>"><?php echo $t['thn_ajaran']; ?></option>
                                                    <?php
                                                }
                                            }

                                         ?>
                                        </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="margin-left:20px;">
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
