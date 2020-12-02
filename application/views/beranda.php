				<!-- Page header -->
				<div class="page-header">
					<!-- Header content -->
					<div class="page-header-content">
						<div >
							<h4 class=""><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">User Pages</span> - Profile</h4>
                            <a class="heading-elements-toggle"><i class="icon-more"></i></a>
                        </div>
						<div class="heading-elements">
                        <ul class="breadcrumb position-right">
								<li><a href="index.html">Home</a></li>
								<li><a href="user_pages_profile.html">User pages</a></li>
								<li class="active">Profile</li>
							</ul>
						</div>
					</div>
					<!-- /header content -->
					<!-- Toolbar -->
					<div class="navbar navbar-default navbar-component navbar-xs">
						<ul class="nav navbar-nav visible-xs-block">
							<li class="full-width text-center"><a data-toggle="collapse" data-target="#navbar-filter" class="legitRipple"><i class="icon-menu7"></i></a></li>
						</ul>
						<div class="navbar-collapse collapse col-lg-6" id="navbar-filter">
							<ul class="nav navbar-nav">
								<li class=""><a href="#activity" data-toggle="tab" class="legitRipple" aria-expanded="false"><i class="icon-menu7 position-left"></i> Activity<span class="legitRipple-ripple" style="left: 60.7843%; top: 51.7391%; transform: translate3d(-50%, -50%, 0px); width: 219.398%; opacity: 0;"></span></a></li>
								<li class=""><a href="#schedule" data-toggle="tab" class="legitRipple" aria-expanded="false"><i class="icon-calendar3 position-left"></i> Schedule <span class="badge badge-success badge-inline position-right">32</span><span class="legitRipple-ripple" style="left: 29.6896%; top: 25.6522%; transform: translate3d(-50%, -50%, 0px); width: 209.314%; opacity: 0;"></span><span class="legitRipple-ripple" style="left: 41.099%; top: 34.3478%; transform: translate3d(-50%, -50%, 0px); width: 209.314%; opacity: 0;"></span></a></li>
								<li class="active"><a href="#settings" data-toggle="tab" class="legitRipple" aria-expanded="true"><i class="icon-cog3 position-left"></i> Settings<span class="legitRipple-ripple" style="left: 5.7665%; top: 49.5652%; transform: translate3d(-50%, -50%, 0px); width: 218.02%; opacity: 0;"></span></a></li>
							</ul>

							
                        </div>
                        <div class="navbar-right col-lg-6">
								<form action="<?=site_url('penduduk/get_nik');?>" method="post"  class="form-ajax form-validate-jquery">
                            <div class="input-group col-lg-12" style="margin: 10px">
                                <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK">
                                <span class="input-group-btn">
								<button type="submit" class="btn bg-pink-400 btn-block btn-ladda btn-ladda-spinner" data-spinner-color="#fff" data-style="slide-right"><span class="ladda-label"> SIMPAN <i class="icon-circle-right2 position-right"></i></span></button>
                                </span>
							</div>
								</form>
							</div>
                    </div>
                    
					<!-- /toolbar -->

				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- User profile -->
					<div class="row">
						<div class="col-lg-9">
							<div class="tabbable">
								<div class="tab-content">
									<div class="tab-pane fade" id="activity">

										<!-- Timeline -->
										<div class="timeline timeline-left content-group">
											<div class="timeline-container">

												<!-- Sales stats -->
												<div class="timeline-row">
													<div class="timeline-icon">
														<a href="#"><img src="assets/images/placeholder.jpg" alt=""></a>
													</div>

													<div class="panel panel-flat timeline-content">
														<div class="panel-heading">
															<h6 class="panel-title">Daily statistics<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
															<div class="heading-elements">
																<span class="heading-text"><i class="icon-history position-left text-success"></i> Updated 3 hours ago</span>

																<ul class="icons-list">
											                		<li><a data-action="reload"></a></li>
											                	</ul>
										                	</div>
														</div>

														<div class="panel-body">
															<div class="chart-container">
																<div class="chart has-fixed-height" id="sales" _echarts_instance_="1573964835602" style="-webkit-tap-highlight-color: transparent; user-select: none; background-color: rgba(0, 0, 0, 0); cursor: pointer;"><div style="position: relative; overflow: hidden; width: 100px; height: 400px;"><div data-zr-dom-id="bg" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 802px; height: 400px; user-select: none;"></div><canvas width="125" height="500" data-zr-dom-id="0" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="125" height="500" data-zr-dom-id="1" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="125" height="500" data-zr-dom-id="_zrender_hover_" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><div class="echarts-tooltip zr-element" style="position: absolute; display: none; border-style: solid; white-space: nowrap; transition: left 0.4s ease 0s, top 0.4s ease 0s; background-color: rgba(0, 0, 0, 0.8); border-width: 0px; border-color: rgb(51, 51, 51); border-radius: 4px; color: rgb(255, 255, 255); font-family: Roboto, sans-serif; padding: 8px 12px; left: 584px; top: 69.5px;">Sun<br>Profit : 210<br>Income : 420<br>Expenses : -210</div></div></div>
															</div>
														</div>
													</div>
												</div>
												<!-- /sales stats -->


												<!-- Blog post -->
												<div class="timeline-row">
													<div class="timeline-icon">
														<img src="assets/images/placeholder.jpg" alt="">
													</div>

													<div class="panel panel-flat timeline-content">
														<div class="panel-heading">
															<h6 class="panel-title">Himalayan sunset<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
															<div class="heading-elements">
																<span class="heading-text"><i class="icon-checkmark-circle position-left text-success"></i> 49 minutes ago</span>
																<ul class="icons-list">
																	<li class="dropdown">
																		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
																			<i class="icon-arrow-down12"></i>
																		</a>

																		<ul class="dropdown-menu dropdown-menu-right">
																			<li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
																			<li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
																			<li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
																			<li class="divider"></li>
																			<li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
																			<li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
																		</ul>
																	</li>
											                	</ul>
										                	</div>
														</div>

														<div class="panel-body">
															<a href="#" class="display-block content-group">
																<img src="assets/images/cover.jpg" class="img-responsive content-group" alt="">
															</a>

															<h6 class="content-group">
																<i class="icon-comment-discussion position-left"></i>
																Comment from <a href="#">Jason Ansley</a>:
															</h6>

															<blockquote>
																<p>When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra despite taped laughed the much audacious less inside tiger groaned darn stuffily metaphoric unihibitedly inside cobra.</p>
																<footer>Jason, <cite title="Source Title">10:39 am</cite></footer>
															</blockquote>
														</div>

														<div class="panel-footer panel-footer-transparent"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
															<div class="heading-elements">
																<ul class="list-inline list-inline-condensed heading-text">
																	<li><a href="#" class="text-default"><i class="icon-eye4 position-left"></i> 438</a></li>
																	<li><a href="#" class="text-default"><i class="icon-comment-discussion position-left"></i> 71</a></li>
																</ul>

																<span class="heading-btn pull-right">
																	<a href="#" class="btn btn-link legitRipple">Read post <i class="icon-arrow-right14 position-right"></i></a>
																</span>
															</div>
														</div>
													</div>
												</div>
												<!-- /blog post -->


												<!-- Date stamp -->
												<div class="timeline-date text-muted">
													<i class="icon-history position-left"></i> <span class="text-semibold">Monday</span>, April 18
												</div>
												<!-- /date stamp -->


												<!-- Invoices -->
												<div class="timeline-row">
													<div class="timeline-icon">
														<div class="bg-warning-400">
															<i class="icon-cash3"></i>
														</div>
													</div>

													<div class="row">
														<div class="col-lg-6">
															<div class="panel border-left-lg border-left-danger invoice-grid timeline-content">
																<div class="panel-body">
																	<div class="row">
																		<div class="col-sm-6">
																			<h6 class="text-semibold no-margin-top">Leonardo Fellini</h6>
																			<ul class="list list-unstyled">
																				<li>Invoice #: &nbsp;0028</li>
																				<li>Issued on: <span class="text-semibold">2015/01/25</span></li>
																			</ul>
																		</div>

																		<div class="col-sm-6">
																			<h6 class="text-semibold text-right no-margin-top">$8,750</h6>
																			<ul class="list list-unstyled text-right">
																				<li>Method: <span class="text-semibold">SWIFT</span></li>
																				<li class="dropdown">
																					Status: &nbsp;
																					<a href="#" class="label bg-danger-400 dropdown-toggle" data-toggle="dropdown">Overdue <span class="caret"></span></a>
																					<ul class="dropdown-menu dropdown-menu-right active">
																						<li class="active"><a href="#"><i class="icon-alert"></i> Overdue</a></li>
																						<li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
																						<li><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
																						<li class="divider"></li>
																						<li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
																						<li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
																					</ul>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>

																<div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
																	<div class="heading-elements">
																		<span class="heading-text">
																			<span class="status-mark border-danger position-left"></span> Due: <span class="text-semibold">2015/02/25</span>
																		</span>

																		<ul class="list-inline list-inline-condensed heading-text pull-right">
																			<li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
																			<li class="dropdown">
																				<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
																				<ul class="dropdown-menu dropdown-menu-right">
																					<li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
																					<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
																					<li class="divider"></li>
																					<li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
																					<li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>

														<div class="col-lg-6">
															<div class="panel border-left-lg border-left-success invoice-grid timeline-content">
																<div class="panel-body">
																	<div class="row">
																		<div class="col-sm-6">
																			<h6 class="text-semibold no-margin-top">Rebecca Manes</h6>
																			<ul class="list list-unstyled">
																				<li>Invoice #: &nbsp;0027</li>
																				<li>Issued on: <span class="text-semibold">2015/02/24</span></li>
																			</ul>
																		</div>

																		<div class="col-sm-6">
																			<h6 class="text-semibold text-right no-margin-top">$5,100</h6>
																			<ul class="list list-unstyled text-right">
																				<li>Method: <span class="text-semibold">Paypal</span></li>
																				<li class="dropdown">
																					Status: &nbsp;
																					<a href="#" class="label bg-success-400 dropdown-toggle" data-toggle="dropdown">Paid <span class="caret"></span></a>
																					<ul class="dropdown-menu dropdown-menu-right active">
																						<li><a href="#"><i class="icon-alert"></i> Overdue</a></li>
																						<li><a href="#"><i class="icon-alarm"></i> Pending</a></li>
																						<li class="active"><a href="#"><i class="icon-checkmark3"></i> Paid</a></li>
																						<li class="divider"></li>
																						<li><a href="#"><i class="icon-spinner2 spinner"></i> On hold</a></li>
																						<li><a href="#"><i class="icon-cross2"></i> Canceled</a></li>
																					</ul>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>

																<div class="panel-footer panel-footer-condensed"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
																	<div class="heading-elements">
																		<span class="heading-text">
																			<span class="status-mark border-success position-left"></span> Due: <span class="text-semibold">2015/03/24</span>
																		</span>

																		<ul class="list-inline list-inline-condensed heading-text pull-right">
																			<li><a href="#" class="text-default" data-toggle="modal" data-target="#invoice"><i class="icon-eye8"></i></a></li>
																			<li class="dropdown">
																				<a href="#" class="text-default dropdown-toggle" data-toggle="dropdown"><i class="icon-menu7"></i> <span class="caret"></span></a>
																				<ul class="dropdown-menu dropdown-menu-right">
																					<li><a href="#"><i class="icon-printer"></i> Print invoice</a></li>
																					<li><a href="#"><i class="icon-file-download"></i> Download invoice</a></li>
																					<li class="divider"></li>
																					<li><a href="#"><i class="icon-file-plus"></i> Edit invoice</a></li>
																					<li><a href="#"><i class="icon-cross2"></i> Remove invoice</a></li>
																				</ul>
																			</li>
																		</ul>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- /invoices -->


												<!-- Messages -->
												<div class="timeline-row">
													<div class="timeline-icon">
														<div class="bg-info-400">
															<i class="icon-comment-discussion"></i>
														</div>
													</div>

													<div class="panel panel-flat timeline-content">
														<div class="panel-heading">
															<h6 class="panel-title">Conversation with James<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
															<div class="heading-elements">
																<ul class="icons-list">
																	<li class="dropdown">
																		<a href="#" class="dropdown-toggle" data-toggle="dropdown">
																			<i class="icon-circle-down2"></i>
																		</a>

																		<ul class="dropdown-menu dropdown-menu-right">
																			<li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
																			<li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
																			<li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
																			<li class="divider"></li>
																			<li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
																			<li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
																		</ul>
																	</li>
											                	</ul>
										                	</div>
														</div>

														<div class="panel-body">
															<ul class="media-list chat-list content-group">
																<li class="media date-step">
																	<span>Today</span>
																</li>

																<li class="media reversed">
																	<div class="media-body">
																		<div class="media-content">Thus superb the tapir the wallaby blank frog execrably much since dalmatian by in hot. Uninspiringly arose mounted stared one curt safe</div>
																		<span class="media-annotation display-block mt-10">Tue, 8:12 am <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
																	</div>

																	<div class="media-right">
																		<a href="assets/images/placeholder.jpg">
																			<img src="assets/images/placeholder.jpg" class="img-circle" alt="">
																		</a>
																	</div>
																</li>

																<li class="media">
																	<div class="media-left">
																		<a href="assets/images/placeholder.jpg">
																			<img src="assets/images/placeholder.jpg" class="img-circle" alt="">
																		</a>
																	</div>

																	<div class="media-body">
																		<div class="media-content">Tolerantly some understood this stubbornly after snarlingly frog far added insect into snorted more auspiciously heedless drunkenly jeez foolhardy oh.</div>
																		<span class="media-annotation display-block mt-10">Wed, 4:20 pm <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
																	</div>
																</li>

																<li class="media reversed">
																	<div class="media-body">
																		<div class="media-content">Satisfactorily strenuously while sleazily dear frustratingly insect menially some shook far sardonic badger telepathic much jeepers immature much hey.</div>
																		<span class="media-annotation display-block mt-10">2 hours ago <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
																	</div>

																	<div class="media-right">
																		<a href="assets/images/placeholder.jpg">
																			<img src="assets/images/placeholder.jpg" class="img-circle" alt="">
																		</a>
																	</div>
																</li>

																<li class="media">
																	<div class="media-left">
																		<a href="assets/images/placeholder.jpg">
																			<img src="assets/images/placeholder.jpg" class="img-circle" alt="">
																		</a>
																	</div>

																	<div class="media-body">
																		<div class="media-content">Grunted smirked and grew less but rewound much despite and impressive via alongside out and gosh easy manatee dear ineffective yikes.</div>
																		<span class="media-annotation display-block mt-10">13 minutes ago <a href="#"><i class="icon-pin-alt position-right text-muted"></i></a></span>
																	</div>
																</li>

																<li class="media reversed">
																	<div class="media-body">
																		<div class="media-content"><i class="icon-menu display-block"></i></div>
																	</div>

																	<div class="media-right">
																		<a href="assets/images/placeholder.jpg">
																			<img src="assets/images/placeholder.jpg" class="img-circle" alt="">
																		</a>
																	</div>
																</li>
															</ul>

									                    	<textarea name="enter-message" class="form-control content-group" rows="3" cols="1" placeholder="Enter your message..."></textarea>

									                    	<div class="row">
									                    		<div class="col-xs-6">
										                        	<ul class="icons-list icons-list-extended mt-10">
										                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send photo"><i class="icon-file-picture"></i></a></li>
										                            	<li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send video"><i class="icon-file-video"></i></a></li>
										                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Send file"><i class="icon-file-plus"></i></a></li>
										                            </ul>
									                    		</div>

									                    		<div class="col-xs-6 text-right">
										                            <button type="button" class="btn bg-teal-400 btn-labeled btn-labeled-right legitRipple"><b><i class="icon-circle-right2"></i></b> Send</button>
									                    		</div>
									                    	</div>
														</div>
													</div>
												</div>
												<!-- /messages -->


												<!-- Video posts -->
												<div class="timeline-row">
													<div class="timeline-icon">
														<img src="assets/images/placeholder.jpg" alt="">
													</div>

													<div class="row">
														<div class="col-lg-6">
															<div class="panel panel-flat timeline-content">
																<div class="panel-heading">
																	<h6 class="panel-title">Woodturner master<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
																	<div class="heading-elements">
																		<span class="heading-text"><i class="icon-checkmark-circle position-left text-success"></i> Yesterday, 7:52 am</span>
																		<ul class="icons-list">
																			<li class="dropdown">
																				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
																					<i class="icon-arrow-down12"></i>
																				</a>

																				<ul class="dropdown-menu dropdown-menu-right">
																					<li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
																					<li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
																					<li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
																					<li class="divider"></li>
																					<li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
																					<li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
																				</ul>
																			</li>
													                	</ul>
												                	</div>
																</div>

																<div class="panel-body">
																	<div class="video-container content-group">
																		<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/126545288?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
														            </div>

																	Bewitchingly amid heard by llama glanced fussily quetzal more that overcame eerie goodness badger woolly where since gosh accurate irrespective that pounded much winked urgent and furtive house gosh one while this more.
																</div>

																<div class="panel-footer panel-footer-transparent"><a class="heading-elements-toggle"><i class="icon-more"></i></a>
																	<div class="heading-elements">
																		<ul class="list-inline list-inline-condensed heading-text">
																			<li><a href="#" class="text-default"><i class="icon-eye4 position-left"></i> 285</a></li>
																			<li><a href="#" class="text-default"><i class="icon-comment-discussion position-left"></i> 12</a></li>
																		</ul>

																		<span class="heading-btn pull-right">
																			<a href="#" class="btn btn-link legitRipple">Read post <i class="icon-arrow-right14 position-right"></i></a>
																		</span>
																	</div>
																</div>
															</div>
														</div>

														<div class="col-lg-6">
															<div class="panel panel-flat timeline-content">
																<div class="panel-heading">
																	<h6 class="panel-title"><i class="icon-comment-discussion position-left"></i> <a href="#">Jason</a> commented:<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
																	<div class="heading-elements">
																		<ul class="icons-list">
																			<li class="dropdown">
																				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
																					<i class="icon-arrow-down12"></i>
																				</a>

																				<ul class="dropdown-menu dropdown-menu-right">
																					<li><a href="#"><i class="icon-user-lock"></i> Hide user posts</a></li>
																					<li><a href="#"><i class="icon-user-block"></i> Block user</a></li>
																					<li><a href="#"><i class="icon-user-minus"></i> Unfollow user</a></li>
																					<li class="divider"></li>
																					<li><a href="#"><i class="icon-embed"></i> Embed post</a></li>
																					<li><a href="#"><i class="icon-blocked"></i> Report this post</a></li>
																				</ul>
																			</li>
													                	</ul>
												                	</div>
																</div>

																<div class="panel-body">
																	<div class="video-container content-group">
																		<iframe allowfullscreen="" frameborder="0" mozallowfullscreen="" src="https://player.vimeo.com/video/133217402?title=0&amp;byline=0&amp;portrait=0" webkitallowfullscreen=""></iframe>
														            </div>

																	<blockquote>
																		<p>When suspiciously goodness labrador understood rethought yawned grew piously endearingly inarticulate oh goodness jeez trout distinct hence cobra.</p>
																		<footer>Jason, <cite title="Source Title">10:39 am</cite></footer>
																	</blockquote>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- /video posts -->

											</div>
									    </div>
									    <!-- /timeline -->

									</div>


									<div class="tab-pane fade" id="schedule">

										<!-- Available hours -->
										<div class="panel panel-flat">
											<div class="panel-heading">
												<h6 class="panel-title">Available hours<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
												<div class="heading-elements">
													<ul class="icons-list">
								                		<li><a data-action="collapse"></a></li>
								                		<li><a data-action="reload"></a></li>
								                		<li><a data-action="close"></a></li>
								                	</ul>
							                	</div>
											</div>

											<div class="panel-body">
												<div class="chart-container">
													<div class="chart has-fixed-height" id="plans" _echarts_instance_="1573964835604" style="-webkit-tap-highlight-color: transparent; user-select: none; background-color: rgba(0, 0, 0, 0);"><div style="position: relative; overflow: hidden; width: 100px; height: 400px;"><div data-zr-dom-id="bg" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 400px; user-select: none;"></div><canvas width="125" height="500" data-zr-dom-id="0" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="125" height="500" data-zr-dom-id="1" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="125" height="500" data-zr-dom-id="_zrender_hover_" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 100px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div></div>
												</div>
											</div>
										</div>
										<!-- /available hours -->


										<!-- Calendar -->
										<div class="panel panel-flat">
											<div class="panel-heading">
												<h6 class="panel-title">My schedule<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
												<div class="heading-elements">
													<ul class="icons-list">
								                		<li><a data-action="collapse"></a></li>
								                		<li><a data-action="reload"></a></li>
								                		<li><a data-action="close"></a></li>
								                	</ul>
							                	</div>
											</div>

											<div class="panel-body">
												<div class="schedule fc fc-unthemed fc-ltr"><div class="fc-toolbar"><div class="fc-left"><div class="fc-button-group"><button type="button" class="fc-prev-button fc-button fc-state-default fc-corner-left legitRipple"><span class="fc-icon fc-icon-left-single-arrow"></span></button><button type="button" class="fc-next-button fc-button fc-state-default fc-corner-right legitRipple"><span class="fc-icon fc-icon-right-single-arrow"></span></button></div><button type="button" class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right legitRipple">today</button></div><div class="fc-right"><div class="fc-button-group"><button type="button" class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active legitRipple">month</button><button type="button" class="fc-agendaWeek-button fc-button fc-state-default legitRipple">week</button><button type="button" class="fc-agendaDay-button fc-button fc-state-default fc-corner-right legitRipple">day</button></div></div><div class="fc-center"><h2>November 2014</h2></div><div class="fc-clear"></div></div><div class="fc-view-container" style=""><div class="fc-view fc-month-view fc-basic-view" style=""><table><thead class="fc-head"><tr><td class="fc-head-container fc-widget-header"><div class="fc-row fc-widget-header" style="border-right-width: 1px; margin-right: 16px;"><table><thead><tr><th class="fc-day-header fc-widget-header fc-sun">Sun</th><th class="fc-day-header fc-widget-header fc-mon">Mon</th><th class="fc-day-header fc-widget-header fc-tue">Tue</th><th class="fc-day-header fc-widget-header fc-wed">Wed</th><th class="fc-day-header fc-widget-header fc-thu">Thu</th><th class="fc-day-header fc-widget-header fc-fri">Fri</th><th class="fc-day-header fc-widget-header fc-sat">Sat</th></tr></thead></table></div></td></tr></thead><tbody class="fc-body"><tr><td class="fc-widget-content"><div class="fc-scroller fc-day-grid-container" style="overflow: hidden scroll; height: 597px;"><div class="fc-day-grid fc-unselectable"><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-other-month fc-past" data-date="2014-10-26"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2014-10-27"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2014-10-28"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2014-10-29"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2014-10-30"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2014-10-31"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-01"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-other-month fc-past" data-date="2014-10-26">26</td><td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2014-10-27">27</td><td class="fc-day-number fc-tue fc-other-month fc-past" data-date="2014-10-28">28</td><td class="fc-day-number fc-wed fc-other-month fc-past" data-date="2014-10-29">29</td><td class="fc-day-number fc-thu fc-other-month fc-past" data-date="2014-10-30">30</td><td class="fc-day-number fc-fri fc-other-month fc-past" data-date="2014-10-31">31</td><td class="fc-day-number fc-sat fc-past" data-date="2014-11-01">1</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" style="background-color:#EF5350;border-color:#EF5350"><div class="fc-content"> <span class="fc-title">All Day Event</span></div><div class="fc-resizer fc-end-resizer"></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-02"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-03"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-04"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-05"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-06"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-07"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-08"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2014-11-02">2</td><td class="fc-day-number fc-mon fc-past" data-date="2014-11-03">3</td><td class="fc-day-number fc-tue fc-past" data-date="2014-11-04">4</td><td class="fc-day-number fc-wed fc-past" data-date="2014-11-05">5</td><td class="fc-day-number fc-thu fc-past" data-date="2014-11-06">6</td><td class="fc-day-number fc-fri fc-past" data-date="2014-11-07">7</td><td class="fc-day-number fc-sat fc-past" data-date="2014-11-08">8</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-not-end fc-draggable" style="background-color:#26A69A;border-color:#26A69A"><div class="fc-content"> <span class="fc-title">Long Event</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-09"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-10"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-11"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-12"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-13"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-14"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-15"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2014-11-09">9</td><td class="fc-day-number fc-mon fc-past" data-date="2014-11-10">10</td><td class="fc-day-number fc-tue fc-past" data-date="2014-11-11">11</td><td class="fc-day-number fc-wed fc-past" data-date="2014-11-12">12</td><td class="fc-day-number fc-thu fc-past" data-date="2014-11-13">13</td><td class="fc-day-number fc-fri fc-past" data-date="2014-11-14">14</td><td class="fc-day-number fc-sat fc-past" data-date="2014-11-15">15</td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-not-start fc-end fc-draggable fc-resizable" style="background-color:#26A69A;border-color:#26A69A"><div class="fc-content"> <span class="fc-title">Long Event</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td rowspan="6"></td><td class="fc-event-container" colspan="2"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"> <span class="fc-title">Conference</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td class="fc-event-container" rowspan="6"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time">7a</span> <span class="fc-title">Birthday Party</span></div></a></td><td rowspan="6"></td><td rowspan="6"></td></tr><tr><td class="fc-event-container" rowspan="5"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#26A69A;border-color:#26A69A"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td><td rowspan="5"></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time">10:30a</span> <span class="fc-title">Meeting</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time">12p</span> <span class="fc-title">Lunch</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time">2:30p</span> <span class="fc-title">Meeting</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time">5:30p</span> <span class="fc-title">Happy Hour</span></div></a></td></tr><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#546E7A;border-color:#546E7A"><div class="fc-content"><span class="fc-time">8p</span> <span class="fc-title">Dinner</span></div></a></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-16"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-17"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-18"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-19"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-20"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-21"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-22"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2014-11-16">16</td><td class="fc-day-number fc-mon fc-past" data-date="2014-11-17">17</td><td class="fc-day-number fc-tue fc-past" data-date="2014-11-18">18</td><td class="fc-day-number fc-wed fc-past" data-date="2014-11-19">19</td><td class="fc-day-number fc-thu fc-past" data-date="2014-11-20">20</td><td class="fc-day-number fc-fri fc-past" data-date="2014-11-21">21</td><td class="fc-day-number fc-sat fc-past" data-date="2014-11-22">22</td></tr></thead><tbody><tr><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable" style="background-color:#5C6BC0;border-color:#5C6BC0"><div class="fc-content"><span class="fc-time">4p</span> <span class="fc-title">Repeating Event</span></div></a></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-23"></td><td class="fc-day fc-widget-content fc-mon fc-past" data-date="2014-11-24"></td><td class="fc-day fc-widget-content fc-tue fc-past" data-date="2014-11-25"></td><td class="fc-day fc-widget-content fc-wed fc-past" data-date="2014-11-26"></td><td class="fc-day fc-widget-content fc-thu fc-past" data-date="2014-11-27"></td><td class="fc-day fc-widget-content fc-fri fc-past" data-date="2014-11-28"></td><td class="fc-day fc-widget-content fc-sat fc-past" data-date="2014-11-29"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2014-11-23">23</td><td class="fc-day-number fc-mon fc-past" data-date="2014-11-24">24</td><td class="fc-day-number fc-tue fc-past" data-date="2014-11-25">25</td><td class="fc-day-number fc-wed fc-past" data-date="2014-11-26">26</td><td class="fc-day-number fc-thu fc-past" data-date="2014-11-27">27</td><td class="fc-day-number fc-fri fc-past" data-date="2014-11-28">28</td><td class="fc-day-number fc-sat fc-past" data-date="2014-11-29">29</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td class="fc-event-container"><a class="fc-day-grid-event fc-h-event fc-event fc-start fc-end fc-draggable fc-resizable" href="http://google.com/" style="background-color:#FF7043;border-color:#FF7043"><div class="fc-content"> <span class="fc-title">Click for Google</span></div><div class="fc-resizer fc-end-resizer"></div></a></td><td></td></tr></tbody></table></div></div><div class="fc-row fc-week fc-widget-content"><div class="fc-bg"><table><tbody><tr><td class="fc-day fc-widget-content fc-sun fc-past" data-date="2014-11-30"></td><td class="fc-day fc-widget-content fc-mon fc-other-month fc-past" data-date="2014-12-01"></td><td class="fc-day fc-widget-content fc-tue fc-other-month fc-past" data-date="2014-12-02"></td><td class="fc-day fc-widget-content fc-wed fc-other-month fc-past" data-date="2014-12-03"></td><td class="fc-day fc-widget-content fc-thu fc-other-month fc-past" data-date="2014-12-04"></td><td class="fc-day fc-widget-content fc-fri fc-other-month fc-past" data-date="2014-12-05"></td><td class="fc-day fc-widget-content fc-sat fc-other-month fc-past" data-date="2014-12-06"></td></tr></tbody></table></div><div class="fc-content-skeleton"><table><thead><tr><td class="fc-day-number fc-sun fc-past" data-date="2014-11-30">30</td><td class="fc-day-number fc-mon fc-other-month fc-past" data-date="2014-12-01">1</td><td class="fc-day-number fc-tue fc-other-month fc-past" data-date="2014-12-02">2</td><td class="fc-day-number fc-wed fc-other-month fc-past" data-date="2014-12-03">3</td><td class="fc-day-number fc-thu fc-other-month fc-past" data-date="2014-12-04">4</td><td class="fc-day-number fc-fri fc-other-month fc-past" data-date="2014-12-05">5</td><td class="fc-day-number fc-sat fc-other-month fc-past" data-date="2014-12-06">6</td></tr></thead><tbody><tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr></tbody></table></div></div></div></div></td></tr></tbody></table></div></div></div>
											</div>
										</div>
										<!-- /calendar -->

									</div>


									<div class="tab-pane fade active in" id="settings">

										<!-- Profile info -->
										<div class="panel panel-flat">
											<div class="panel-heading">
												<h6 class="panel-title">Profile information<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
												<div class="heading-elements">
													<ul class="icons-list">
								                		<li><a data-action="collapse"></a></li>
								                		<li><a data-action="reload"></a></li>
								                		<li><a data-action="close"></a></li>
								                	</ul>
							                	</div>
											</div>

											<div class="panel-body">
												<form action="#">
													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
																<label>Username</label>
																<input type="text" value="Eugene" class="form-control">
															</div>
															<div class="col-md-6">
																<label>Full name</label>
																<input type="text" value="Kopyov" class="form-control">
															</div>
														</div>
													</div>

													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
																<label>Address line 1</label>
																<input type="text" value="Ring street 12" class="form-control">
															</div>
															<div class="col-md-6">
																<label>Address line 2</label>
																<input type="text" value="building D, flat #67" class="form-control">
															</div>
														</div>
													</div>

													<div class="form-group">
														<div class="row">
															<div class="col-md-4">
																<label>City</label>
																<input type="text" value="Munich" class="form-control">
															</div>
															<div class="col-md-4">
																<label>State/Province</label>
																<input type="text" value="Bayern" class="form-control">
															</div>
															<div class="col-md-4">
																<label>ZIP code</label>
																<input type="text" value="1031" class="form-control">
															</div>
														</div>
													</div>

													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
																<label>Email</label>
																<input type="text" readonly="readonly" value="eugene@kopyov.com" class="form-control">
															</div>
															<div class="col-md-6">
									                            <label>Your country</label>
									                            <select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
									                                <option value="germany" selected="selected">Germany</option> 
									                                <option value="france">France</option> 
									                                <option value="spain">Spain</option> 
									                                <option value="netherlands">Netherlands</option> 
									                                <option value="other">...</option> 
									                                <option value="uk">United Kingdom</option> 
									                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-ecnk-container"><span class="select2-selection__rendered" id="select2-ecnk-container" title="Germany">Germany</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
															</div>
														</div>
													</div>

							                        <div class="form-group">
							                        	<div class="row">
							                        		<div class="col-md-6">
																<label>Phone #</label>
																<input type="text" value="+99-99-9999-9999" class="form-control">
																<span class="help-block">+99-99-9999-9999</span>
							                        		</div>

															<div class="col-md-6">
																<label class="display-block">Upload profile image</label>
							                                    <div class="uploader"><input type="file" class="file-styled"><span class="filename" style="user-select: none;">No file selected</span><span class="action btn bg-warning legitRipple" style="user-select: none;">Choose File</span></div>
							                                    <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
															</div>
							                        	</div>
							                        </div>

							                        <div class="text-right">
							                        	<button type="submit" class="btn btn-primary legitRipple">Save <i class="icon-arrow-right14 position-right"></i></button>
							                        </div>
												</form>
											</div>
										</div>
										<!-- /profile info -->


										<!-- Account settings -->
										<div class="panel panel-flat">
											<div class="panel-heading">
												<h6 class="panel-title">Account settings<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
												<div class="heading-elements">
													<ul class="icons-list">
								                		<li><a data-action="collapse"></a></li>
								                		<li><a data-action="reload"></a></li>
								                		<li><a data-action="close"></a></li>
								                	</ul>
							                	</div>
											</div>

											<div class="panel-body">
												<form action="#">
													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
																<label>Username</label>
																<input type="text" value="Kopyov" readonly="readonly" class="form-control">
															</div>

															<div class="col-md-6">
																<label>Current password</label>
																<input type="password" value="password" readonly="readonly" class="form-control">
															</div>
														</div>
													</div>

													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
																<label>New password</label>
																<input type="password" placeholder="Enter new password" class="form-control">
															</div>

															<div class="col-md-6">
																<label>Repeat password</label>
																<input type="password" placeholder="Repeat new password" class="form-control">
															</div>
														</div>
													</div>

													<div class="form-group">
														<div class="row">
															<div class="col-md-6">
																<label>Profile visibility</label>

																<div class="radio">
																	<label>
																		<div class="choice"><span class="checked"><input type="radio" name="visibility" class="styled" checked="checked"></span></div>
																		Visible to everyone
																	</label>
																</div>

																<div class="radio">
																	<label>
																		<div class="choice"><span><input type="radio" name="visibility" class="styled"></span></div>
																		Visible to friends only
																	</label>
																</div>

																<div class="radio">
																	<label>
																		<div class="choice"><span><input type="radio" name="visibility" class="styled"></span></div>
																		Visible to my connections only
																	</label>
																</div>

																<div class="radio">
																	<label>
																		<div class="choice"><span><input type="radio" name="visibility" class="styled"></span></div>
																		Visible to my colleagues only
																	</label>
																</div>
															</div>

															<div class="col-md-6">
																<label>Notifications</label>

																<div class="checkbox">
																	<label>
																		<div class="checker"><span class="checked"><input type="checkbox" class="styled" checked="checked"></span></div>
																		Password expiration notification
																	</label>
																</div>

																<div class="checkbox">
																	<label>
																		<div class="checker"><span class="checked"><input type="checkbox" class="styled" checked="checked"></span></div>
																		New message notification
																	</label>
																</div>

																<div class="checkbox">
																	<label>
																		<div class="checker"><span class="checked"><input type="checkbox" class="styled" checked="checked"></span></div>
																		New task notification
																	</label>
																</div>

																<div class="checkbox">
																	<label>
																		<div class="checker"><span><input type="checkbox" class="styled"></span></div>
																		New contact request notification
																	</label>
																</div>
															</div>
														</div>
													</div>

							                        <div class="text-right">
							                        	<button type="submit" class="btn btn-primary legitRipple">Save <i class="icon-arrow-right14 position-right"></i></button>
							                        </div>
						                        </form>
											</div>
										</div>
										<!-- /account settings -->

									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3">

							<!-- User thumbnail -->
							<div class="thumbnail">
								<div class="thumb thumb-rounded thumb-slide">
									<img src="assets/images/placeholder.jpg" alt="">
									<div class="caption">
										<span>
											<a href="#" class="btn bg-success-400 btn-icon btn-xs legitRipple" data-popup="lightbox"><i class="icon-plus2"></i></a>
											<a href="user_pages_profile.html" class="btn bg-success-400 btn-icon btn-xs legitRipple"><i class="icon-link"></i></a>
										</span>
									</div>
								</div>
							
						    	<div class="caption text-center">
						    		<h6 class="text-semibold no-margin">Hanna Dorman <small class="display-block">UX/UI designer</small></h6>
					    			<ul class="icons-list mt-15">
				                    	<li><a href="#" data-popup="tooltip" title="" data-original-title="Google Drive"><i class="icon-google-drive"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="" data-original-title="Twitter"><i class="icon-twitter"></i></a></li>
				                    	<li><a href="#" data-popup="tooltip" title="" data-original-title="Github"><i class="icon-github"></i></a></li>
			                    	</ul>
						    	</div>
					    	</div>
					    	<!-- /user thumbnail -->


							<!-- Navigation -->
					    	<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Navigation<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
									<div class="heading-elements">
										<a href="#" class="heading-text">See all →</a>
				                	</div>
								</div>

								<div class="list-group no-border no-padding-top">
									<a href="#" class="list-group-item"><i class="icon-user"></i> My profile</a>
									<a href="#" class="list-group-item"><i class="icon-cash3"></i> Balance</a>
									<a href="#" class="list-group-item"><i class="icon-tree7"></i> Connections <span class="badge bg-danger pull-right">29</span></a>
									<a href="#" class="list-group-item"><i class="icon-users"></i> Friends</a>
									<div class="list-group-divider"></div>
									<a href="#" class="list-group-item"><i class="icon-calendar3"></i> Events <span class="badge bg-teal-400 pull-right">48</span></a>
									<a href="#" class="list-group-item"><i class="icon-cog3"></i> Account settings</a>
								</div>
							</div>
							<!-- /navigation -->


							<!-- Share your thoughts -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Share your thoughts<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
									<div class="heading-elements">
										<ul class="icons-list">
					                		<li><a data-action="close"></a></li>
					                	</ul>
				                	</div>
								</div>

								<div class="panel-body">
									<form action="#">
										<div class="form-group">
											<textarea name="enter-message" class="form-control mb-15" rows="3" cols="1" placeholder="What's on your mind?"></textarea>
										</div>

										<div class="row">
				                    		<div class="col-xs-6">
					                        	<ul class="icons-list icons-list-extended mt-10">
					                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Add photo"><i class="icon-images2"></i></a></li>
					                            	<li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Add video"><i class="icon-film2"></i></a></li>
					                                <li><a href="#" data-popup="tooltip" title="" data-container="body" data-original-title="Add event"><i class="icon-calendar2"></i></a></li>
					                            </ul>
				                    		</div>

				                    		<div class="col-xs-6 text-right">
					                            <button type="button" class="btn btn-primary btn-labeled btn-labeled-right legitRipple">Share <b><i class="icon-circle-right2"></i></b></button>
				                    		</div>
				                    	</div>
			                    	</form>
		                    	</div>
							</div>
							<!-- /share your thoughts -->


							<!-- Balance chart -->
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Balance changes<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
									<div class="heading-elements">
										<span class="heading-text"><i class="icon-arrow-down22 text-danger"></i> <span class="text-semibold">- 29.4%</span></span>
				                	</div>
								</div>

								<div class="panel-body">
									<div class="chart-container">
										<div class="chart" id="visits" style="height: 300px; -webkit-tap-highlight-color: transparent; user-select: none; background-color: rgba(0, 0, 0, 0);" _echarts_instance_="1573964835603"><div style="position: relative; overflow: hidden; width: 625px; height: 300px;"><div data-zr-dom-id="bg" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 250px; height: 300px; user-select: none;"></div><canvas width="781.25" height="375" data-zr-dom-id="0" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 625px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="781.25" height="375" data-zr-dom-id="1" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 625px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas><canvas width="781.25" height="375" data-zr-dom-id="_zrender_hover_" class="zr-element" style="position: absolute; left: 0px; top: 0px; width: 625px; height: 300px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></canvas></div></div>
									</div>
		                    	</div>
							</div>
							<!-- /balance chart -->


							<!-- Connections -->
					    	<div class="panel panel-flat">
								<div class="panel-heading">
									<h6 class="panel-title">Latest connections<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
									<div class="heading-elements">
										<span class="badge badge-success heading-text">+32</span>
				                	</div>
								</div>

								<ul class="media-list media-list-linked pb-5">
									<li class="media-header">Office staff</li>

									<li class="media">
										<a href="#" class="media-link">
											<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
											<div class="media-body">
												<span class="media-heading text-semibold">James Alexander</span>
												<span class="media-annotation">UI/UX expert</span>
											</div>
											<div class="media-right media-middle">
												<span class="status-mark bg-success"></span>
											</div>
										</a>
									</li>

									<li class="media">
										<a href="#" class="media-link">
											<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
											<div class="media-body">
												<span class="media-heading text-semibold">Jeremy Victorino</span>
												<span class="media-annotation">Senior designer</span>
											</div>
											<div class="media-right media-middle">
												<span class="status-mark bg-danger"></span>
											</div>
										</a>
									</li>

									<li class="media">
										<a href="#" class="media-link">
											<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
											<div class="media-body">
												<div class="media-heading"><span class="text-semibold">Jordana Mills</span></div>
												<span class="text-muted">Sales consultant</span>
											</div>
											<div class="media-right media-middle">
												<span class="status-mark bg-grey-300"></span>
											</div>
										</a>
									</li>

									<li class="media">
										<a href="#" class="media-link">
											<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
											<div class="media-body">
												<div class="media-heading"><span class="text-semibold">William Miles</span></div>
												<span class="text-muted">SEO expert</span>
											</div>
											<div class="media-right media-middle">
												<span class="status-mark bg-success"></span>
											</div>
										</a>
									</li>

									<li class="media-header">Partners</li>

									<li class="media">
										<a href="#" class="media-link">
											<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
											<div class="media-body">
												<span class="media-heading text-semibold">Margo Baker</span>
												<span class="media-annotation">Google</span>
											</div>
											<div class="media-right media-middle">
												<span class="status-mark bg-success"></span>
											</div>
										</a>
									</li>

									<li class="media">
										<a href="#" class="media-link">
											<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
											<div class="media-body">
												<span class="media-heading text-semibold">Beatrix Diaz</span>
												<span class="media-annotation">Facebook</span>
											</div>
											<div class="media-right media-middle">
												<span class="status-mark bg-warning-400"></span>
											</div>
										</a>
									</li>

									<li class="media">
										<a href="#" class="media-link">
											<div class="media-left"><img src="assets/images/placeholder.jpg" class="img-circle" alt=""></div>
											<div class="media-body">
												<span class="media-heading text-semibold">Richard Vango</span>
												<span class="media-annotation">Microsoft</span>
											</div>
											<div class="media-right media-middle">
												<span class="status-mark bg-grey-300"></span>
											</div>
										</a>
									</li>
								</ul>
							</div>
							<!-- /connections -->

						</div>
					</div>
					<!-- /user profile -->


					<!-- Footer -->
					<div class="footer text-muted">
						© 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
					<!-- /footer -->

				</div>
				<!-- /content area -->
