<?php
    $sql = $k->query("SELECT thn_ajaran,status FROM tb_master WHERE status = '1'");
    $t = $sql->fetch_assoc();
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
                            SETTING TANGGAL PENDAFTARAN
                        </h2>
                    </div>
                    <div class="body">
                        <form action="set_daftar/p_t_set_daftar.php" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="siswa">
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
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="datetime-local" class="form-control date" name="tgl_awal" placeholder="Tanggal Awal">
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
                                        <div class="form-line">
                                            <input type="datetime-local" class="form-control date" name="tgl_akhir" placeholder="Tanggal Akhir">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_offer</i>
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
