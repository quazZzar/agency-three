	<div style="padding: 60px 45px;color: #999;background-color: <?php echo _go('section7_bgcolor') ? _go('section7_bgcolor') : '#4c4c4c'; ?>;">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<?php if(_go('section7_col1_use_html')) : 
						_eo('section7_col1_html'); 
					else: ?>
						<a href="<?php echo  home_url('/'); ?>">
							<img src="http://three.demo.agency/wp-content/uploads/2017/09/ad-logo.png" height="75" alt="" />
						</a>
						<h4 style="color:#ffffff;text-transform:uppercase;">Demo Financial Services</h4>
						<p class="footer-desc">Helping you achieve financial security.
						</p>
					<?php endif; ?>
				</div>
				<div class="col-sm-3">
					<?php if(_go('section7_col2_use_html')) : 
						_eo('section7_col2_html'); 
					else: ?>
						<p class="footer-desc">Licensed Insurance Professional | MI License # 000000</p><br />
					<?php endif; ?>
				</div>
				<div class="col-sm-3">
					<?php if(_go('section7_col3_use_html')) : 
						_eo('section7_col3_html'); 
					else: ?>
						<p class="footer-desc">
						[This is a Demo Site] CoreCap Investments, Inc., is a member of FINRA/SIPC and does not provide tax or legal advice. The information presented here is not specific to any individual's personal circumstances. 
<br><br>
This website does not constitute an offer to sell or a solicitation of offers to purchase or sell securities in any jurisdiction in which CoreCap Investments, Inc., is not registered as a broker-dealer. 
<br><br>
To the extent that this material concerns tax matters, it is not intended or written to be used, and cannot be used, by a taxpayer for the purpose of avoiding penalties that may be imposed by law. Further, nothing on this site is intended to be, or to be relied upon as, tax, legal, or investment advice. Investors should consult with their own tax, legal, and investment professionals. 


						
						
						</p><br />
					<?php endif; ?>
				</div>
				<div class="col-sm-3">
					<?php if(_go('section7_col4_use_html')) : 
						_eo('section7_col4_html'); 
					else: ?>
						<p class="footer-desc">These materials are provided for general information and educational purposes based upon publicly available information from sources believed to be reliable—we cannot assure the accuracy or completeness of these materials. The information in these materials may change at any time and without notice.</p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row" style="padding: 45px 30px;">
			<div class="col-sm-6"><?php echo _go('footer_copyrights') ? _go('footer_copyrights') : 'Demo Financial &copy; 2017 All Rights Reserved | by <a href="#">ND</a>'; ?>
			</div>
			<div class="col-sm-6" style="text-align: right;">
				<ul class="footer-nav">
					<?php wp_nav_menu( 
						array(
							'title_li' => '',
							'theme_location' => 'footer_menu',
							'container' => false,
							'items_wrap' => '%3$s',
							'fallback_cb' => 'wp_list_pages'
						)
					); ?>
				</ul>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>