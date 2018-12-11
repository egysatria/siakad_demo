<?php
$id = $_GET['id'];
$s = $k->query("SELECT * FROM tb_admin WHERE kd_admin='$id'");
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
                            UBAH DATA ADMIN
                        </h2>
                    </div>
                    <div class="body">
                        <form action="admin/p_u_admin.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" class="form-control date" name="kd_admin" value="<?= $t['kd_admin']?>">
                            <div class="row clearfix">
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="username" value="<?= $t['username']?>">
                                        </div>
                                        <span class="input-group-addon">
                                            Username
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="password" class="form-control date" name="password" value="<?= $t['password']?>">
                                        </div>
                                        <span class="input-group-addon">
                                            Password
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nama" value="<?= $t['nama']?>">
                                        </div>
                                        <span class="input-group-addon">
                                            Nama
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="file" class="form-control date" name="foto" value="<?= $t['foto']?>">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_offer</i>
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
</section>
