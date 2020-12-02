<table class="table table-xxs table-striped table-framed tb">
<thead>
<tr class="alpha-indigo"><td>NIM</td><td>NAMA</td><td>Jurusan</td></tr>
</thead>
<tbody>
<?php if($mahasiswa != NULL){ foreach($mahasiswa as $val){  ?>
<tr><td><a href="#icon-only-tab1" data-toggle="tab" class="a_detail" data-id="<?=$val['nim']?>"> <?=$val['nim']?></a></td><td><?=$val['nama']?></td><td><?=$val['nama_jurusan']?></td> </tr>
<?php }} ?>
</tbody>
</table>
<script>
var a=0;
 $('.tb').DataTable({ 
    "pageLength": 25 ,
    "ordering": false,
    dom: '<"datatable-header"fBl><"datatable-scroll-wrap"t><"datatable-footer"ip>',
     buttons: {
            dom: {
                button: {
                    className: 'btn btn-sm btn-default'
                }
            },
            buttons: [
                {extend: 'copy'},
                {extend: 'excel'},
                {extend: 'pdf'},
                {extend: 'print'}
            ]
        },
    "fixedHeader": {
              header: !0, headerOffset: a
        }
    });
$('.a_detail').on('click', function () {
   var s=$(this).data('id');
         cari_status(s);     
    });
</script>