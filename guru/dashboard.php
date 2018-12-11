<?php
$id = $_SESSION['username'];
$s = $k->query("SELECT * FROM tb_guru WHERE nip = '$id'");
$t = $s->fetch_assoc();
?>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>DATA PROFIL GURU</h2>
        </div>
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
                        <div class="header">
                            <h2>
                                DATA GURU
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> PROFILE
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#settings_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">settings</i> SETTINGS
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="profile_with_icon_title">
                                     <div class="row clearfix">
							            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="name" value="<?= $t['nip'];?>" disabled>
			                                        <label class="form-label">NIP</label>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="surname" value="<?= $t['nm_guru'];?>" disabled>
			                                        <label class="form-label">Nama</label>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="email" value="<?= $t['tp_lahir'];?>" disabled>
			                                        <label class="form-label">Tempat Lahir</label>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="email" value="<?= $t['tgl_lahir'];?>" disabled>
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
			                                        <input type="text" class="form-control" name="email" value="<?= $t['agama'];?>" disabled>
			                                        <label class="form-label">Agama</label>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="email" value="<?= $t['jabatan'];?>" disabled>
			                                        <label class="form-label">Jabatan</label>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <textarea name="description" cols="30" rows="5" class="form-control no-resize" disabled><?= $t['alamat'];?></textarea>
			                                        <label class="form-label">Alamat</label>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="email" value="<?= $t['golongan'];?>" disabled>
			                                        <label class="form-label">Golongan Darah</label>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="email" value="<?= $t['status'];?>" disabled>
			                                        <label class="form-label">Status Pegawai</label>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="password" class="form-control" name="email" value="<?= $t['password'];?>" disabled>
			                                        <label class="form-label">Password</label>
			                                    </div>
			                                </div>
			                                <div class="form-group form-float">
			                                    <div class="form-line">
			                                        <input type="text" class="form-control" name="email" value="<?= $t['pendidikan'];?>" disabled>
			                                        <label class="form-label">Pendidikan</label>
			                                    </div>
			                                    <div style="margin-top:20px">
			                                        <img name="pict" width="150px" src="../assets/images/guru/<?= $t['foto']?>">
			                                    </div>
			                                </div>
							            </div>
							        </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                                    <form action="p_u_guru.php" method="POST" enctype="multipart/form-data">
			                            <div class="row clearfix">
			                                <input type="hidden" class="form-control date" name="nip" value="<?= $t['nip'];?>">
			                                <div class="col-md-12">
			                                    <div class="input-group">
			                                        <div class="form-line">
			                                            <input type="text" class="form-control date" name="nm_guru" value="<?= $t['nm_guru'];?>">
			                                        </div>
			                                        <span class="input-group-addon">
			                                            <i class="material-icons">person</i>
			                                        </span>
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="row clearfix">
			                                <div class="col-md-4">
			                                    <div class="input-group">
			                                        <div class="form-line">
			                                            <input type="text" class="form-control date" name="tp_lahir" value="<?= $t['tp_lahir'];?>">
			                                        </div>
			                                        <span class="input-group-addon">
			                                            <i class="material-icons">local_offer</i>
			                                        </span>
			                                    </div>
			                                </div>
			                                <div class="col-md-4">
			                                    <div class="input-group">
			                                       <div class="form-group">
			                                            <div class="form-line">
			                                                <input type="date" class="form-control date" name="tgl_lahir" value="<?= $t['tgl_lahir'];?>">
			                                            </div>
			                                        </div>
			                                    </div>
			                                </div>
			                                <div class="col-md-4">
			                                    <div class="input-group">
			                                        <select class="form-control show-tick" name="jk">
			                                            <option <?php if ($t['jk'] == "Laki - Laki") { echo "selected";}?> value="Laki - Laki">Laki - Laki</option>
			                                            <option <?php if ($t['jk'] == "Laki - Laki") { echo "selected";}?> value="Perempuan">Perempuan</option>
			                                        </select>
			                                        <span class="input-group-addon">
			                                            <i class="material-icons">transfer_within_a_station</i>
			                                        </span>
			                                    </div>
			                                </div>
			                            </div>
			                            <div class="row clearfix">
			                                <div class="col-md-4">
			                                    <div class="input-group">
			                                       <div class="input-group">
			                                        <select class="form-control show-tick" name="agama">
			                                            <option <?php if ($t['agama'] == "Islam") { echo "selected";}?> value="Islam">Islam</option>
			                                            <option <?php if ($t['agama'] == "Kristen") { echo "selected";}?> value="Kristen">Kristen</option>
			                                            <option <?php if ($t['agama'] == "Katholik") { echo "selected";}?> value="Katholik">Katholik</option>
			                                            <option <?php if ($t['agama'] == "Hindu") { echo "selected";}?> value="Hindu">Hindu</option>
			                                            <option <?php if ($t['agama'] == "Budha") { echo "selected";}?> value="Budha">Budha</option>
			                                        </select>
			                                        <span class="input-group-addon">
			                                            <i class="material-icons">local_library</i>
			                                        </span>
			                                        </div>
			                                    </div>
			                                </div>
			                                <div class="col-md-4">
			                                    <div class="input-group">
			                                        <div class="form-line">
			                                            <input type="text" class="form-control date" name="jabatan" value="<?= $t['tp_lahir'] ?>">
			                                        </div>
			                                        <span class="input-group-addon">
			                                            <i class="material-icons">local_offer</i>
			                                        </span>
			                                    </div>
			                                </div>
			                                <div class="col-md-4">
			                                    <div class="input-group">
			                                        <select class="form-control show-tick" name="gol">
			                                            <option <?php if ($t['golongan'] == "A") { echo "selected";}?> value="A">A</option>
			                                            <option <?php if ($t['golongan'] == "B") { echo "selected";}?> value="B">B</option>
			                                            <option <?php if ($t['golongan'] == "AB") { echo "selected";}?> value="AB">AB</option>
			                                            <option <?php if ($t['golongan'] == "O") { echo "selected";}?> value="O">O</option>
			                                        </select>
			                                        <span class="input-group-addon">
			                                            <i class="material-icons">local_hospital</i>
			                                        </span>
			                                    </div>
			                                </div>
			                                <div class="col-sm-12">
			                                    <div class="form-group">
			                                        <div class="form-line">
			                                            <textarea rows="4" class="form-control no-resize" name="alamat"><?= $t['alamat'];?></textarea>
			                                        </div>
			                                    </div>
			                                </div>
			                            </div>                            
			                            <div class="row clearfix">
			                                <div class="col-md-4">
			                                    <div class="input-group">
			                                        <select class="form-control show-tick" name="status">
			                                            <option <?php if ($t['status'] == "PNS") { echo "selected";}?> value="PNS">PNS</option>
			                                            <option <?php if ($t['status'] == "Honorer") { echo "selected";}?> value="Honorer">Honorer</option>
			                                        </select>
			                                        <span class="input-group-addon">
			                                            <i class="material-icons">transfer_within_a_station</i>
			                                        </span>
			                                    </div>
			                                </div>
			                                <div class="col-md-4">
			                                    <div class="input-group">
			                                       <div class="form-group">
			                                            <div class="form-line">
			                                                <input type="password" class="form-control date" name="password" value="<?= $t['password'] ?>">
			                                            </div>
			                                        </div>
			                                    </div>
			                                </div>
			                                <div class="col-md-4">
			                                    <div class="input-group">
			                                        <select class="form-control show-tick" name="pendidikan">
			                                            <option <?php if ($t['pendidikan'] == "SLTA") { echo "selected";}?> value="SLTA">SLTA</option>
			                                            <option <?php if ($t['pendidikan'] == "D3") { echo "selected";}?> value="D3">D3</option>
			                                            <option <?php if ($t['pendidikan'] == "D4/S1") { echo "selected";}?> value="D4/S1">D4/S1</option>
			                                            <option <?php if ($t['pendidikan'] == "S2") { echo "selected";}?> value="S2">S2</option>
			                                            <option <?php if ($t['pendidikan'] == "S3") { echo "selected";}?> value="S3">S3</option>
			                                        </select>
			                                        <span class="input-group-addon">
			                                            <i class="material-icons">transfer_within_a_station</i>
			                                        </span>
			                                    </div>
			                                </div>
			                                <div class="row clearfix">
			                                    <div class="col-md-11">
			                                        <div class="input-group" style="margin-left:40px;">
			                                            <div class="form-line">
			                                                    <input name="foto" type="file" value="<?= $t['foto']?>" />
			                                            </div>
			                                            <div style="margin-top:20px">
			                                                <img name="pict" width="150px" src="../assets/images/guru/<?= $t['foto']?>">
			                                            </div>
			                                        </div>
			                                    </div>
			                                </div>
			                                <div style="margin-left:40px;">
			                                    <button type="submit" name="simpan" class="btn btn-info waves-effect">
			                                        <i class="material-icons">lock</i>
			                                        <span>SIMPAN</span>
			                                    </button>
			                                </div>
			                            </div>
		                        	</form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>