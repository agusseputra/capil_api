<div class="navigasi hide"><li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_checkboxes_radios.html">Kemahasiswaan</a></li>
							<li class="active">Master Data</li></div>
<div class="sub-title hide"><i class="icon-search4 position-left"></i> Update Biodata Mahasiswa</div>
<div class="content">
<div class="row">
<div class="col-lg-12">
<div class="panel panel-flat border-top-indigo">
	    <div class="col-md-12" style="padding-top: 10px;">
        	<div class="media-left media-middle">
					<i class="text-indigo-400 icon-user-tie icon-2x"></i>
				</div>
            <div class="media-left">
					<h5 class=" no-margin">
						<b class="text-indigo-400">Pencarian Data Mahasiswa</b>  
                        <small class="display-block no-margin">Masukkan NIM mahasiswa.</small>
					</h5>
				</div>
                <hr />
        </div>
		<div class="panel-body">
         <div class="input-group col-md-6">
					<input type="text"   class="form-control autocomplete" value="<?=(isset($_GET['cari']))?$_GET['cari']:'';?>"   placeholder="Masukan NIM Mahasiswa">
                    <input type="hidden"   class="form-control nim " value="<?=(isset($_GET['cari']))?$_GET['cari']:'';?>" >
                    <span class="input-group-btn"><button class="btn btn-info legitRipple icon-search4 b_cari" type="button"> Cari</button></span>								
			     </div> 
            <hr />
        <div class="col-md-12" id="search_content">
                <?php if(isset($profile)){ $this->load->view('back/kemahasiswaan/update_biodata_content'); }?>
        </div>
        </div>						
		</div>
        </div>
</div>
</div>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.autocomplete.js"></script>
<link href="<?=base_url();?>assets/js/jquery.autocomplete.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
   $('.autocomplete').autocomplete({
        serviceUrl: "<?=site_url('admin/kemahasiswaan/autocomplete_mhs')?>",
        width:568,
        onSelect: function (suggestion) {
            $('.autocomplete').val(''+suggestion.value); 
            $('.nim').val(suggestion.id); 
        }
    });
$('.b_cari').on('click', function () {
         var s=$('.nim').val();
         cari(s);     
    });
function cari(s=null){
    $('#search_content').html("Mohon Menunggu...");
       $.ajax({ 
            url		: "<?=site_url('admin/kemahasiswaan/update_biodata?ajax&cari=');?>"+s,
			 success: function(response){
                $('#search_content').html(response);
               history.replaceState({pg:1}, "pg home", "?cari="+s);
            }
        });
    }

</script>     