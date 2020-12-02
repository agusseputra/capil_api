
<div class="page-container">
    <div class="page-content">
<div class="panel panel-flat  border-top-info">
<div class="col-md-12 bg-info-800 text-white" >
<div class="media-left media-middle" >
	<i class="icon-user-check icon-2x"></i>
</div>

<div class="media-left">
	<h2 class=" ">
		<b >Statistik Mahasiswa Aktif</b>  
        <small class="display-block text-white  no-margin">Modul ini akan menampilkan data mahasiswa baru(sudah memiliki NPM) di 
        Universitas Pendidikan Ganesha. Terdapat 4 pilihan untuk melakukan filter data yang diinginkan yaitu tahun, jenjang, fakultas dan prodi. 
        Data disajikan dalam bentuk chart dan tabel. 
        Pengguna juga dapat melakukan ekstrak data dalam format XLS.</small>
	</h2>
    
</div>
</div>
<div class="panel-body">
<div class="form-group">
<div class="col-md-2">
<label class="text-bold no-margin no-padding">Semester</label>
<select class="form-control select-xs semester" name="semester">
<?php for($i=2015;$i<=date('Y');$i++){ ?>
<option <?=(isset($_GET['semester'])&&$_GET['semester']==$i.'1')?'selected':'';?> value="<?=$i.'1'?>"><?='GANJIL '.$i.'/'.($i+1);?></option>
<option <?=(isset($_GET['semester'])&&$_GET['semester']==$i.'2')?'selected':'';?> value="<?=$i.'2'?>"><?='GENAP '.$i.'/'.($i+1);?></option>
<?php } ?>
</select>
</div>
<div class="col-md-2">
<label class="text-bold no-margin no-padding">Angkatan</label>
<select class="form-control select-xs angkatan" name="angkatan">
<option value="all">Semua Angkatan</option>
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
<button class="btn btn-primary btn_cari btn-ladda-spinner">Cari</button>
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
<?php if($ref_jurusan != NULL){ foreach($ref_jurusan as $val){ ?>
<option class="hide op "  data-fakultas="<?=$val['id_fakultas']?>"  value="<?=$val['id_jurusan']?>"><?=$val['nama_jurusan']?></option>
<?php } }?>
<script>
 
$(".select-clear option[value='all']").hide();
    $('.btn_cari').on('click', function () {
        var l = Ladda.create(document.querySelector('.btn-ladda-spinner'));
        l.start();
        var angkatan=$('.angkatan').val();
        var fakultas=$('.fakultas').val();
        var jurusan=$('.jurusan').val();
        var semester=$('.semester').val();
        $.ajax({ 
                    url		: "<?=site_url('data/mahasiswa_aktif/?ajax&');?>semester="+semester+"&angkatan="+angkatan+"&fakultas="+fakultas+"&jurusan="+jurusan,
        			 success: function(response){
                        $('.tab_isi').html(response);
                       history.replaceState({pg:1}, "pg home", "?semester="+semester+"&angkatan="+angkatan+"&fakultas="+fakultas+"&jurusan="+jurusan);
                       l.stop();
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