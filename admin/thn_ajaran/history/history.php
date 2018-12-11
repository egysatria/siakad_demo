<section class="content">
    <div class="container-fluid">
    	<form action="" method="POST">
	     	<div class="col-md-4">
	            <div class="input-group">
	                <select class="form-control show-tick" name="filter">
	                	<option value="">-- Pilih --</option>
	                	<?php
	                    $s = $k->query("SELECT DISTINCT ta FROM `thn_ajaran`");
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
	            </div>
	        </div>
            <div style="margin-left:20px;">
                <button type="submit" name="simpan" class="btn btn-info waves-effect">
                    <i class="material-icons">search</i>
                    <span>Tampil</span>
                </button>
            </div>
    	</form>
        <!-- Basic Examples -->
        <?php include 'tampil.php';?>
        <!-- #END# Basic Examples -->
	</div>
</section>
