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
                            INPUT DATA KELAS
                        </h2>
                    </div>
                    <div class="body">
                        <form action="akademik/kelas/p_t_kelas.php" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="kd_kelas" placeholder="Kode Kelas">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">vpn_key</i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="kelas" placeholder="Kelas">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_offer</i>
                                        </span>
                                    </div>
                                </div>
                            </div>                     
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="nip">
                                            <option value="">-- Guru --</option>
                                            <?php
                                                $s = $k->query("SELECT * FROM `tb_guru`");
                                                if (mysqli_num_rows($s) != "") 
                                                {
                                                    while ($t = $s->fetch_assoc()) 
                                                    {
                                                        ?>
                                                            <option value="<?php echo $t['nip']; ?>"><?php echo $t['nm_guru']; ?></option>
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
