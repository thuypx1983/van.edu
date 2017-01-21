<!--footer-->
<footer>


<!--<div class="col-lg-2 col-md-6 col-sm-4 col-xs-6">
<h3>Văn hay</h3>
        <ul>
		<li><a href="/tag/van-ke-chuyen
" title ="Văn kể chuyện">Văn kể chuyện</a></li>

		<li><a href="/tag/van-phan-tich
" title ="Văn phân tích">Văn phân tích</a></li>

        </ul>
	</div>
	<div class="col-lg-2 col-md-6 col-sm-4 col-xs-6">

		<h3>Văn chọn lọc</h3>
        <ul>
        	<li><a href="/tag/van-mieu-ta
" title ="Văn miêu tả">Văn miêu tả</a></li>

<li><a href="/tag/van-thuyet-minh
" title ="Văn thuyết minh">Văn thuyết minh</a></li>
		
        </ul>
	</div>
	<div class="col-lg-2 col-md-6 col-sm-4 col-xs-6">

		<h3>Văn nên xem</h3>
        <ul>
        	<li><a href="/tag/van-nghi-luan-xa-hoi
" title ="Văn nghị luận xã hội">Văn nghị luận xã hội</a></li>

<li><a href="/tag/van-ta-canh
" title ="Văn tả cảnh">Văn tả cảnh</a></li>

        </ul>
	</div>

	<div class="col-lg-2 col-md-6 col-sm-4 col-xs-6">
		<h3>Văn học sinh giỏi</h3>
        <ul>
        	<li><a href="/tag/van-phat-bieu-cam-nghi
" title ="Văn phát biểu cảm nghĩ">Văn phát biểu cảm nghĩ</a></li>

<li><a href="/tag/van-ta-nguoi
" title ="Văn tả người">Văn tả người</a></li>

<li><a href="/tag/van-viet-thu
" title ="Văn viết thư">Văn viết thư</a></li>

        </ul>
	</div>-->

<a href="http://tuvihangngay.biz/">Tu vi hang ngay<a/>

<div class="container">
<div class="row">
<div class="col-md-8 col-sm-6"><?php echo hr_coppyright()?></div>
<div class="col-md-4 col-sm-6">
<?php 
								$catNav = '';
								if (function_exists('wp_nav_menu')) {
									$catNav = wp_nav_menu( array( 'theme_location' => 'bottom-menu', 'menu_class' => 'bottom-menu', 'menu_id' => 'bottom-menu', 'echo' => false, 'fallback_cb' => '' ) );};
								if ($catNav == '') { ?>
									<ul class="bottom-menu">
										<?php wp_list_categories('title_li=&orderby=id'); ?>
									</ul>
							<?php } else echo($catNav); ?>
</div>
</div>
  </div>  
            <!-- {%FOOTER_LINK} -->


	
        </footer>
     </div>   
<a id="back-to-top" href="#" rel="nofollow"></a></div>
<?php wp_footer(); ?>




</body></html>