<div style="margin-left: 10px; margin-top: -10px;">
<div class="media-left media-middle">
	<i class="text-indigo-400 icon-pulse2 icon-2x"></i>
</div>
<div class="media-left">
	<h5 class=" no-margin">
		<b class="text-indigo-400">Informasi Medis</b>  
        <small class="display-block no-margin">informasi kebutuhan medis yang diperlukan Dikti.</small>
	</h5>
</div>
<hr />
</div>
<?php if($medis['kebutuhan_khusus']!=''){
   $kebutuhan_khusus=json_decode($medis['kebutuhan_khusus']) ;
}?>
<div class="panel-body">
	<form action="<?=site_url('mahasiswa/profile/save_medis/');?>" class="form-ajax form-validate-jquery" method="post">
<div class="col-md-4">
		<div class="col-xs-12">
			<label>Tinggi <small>dalam cm</small></label>
		  <input type="number" class="form-control" name="tinggi" placeholder="masukan angka misal 170" value="<?=($medis != NULL)?$medis['tinggi']:'';?>"/> 
		</div>
		<div class="col-xs-12">
			<label>Berat <small>dalam kg</small></label>
			<input type="number" name="berat" class="form-control" placeholder="masukan angka misal 50" value="<?=($medis != NULL)?$medis['berat']:'';?>" /> 
		</div>
        <div class="col-xs-12 ">
			<label>Golongan Darah</label>
		  <input type="number" name="golongan_darah" class="form-control" placeholder="masukan golongan darah misal 0" value="<?=($medis != NULL)?$medis['golongan_darah']:'';?>" /> 
		</div>
</div>
<div class="col-md-8">
	<blockquote class="no-margin">
	<h5 class="no-margin">Kebutuhan Khusus</h5>		
	</blockquote>
    <div class="col-md-12">																				
<?php if($ref_kebutuhan_khusus != NULL){foreach($ref_kebutuhan_khusus as $val){?>
<div class="  col-xs-6 col-md-4">
	<label>
		<input type="checkbox" name="kebutuhan_khusus[]" value="<?=$val['id_kebutuhan_khusus']?>"  <?=(isset($kebutuhan_khusus) && in_array($val['id_kebutuhan_khusus'],$kebutuhan_khusus))?'checked':'';?>>
		<?=$val['kode'].'/'.$val['keterangan'];?>
	</label>
</div>
<?php } } ?>                                     
</div>
</div>
<div class="text-right col-lg-12">
<hr /><button type="submit" class="btn bg-indigo btn-sm  btn-ladda btn-ladda-spinner" data-spinner-color="#fff" data-style="slide-right"><span class="ladda-label">SIMPAN <i class="icon-floppy-disk position-right"></i></span></button>
</div>
</form>
</div>