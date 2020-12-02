<div class="navigasi hide">
    <li><a href="<?= site_url(); ?>"><i class="icon-home2 position-left"></i> Home</a></li>
    <li class="active">daftar layanan</li>
</div>
<div class="sub-title hide"><i class="  icon-list position-left icon-2x"></i> DAFTAR Layanan</div>
<div class="content" style="margin-top:-20px;">
    <div class="row">
        <div class="col-lg-4 col-md-6">
            <div class="panel panel-flat border-top-lg border-top-primary">
                <div class="panel-body ">
                    <blockquote class=" col-md-12 ">
                        <h3 class="no-margin">Tambah Layanan</h3>
                        <hr class="no-margin" />
                    </blockquote>
                    <form action="<?= site_url('layanan/save'); ?>" class="form-ajax form-validate-jquery" method="post">
                        <div class="form-group ">
                            <label>Nama Layanan</label>
                            <input type="text" name="nama_layanan" class="form-control " id="nama_layanan" placeholder="Masukkan Nama Layanan" />
                            <input type="hidden" name="id_layanan" class="form-control " id="id_layanan"  />
                            </div>
                        <div class="form-group row">
                            <div class="col-xs-4">
                                <label>Masukkan Kode</label>
                                <input type="text" name="kode_layanan" class="form-control " id="kode_layanan" placeholder="2 angka" />
                            </div>
                            <div class="col-xs-8">
                                <label>Harga Standar</label>
                                <input type="text" name="nominal" class="form-control " id="nominal" placeholder="Jumlah pembayaran" />
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn bg-pink-400 btn-block btn-ladda btn-ladda-spinner" data-spinner-color="#fff" data-style="slide-right"><span class="ladda-label"> SIMPAN <i class="icon-circle-right2 position-right"></i></span></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-6">
            <div class="panel panel-flat border-top-lg border-top-primary">
                <div class="panel-body ">
                    <blockquote class=" col-md-12 ">
                        <h3 class="no-margin">Daftar Layanan</h3>
                    </blockquote>
                    <div class="v_spc">
                    <?php $this->load->view('briva/table_layanan'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="modal_large" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h5 class="modal-title">Detail #<span id="cus"></span></h5>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>
