<div class="table-responsive">
									<table class="table text-nowrap table-xxs table-framed">
										<thead>
											<tr class="alpha-indigo">
												<th width='10'>No</th>
                                                <th >NIM</th>
												<th >Th/Smt Masuk</th>
												<th>Penerimaan</th>
							                     <th>Jurusan</th>
												
											</tr>
										</thead>
										<tbody>
											<?php if($pendidikan != NULL){$no=1; foreach($pendidikan as $val){  ?>
											<tr>
												<td><?=$no;?></td>
                                                <td><?=$val['nim'];?></td>
												<td><?=$val['tahun_masuk'].'/'.substr(substr($val['nim'],-4),0,1);?></td>
           	                                    <td><?=$val['jalur']?></td>
												<td><?=$val['nama_jurusan']?></td>
											</tr>
											<?php $no++; } } ?>
										</tbody>
									</table>
								</div>