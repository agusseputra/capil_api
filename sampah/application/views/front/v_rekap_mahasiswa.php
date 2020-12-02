<div class="page-container">
    <div class="page-content">
<div class="panel panel-flat  border-top-info">
<div class="col-md-12 bg-blue-800 text-white" >
<div class="media-left media-middle" >
	<i class="icon-user-tie icon-2x"></i>
</div>

<div class="media-left">
	<h2 class=" ">
		<b >Statistik Mahasiswa Baru</b>  
        <small class="display-block text-white  no-margin">Modul ini akan menampilkan data mahasiswa baru(sudah memiliki NIM) di 
        Universitas Pendidikan Ganesha. Terdapat 3 pilihan untuk melakukan filter data yang diinginkan yaitu tahun,  fakultas dan prodi. 
        Data disajikan dalam bentuk chart dan tabel. 
        Pengguna juga dapat melakukan ekstrak data dalam format XLS.</small>
	</h2>
    
</div>
</div>
<div class="panel-body">
<div class="form-group">
<div class="col-md-2">
<label class="text-bold no-margin no-padding">Angkatan</label>
<select class="form-control select-xs angkatan" name="angkatan">
<?php for($i=2010;$i<=date('Y');$i++){ ?>
<option <?=(isset($_GET['angkatan'])&&$_GET['angkatan']==$i)?'selected':'';?> value="<?=$i?>"><?=$i;?></option>
<?php } ?>
</select>
</div>
<div class="col-md-3">
<label class="text-bold no-margin no-padding">Fakultas</label>
<select class="form-control select-clear fakultas" name="fakultas" >
<option <?=(isset($_GET['fakultas'])&&$_GET['fakultas']=='all')?'selected':'';?> value="all">Semua Fakultas</option>
<?php if($ref_fakultas != NULL){ foreach($ref_fakultas as $val){ ?>
<option <?=(isset($_GET['fakultas'])&&$_GET['fakultas']==$val['id_fakultas'])?'selected':'';?> value="<?=$val['id_fakultas']?>"><?=$val['fakultas']?></option>
<?php } }?>
</select>
</div>
<div class="col-md-3">
<label class="text-bold no-margin no-padding">Jurusan</label>
<select class="form-control select-clear jurusan" name="jurusan">
<option <?=(isset($_GET['jurusan'])&&$_GET['jurusan']=='all')?'selected':'';?> value="all" >Semua Jurusan</option>

</select>
</div>
<div class="col-md-2"><br />
<button class="btn btn-primary btn_cari">Cari</button>
</div>
</div>
<div class="col-md-12"><hr /></div>
<div class=" col-md-12 tab_isi">
<?php $this->load->view('front/table_rekap_mahasiswa'); ?>
</div>
</div>
<div class="panel-footer"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
	<div class="heading-elements"></div>
</div>
</div>
</div></div>

<script>
 
$(".select-clear option[value='all']").hide();
    $('.btn_cari').on('click', function () {
        var angkatan=$('.angkatan').val();
        var fakultas=$('.fakultas').val();
        var jurusan=$('.jurusan').val();
        $.ajax({ 
                    url		: "<?=site_url('data/mahasiswa_baru/?ajax&');?>angkatan="+angkatan+"&fakultas="+fakultas+"&jurusan="+jurusan,
        			 success: function(response){
                        $('.tab_isi').html(response);
                       history.replaceState({pg:1}, "pg home", "?angkatan="+angkatan+"&fakultas="+fakultas+"&jurusan="+jurusan);
                       }
                });
    });	
   $('.fakultas').on('change', function () {
        append_select($(this).val());
    });	
  function append_select(id){
  $('.jurusan').find('option').remove();
  $('.jurusan').append($("<option></option>").attr("value","all").text("Semua Jurusan")); 
    $(".op").each(function(){
        var id_fak=$(this).data('fakultas');
      //  alert(id_fak);
        if(id==id_fak){
            $('.jurusan').append($("<option></option>").attr("value",$(this).val()).text($(this).text())); 
        }
    });
  } 
  <?php if(isset($_GET['fakultas'])&& ($_GET['fakultas']!='all' && $_GET['fakultas']!='null')){?>
  append_select(<?=$_GET['fakultas'];?>);
  <?php } ?> 
</script>