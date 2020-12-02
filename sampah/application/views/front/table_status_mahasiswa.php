<div class="table-responsive">
<table class="table table-striped table-xxs   table-framed">
	<thead>
<tr class="bg-primary text-size-mini"><th>No</th><th>Fakultas/Jurusan</th>
<?php $arr_head[]='Status'; if($ref_status != NULL){foreach($ref_status as $val){
    $tot[$val['id_status']]=0;
    $arr_head[]=$val['status']; ?><th><?=substr($val['status'],0,6);?></th> <?php } } ?>
<th>Total</th>
</tr>
</thead>
<tbody>
<?php 
 $arr_final[]=$arr_head;
$total=0; if($rekap != NULL){$no=1;foreach($rekap as $val){
    $arr=array();
    $arr[]="$no";
    $total+=(isset($val['total']))?$val['total']:0;?> 
<tr><td><?=$no;?></td><td><a class="a_" data-id="<?=$val['id']?>"><?=$val['jurusan']?></a></td>
<?php if($ref_status != NULL){foreach($ref_status as $val2){
    $tot[$val2['id_status']]+=(isset($val['status'][$val2['id_status']]))?$val['status'][$val2['id_status']]:0;
    $arr[]=(isset($val['status'][$val2['id_status']]))?(int)$val['status'][$val2['id_status']]:0; ?><td><?=(isset($val['status'][$val2['id_status']]))?$val['status'][$val2['id_status']]:0;?></td> <?php } } ?>
<td><?=(isset($val['total']))?$val['total']:0;?></td></tr>
<?php $no++; 
$arr_final[]=$arr;
}} ?>

 </tbody>
 <tr class="active border-top text-bold"><td colspan="2"><h5>TOTAL</h5></td>
 <?php  if($ref_status != NULL){foreach($ref_status as $val){?>
<td><?=$tot[$val['id_status']];?></td> <?php } } ?>
 <td><h5><?=$total;?></h5></td></tr>
</table>
</div>
<style type="text/css">
svg{padding: 0px;width: 100%;}
</style>
<?php ?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawVisualization);

      function drawVisualization() {
        // Some raw data (not necessarily accurate)
        var data = google.visualization.arrayToDataTable(<?=json_encode($arr_final);?>);

    var options = {
      legend: { position: 'top', maxLines: 3 },
        bar: { groupWidth: '75%' },
        isStacked: true
    };

    var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
   $('.a_').on('click', function () {
         var fakultas=$(this).data('id');
         <?php if(isset($_GET['fakultas'])&&($_GET['fakultas']!='' && $_GET['fakultas']!=null && $_GET['fakultas']!='all')){?>
         $.ajax({ 
                url	: "<?=site_url('data/mahasiswa/?ajax&fakultas='.$_GET['fakultas']);?>&jurusan="+fakultas,
                success: function(response){
                $('.tab_isi').html(response);
               history.replaceState({pg:1}, "pg home", "?fakultas=<?=$_GET['fakultas']?>&jurusan="+fakultas);
               }
        });
         <?php }else{ ?>
         $.ajax({ 
                url	: "<?=site_url('data/mahasiswa/?ajax&');?>fakultas="+fakultas,
                success: function(response){
                $('.tab_isi').html(response);
               history.replaceState({pg:1}, "pg home", "?fakultas="+fakultas);
               }
        });
        <?php } ?>
    });
    </script>