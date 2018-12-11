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
                            INPUT DATA GURU
                        </h2>
                    </div>
                    <div class="body">
                        <form action="akademik/guru/p_t_guru.php" method="POST" enctype="multipart/form-data">
                            <div class="row clearfix">

                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nip" placeholder="NIP">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">vpn_key</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="nm_guru" placeholder="Nama">
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
                                            <input type="text" class="form-control date" name="tp_lahir" placeholder="Tempat Lahir">
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
                                                <input type="date" class="form-control date" name="tgl_lahir" placeholder="Pilih Tanggal Lahir">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="jk">
                                            <option value="">-- Jenis Kelamin --</option>
                                            <option value="Laki - Laki">Laki - Laki</option>
                                            <option value="Perempuan">Perempuan</option>
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
                                            <option value="">-- Agama --</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Katholik">Katholik</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Budha">Budha</option>
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
                                            <input type="text" class="form-control date" name="jabatan" placeholder="Jabatan">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_offer</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="gol">
                                            <option value="">-- Golongan Darah --</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="AB">AB</option>
                                            <option value="O">O</option>
                                        </select>
                                        <span class="input-group-addon">
                                            <i class="material-icons">local_hospital</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <textarea rows="4" class="form-control no-resize" name="alamat" placeholder="Alamat"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>                            
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="status">
                                            <option value="">-- Status --</option>
                                            <option value="PNS">PNS</option>
                                            <option value="Honorer">Honorer</option>
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
                                                <input type="password" class="form-control date" name="password" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <select class="form-control show-tick" name="pendidikan">
                                            <option value="">-- Pendidikan --</option>
                                            <option value="SLTA">SLTA</option>
                                            <option value="D3">D3</option>
                                            <option value="D4/S1">D4/S1</option>
                                            <option value="S2">S2</option>
                                            <option value="S3">S3</option>
                                        </select>
                                        <span class="input-group-addon">
                                            <i class="material-icons">transfer_within_a_station</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                            <div class="form-line">
                                                    <input name="foto" type="file" multiple />
                                            </div>
                                            <span class="input-group-addon">
                                                <i class="material-icons">vpn_key</i>
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
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
