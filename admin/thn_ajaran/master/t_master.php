<?php
$carikode = $k->query("SELECT kd_master FROM tb_master");
$datakode = mysqli_fetch_array($carikode);
$jumlah_data = mysqli_num_rows($carikode);
if ($datakode) {
 $nilaikode = substr($jumlah_data[0], 1);
 $kode = (int) $nilaikode;
 $kode = $jumlah_data + 1;
 $kode_otomatis = "M".str_pad($kode, 4, "0", STR_PAD_LEFT);
} else {
 $kode_otomatis = "M0001";
}
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
                            INPUT DATA MASTER TAHUN AJARAN
                        </h2>
                    </div>
                    <div class="body">
                        <form action="thn_ajaran/master/p_t_master.php" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="kd_master" value="<?= $kode_otomatis ?>" readonly>
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
                                            <input type="text" class="form-control date" name="thn_ajaran" placeholder="Tahun Ajaran">
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
                                        <select class="form-control show-tick" name="status">
                                            <option value="">-- Status --</option>
                                            <option value="1">Aktif</option>
                                            <option value="0">Non Aktif</option>
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
