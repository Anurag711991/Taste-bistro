<?php include 'header.php'; ?>
			<div class="page_section_offset">
				<main class="container">
					
					<div class="portfolio_isotope_container three_columns wrapper m_bottom_10 m_xs_bottom_0" data-isotope-options='{
						"itemSelector": ".portfolio_isotope_item",
			  			"layoutMode": "masonry",
			  			"masonry" : {
			  				"columnWidth" : ".portfolio_isotope_item",
			  				"gutter" : 0
			  			}
					}'>
					<?php
						$cat=$_REQUEST['cat'];
						$image=mysql_query("SELECT * FROM `image_master` WHERE `im_cat`='".$cat."' order by im_id DESC");
						while($img=mysql_fetch_array($image))
						{
					?>
						<div class="portfolio_isotope_item masonry living_room">
							<div class="frame_container relative r_image_container db_xs_centered">
								<figure class="relative">
									<div class="d_block wrapper scale_image_container popup_container relative">
										<img src="<?php echo $img['im_path']; ?>" alt="" class="tr_all scale_image">
										<div class="item_title_container t_align_c">
											<div class="item_title tr_all">
												<h5 class="second_font m_bottom_5 lh_small"><a href="#" class="color_lbrown color_white_hover"><b><?php echo $img['im_title']; ?></b></a></h5>
												<div class="m_bottom_15 m_sm_bottom_10"><a class="fw_light color_white d_inline_b color_lbrown_hover d_sm_none d_xs_inline_b"><?php echo $img['im_desc']; ?></a></div>
												<ul class="open_buttons_container relative hr_list in_masonry d_inline_b">
													<li class="m_right_5 tr_all"><a href="<?php echo $img['im_path']; ?>" class="button_type_6 vc_child d_block t_align_c border_white tr_delay jackbox" data-group="lightbox" data-title="Title 1"><i class="fa fa-plus d_inline_m"></i></a></li>
													<!--<li class="m_right_5 tr_all"><a href="#" class="button_type_6 vc_child d_block t_align_c border_white tr_delay"><i class="fa fa-link d_inline_m"></i></a></li>-->
												</ul>
											</div>
										</div>
									</div>
								</figure>
							</div>
						</div>
					<?php
						}
					?>
					</div>
				</main>
			</div>
<?php include 'footer.php'; ?>