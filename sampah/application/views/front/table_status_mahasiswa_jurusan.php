
<div class="table-responsive">
<table class="table table-striped table-xxs tb  table-framed">
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
$color=array('#64B5F6','#1E88E5','#1565C0','#81C784','#4CAF50','#2E7D32','#4DD0E1','#00BCD4','#00838F','#7986CB','#3F51B5','#283593');

$total=0;$totx=0; if($rekap != NULL){
foreach($rekap as $val){
    $total+=(isset($val['total']))?$val['total']:0;
}
$no=1;
$categories=array();
foreach($rekap as $val){
    
    
    ?> 
<tr><td><?=$no;?></td><td><a class="a_" data-id="<?=$val['id']?>"><?=$val['jurusan']?></a></td>
<?php if($ref_status != NULL){$g_cat[$val['id']]=array();$g_tot[$val['id']]=array(); foreach($ref_status as $val2){
    if(isset($val['status'][$val2['id_status']])){
        $g_cat[$val['id']][]=$val['singkatan'].'/'.$val2['status'];
        $g_tot[$val['id']][]=(isset($val['status'][$val2['id_status']]))? round(($val['status'][$val2['id_status']]/$total)*100,2):0;
    }
    $tot[$val2['id_status']]+=(isset($val['status'][$val2['id_status']]))?$val['status'][$val2['id_status']]:0;
     ?><td><?=(isset($val['status'][$val2['id_status']]))?$val['status'][$val2['id_status']]:0;?></td> 
    <?php } } ?>
<td><?=(isset($val['total']))?$val['total']:0;?></td></tr>
<?php $no++; 
if($no<=11 ){
$categories[]=$val['singkatan'];
$t=(isset($val['total']))?$val['total']:0;
 $grap[]=array(
    'y'=>round(($t/$total)*100,2),
    'color'=>$color[$no],
    'drilldown'=>array(
        'name'=>$val['jurusan'],
        'categories'=>$g_cat[$val['id']],
        'data'=>$g_tot[$val['id']]
        )
    );
}else{
    $totx+=(isset($val['total']))?$val['total']:0;
    $per=round((float)(($totx/$total)*100), 2);
    $dtx=array(
    'y'=>$per,
    'color'=>'black',
    'drilldown'=>array(
        'name'=>'Lain-Lain',
        'categories'=>array('lain-lain'),
        'data'=>array($per)
        )
    );
}
}
if(isset($dtx)){
$categories[]='Lain-lain';
$grap[]=$dtx;
}
}

 ?>

 </tbody>
 <tr class="active border-top"><td colspan="2"><h5>TOTAL</h5>  </td>
  <?php  if($ref_status != NULL){foreach($ref_status as $val){?>
<td><?=$tot[$val['id_status']];?></td> <?php } } ?>
 <td><h5><?=$total;?></h5></td></tr>
</table>
</div>

<?php ?>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>


<script>
$('.a_').on('click', function () {
         var fakultas=$(this).data('id');
         $.ajax({ 
                url	: "<?=site_url('data/index/?ajax');?>&jurusan="+fakultas,
                success: function(response){
                $('.tab_isi').html(response);
               history.replaceState({pg:1}, "pg home", "?jurusan="+fakultas);
               }
        });
        
    });
var colors = Highcharts.getOptions().colors,
    categories = <?=json_encode($categories);?>,
    data = <?=json_encode($grap);?>,
    browserData = [],
    versionsData = [],
    i,
    j,
    dataLen = data.length,
    drillDataLen,
    brightness;


// Build the data arrays
for (i = 0; i < dataLen; i += 1) {

    // add browser data
    browserData.push({
        name: categories[i],
        y: data[i].y,
        color: data[i].color
    });

    // add version data
    drillDataLen = data[i].drilldown.data.length;
    for (j = 0; j < drillDataLen; j += 1) {
        brightness = 0.2 - (j / drillDataLen) / 5;
        versionsData.push({
            name: data[i].drilldown.categories[j],
            y: data[i].drilldown.data[j],
            color: Highcharts.Color(data[i].color).brighten(brightness).get()
        });
    }
}

// Create the chart
Highcharts.chart('container', {
    chart: {
        type: 'pie'
    },
    title: {
        text: '10 Besar Persebaran Mahasiswa per Jurusan, January, 2015 to May, 2015'
    },
    subtitle: {
        text: 'Source: <a href="http://netmarketshare.com/">mahsiswa.undiksha.ac.id</a>'
    },
    yAxis: {
        title: {
            text: 'Total persentasi persebaran mahasiswa'
        }
    },
    plotOptions: {
        pie: {
            shadow: false,
            center: ['50%', '50%']
        }
    },
    tooltip: {
        valueSuffix: '%'
    },
    series: [{
        name: 'Jurusan',
        data: browserData,
        size: '60%',
        dataLabels: {
            formatter: function () {
                return this.y > 5 ? this.point.name : null;
            },
            color: '#ffffff',
            distance: -30
        }
    }, {
        name: 'Status',
        data: versionsData,
        size: '80%',
        innerSize: '60%',
        dataLabels: {
            formatter: function () {
                // display only if larger than 1
                return this.y > 1 ? '<b>' + this.point.name + ':</b> ' +
                    this.y + '%' : null;
            }
        },
        id: 'Status'
    }],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 400
            },
            chartOptions: {
                series: [{
                    id: 'versions',
                    dataLabels: {
                        enabled: false
                    }
                }]
            }
        }]
    }
});
</script>