<div class="row">
	<div class="panel-body">
		<form action="" id="form" method="get">
		<div class="col-xs-12 col-md-10">
			 <div class="col-md-6 form-group">
            <label  class="text-bold no-margin no-padding">NIM Mahasiswa </label>
            <input type="text" class="form-control" name="dosen" id="input_dosen_form2" placeholder="Nama Dosen" />
            </div>
            <div class="col-md-6 form-group">
            <label  class="text-bold no-margin no-padding">Status </label>
            <select class="form-control select-xs semester" name="semester">
<?php for($i=2015;$i<=date('Y');$i++){ ?>
<option <?=(isset($_GET['semester'])&&$_GET['semester']==$i.'1')?'selected':'';?> value="<?=$i.'1'?>"><?='GANJIL '.$i.'/'.($i+1);?></option>
<option <?=(isset($_GET['semester'])&&$_GET['semester']==$i.'2')?'selected':'';?> value="<?=$i.'2'?>"><?='GENAP '.$i.'/'.($i+1);?></option>
<?php } ?>
</select>
            </div>
            <div class="col-md-6 form-group">
            <label class="text-bold no-margin no-padding">Fakultas</label>
<select class="form-control select-clear fakultas2" name="fakultas" >
<option <?=(isset($_GET['fakultas'])&&$_GET['fakultas']=='all')?'selected':'';?> value="all">Semua Fakultas</option>
<?php if($ref_fakultas != NULL){ foreach($ref_fakultas as $val){ ?>
<option <?=(isset($_GET['fakultas'])&&$_GET['fakultas']==$val['id_fakultas'])?'selected':'';?> value="<?=$val['id_fakultas']?>"><?=$val['fakultas']?></option>
<?php } }?>
</select>
            </div>
<div class="col-md-6 form-group">
            <label class="text-bold no-margin no-padding">Jurusan</label>
<select class="form-control select-clear jurusan2" name="jurusan">
<option <?=(isset($_GET['jurusan'])&&$_GET['jurusan']=='all')?'selected':'';?> value="all" >Semua Jurusan</option>

</select>
            </div>
		</div>	


											

			

			
			
			
				
			<!-- <legend class="text-bold"></legend> -->
			<div class="col-xs-12 col-md-2" style="margin-top: 50px; ">
				<div class="form-group row">
					<div class="text-center text">
                        <button class="btn btn-primary btn_cari btn-ladda-spinner"><i class="glyphicon glyphicon-search"></i> Cari</button>
					</div>
				</div>
			</div>

		</form>
	</div>
</div>
