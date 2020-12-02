<div class="navigasi hide"><li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_checkboxes_radios.html">Kinerja Dosen</a></li>
							<li class="active">Angket</li></div>
<div class="sub-title hide"><i class="icon-users4 position-left"></i> Kinerja Dosen</div>
				<div class="content">
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-flat">
			<div class="tabbable">
					<ul class="nav nav-tabs nav-tabs-top">
						<li class="<?=(isset($_GET['angket']))?'':'active';?> home t">
							<a href="#icon-only-tab1" data-toggle="tab" onclick='history.replaceState({pg:1}, "pg home", "?home");'>
								<i class="icon-book3"></i>
								<span class=" position-right">Data Pengambilan</span>
							</a>
						</li>
                        <li class="<?=(isset($_GET['angket']))?'active':'';?> angket t">
							<a href="#icon-only-tab2" data-toggle="tab" class="li_tambah">
								<i class="icon-user-plus"></i>
								<span class="position-right">Angket</span>
							</a>
						</li>						
                    </ul>
					<div class="tab-content ">
						<div class="tab-pane <?=(isset($_GET['angket']))?'':'active';?>" id="icon-only-tab1">
                        <div style="margin-left: 10px; margin-top: -10px;">
                        	<div class="media-left media-middle">
									<i class="text-indigo-400 icon-user-tie icon-2x"></i>
								</div>

								<div class="media-left">
									<h5 class=" no-margin">
										<b class="text-indigo-400">Informasi Pengambilan</b>  
                                        <small class="display-block no-margin">Informasi matakuliah yang belum diisi angket.</small>
									</h5>
								</div>
                                </div>							
						<div class="panel-body">
				<table class="table table-framed table-striped table-xxs">
					<thead>
						<tr class="alpha-indigo">
							<th>Mata Kuliah</th>
                            <th>Kode</th>
                            <th>Tahun/Semester</th>
                            <th>SKS</th>
							<th class="text-center" style="width: 20px;">Status</th>
						</tr>
					</thead>
					<tbody>
						<?php if($pengambilan != NULL){foreach($pengambilan as $val){?>
                        <tr id="<?=md5($val['id_pengambilan']);?>" data-title="<?=$val['nama_mk'];?>"><td><a class="a_angket" data-penawaran="<?=md5($val['id_penawaran']);?>" data-id="<?=md5($val['id_pengambilan']);?>"> <?=$val['nama_mk']?></a></td><td><?=$val['kode_mk']?></td><td><?=$val['tahun'].'/'.$val['semester']?></td><td><?=$val['sks_mk']?></td><td></td></tr>
                        <?php }} ?>
                    </tbody>
				</table>
						</div>
						</div>
						<div class="tab-pane <?=(isset($_GET['angket']))?'active':'';?>" id="icon-only-tab2">
					   <div style="margin-left: 10px; margin-top: -10px;">
<div class="media-left media-middle">
	<i class="text-indigo-400 icon-shield-notice icon-2x"></i>
</div>

<div class="media-left">
	<h5 class=" no-margin">
		<b class="text-indigo-400">Angket Dosen</b>  
        <small class="display-block no-margin">*Wajib untuk mengisi seluruh butir angket dosen denga benar.</small>
	</h5>
</div>
<hr / class="no-margin-bottom">
</div>

<div class="panel-body angket_content">
mohon menunggu...
</div>
						</div>
					</div>
				</div>
		</div>
	</div>						
</div>
</div>

<script type="text/javascript">
<?php if(isset($_GET['angket'])){ ?>
angket("<?=$_GET['angket']?>");
<?php } ?>

      $('.a_angket').on('click', function () {
         var id=$(this).data('id');
         var pen=$(this).data('penawaran');
         angket(id,pen);
       
    });
    function angket(id){
        var pen=$('#'+id).find('.a_angket').data('penawaran');
       $.ajax({ 
            url		: "<?=site_url('mahasiswa/kinerja/angket/');?>"+id+"/"+pen,
			 success: function(response){
                $('.tab-pane').removeClass('active');
                $('#icon-only-tab2').addClass('active');
               $('.angket_content').html(response);
               $('.t').removeClass('active');
               $('.angket').addClass('active');
               $('.matkul').html($('#'+id).data('title'));
               $(".f_angket").attr("action", "<?=site_url('mahasiswa/kinerja/save_angket/');?>"+id);
               history.replaceState({pg:1}, "pg home", "?angket="+id);
            }
        });
    }
    
</script>             