<div class="navigasi hide"><li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_checkboxes_radios.html">Keluarga</a></li>
							<li class="active">Data Keluarga</li></div>
<div class="sub-title hide"><i class="icon-users4 position-left"></i> Data Keluarga</div>
				<div class="content">
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-flat">
			<div class="tabbable">
					<ul class="nav nav-tabs nav-tabs-top">
						<li class="<?=(isset($_GET['tambah'])||isset($_GET['detail']))?'':'active';?> home t">
							<a href="#icon-only-tab1" data-toggle="tab" onclick='history.replaceState({pg:1}, "pg home", "?home");'>
								<i class="icon-users4"></i>
								<span class=" position-right">Data Keluarga</span>
							</a>
						</li>
                        <li class="<?=(isset($_GET['tambah'])|| isset($_GET['detail']))?'active':'';?> tambah_keluarga t">
							<a href="#icon-only-tab2" data-toggle="tab" class="li_tambah">
								<i class="icon-user-plus"></i>
								<span class="position-right">Tambah Keluarga</span>
							</a>
						</li>
						
                    </ul>

					<div class="tab-content ">
						<div class="tab-pane <?=(isset($_GET['tambah']) || isset($_GET['detail']))?'':'active';?>" id="icon-only-tab1">
                        <div style="margin-left: 10px; margin-top: -10px;">
                        	<div class="media-left media-middle">
									<i class="text-indigo-400 icon-user-tie icon-2x"></i>
								</div>

								<div class="media-left">
									<h5 class=" no-margin">
										<b class="text-indigo-400">Informasi Keluarga</b>  
                                        <small class="display-block no-margin">Informasi data keluarga yang diperlukan DIKTI.</small>
									</h5>
								</div>
                                </div>
							
						<div class="panel-body">
				<table class="table table-framed table-striped table-xxs">
					<thead>
						<tr class="alpha-indigo">
							<th >Nama</th>
                            <th>Tanggal Lahir</th>
                            <th>Hubungan</th>
                            <th>Pendidikan/Pekerjaan</th>
                            <th>Alamat</th>
							<th class="text-center" style="width: 20px;">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php if($keluarga != NULL){foreach($keluarga as $val){?>

						<tr id="<?=$val['id_keluarga'];?>">
							
							<td>
									<h5 class="no-margin"><?=$val['nama'];?></h5>
									<div class="text-muted text-size-small"><?=$val['nik'];?></div>
								</td>
                            <td>
									<?=$val['tmp_lahir']?>
                                    <span class="display-block text-muted"><?=tgl_indo($val['tgl_lahir']);?></span>
							</td>
                            <td><?=$val['hubungan']?>
                            <div class="text-muted text-size-small ">
                                    <span class="status-mark border-blue position-left"></span> Menikah</div></td>
                            
							<td>
								<a href="#" class="text-default display-inline-block">
									<span class="text-semibold"><?=$val['pendidikan']?>/<?=$val['nama_pekerjaan'];?></span>
									<span class="display-block text-muted">Penghasilan : Rp. <?=number_format($val['pendapatan'],0);?></span>
								</a>
							</td>
                            <td><?=$val['alamat']?></td>
							<td class="text-center">
							<a class="text-primary a_tambah" data-id="<?=$val['id_keluarga'];?>">[ubah]</a>	
                            <a class="text-danger del_keluarga" data-id="<?=$val['id_keluarga'];?>">[hapus]</a>
							</td>
						</tr>
                        <?php }} ?>
                    </tbody>
				</table>
						</div>
						</div>

						<div class="tab-pane <?=(isset($_GET['tambah']))?'active':'';?>" id="icon-only-tab2">
					   <div style="margin-left: 10px; margin-top: -10px;">
<div class="media-left media-middle">
	<i class="text-indigo-400 icon-shield-notice icon-2x"></i>
</div>

<div class="media-left">
	<h5 class=" no-margin">
		<b class="text-indigo-400">Tambahkan Data Keluarga beserta Penghasilan</b>  
        <small class="display-block no-margin">*Wajib untuk menambahkan data ayah dan ibu, atau wali beserta penghasilan.</small>
	</h5>
</div>
<hr />
</div>

<div class="panel-body tambah_content">
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
<?php if(isset($_GET['detail'])){ ?>
detail("<?=$_GET['detail']?>");
<?php } ?>
<?php if(isset($_GET['tambah'])){ ?>
detail();
<?php } ?>
      $('.a_tambah').on('click', function () {
         var id=$(this).data('id');
         detail(id);
       
    });
    function detail(id=null){
       $.ajax({ 
            url		: "<?=site_url('mahasiswa/profile/tambah_keluarga/');?>"+id,
			 success: function(response){
                $('.tab-pane').removeClass('active');
                $('#icon-only-tab2').addClass('active');
               $('.tambah_content').html(response);
               $('.t').removeClass('active');
               $('.tambah_keluarga').addClass('active');
               history.replaceState({pg:1}, "pg home", "?detail="+id);
            }
        });
    }
    $('.li_tambah').on('click', function () {
        detail();
       
    });
    $('.del_keluarga').on('click', function () {
        del("<?=site_url('mahasiswa/profile/delete_keluarga')?>", $(this).data('id'));      
    });
</script>             