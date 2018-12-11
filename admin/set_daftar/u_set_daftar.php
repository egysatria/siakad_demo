<?php
$id = $_GET['id'];
$q = $k->query("SELECT * FROM set_tgl WHERE id = '$id'");
$t = $q->fetch_assoc();
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
                        <form action="set_daftar/p_u_set_daftar.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $t['id'];?>">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="ta" value="<?= $t['ta'];?>">
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
                                            <input type="datetime-local" class="form-control date" name="tgl_awal" value="<?php echo strtotime($t['tgl_awal']);?>">
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
                                            <input type="datetime-local" class="form-control date" name="tgl_akhir" value="<?php echo strtotime($t['tgl_akhir']);?>">
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
