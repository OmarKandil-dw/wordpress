<?php
//about theme info
add_action( 'admin_menu', 'expert_consultant_gettingstarted' );
function expert_consultant_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'expert-consultant'), esc_html__('About Theme', 'expert-consultant'), 'edit_theme_options', 'expert_consultant_guide', 'expert_consultant_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function expert_consultant_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'expert_consultant_admin_theme_style');

//guidline for about theme
function expert_consultant_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'expert-consultant' );

?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Expert Consultant WordPress Theme', 'expert-consultant' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'expert-consultant' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'expert-consultant' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'expert-consultant' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'expert-consultant' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'expert-consultant' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'expert-consultant' ); ?> <a href="<?php echo esc_url( EXPERT_CONSULTANT_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'expert-consultant' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Expert Consultant gives any consulting firm, accounting business, consultancy, advising firm, creative and financial advisors, business speakers, solicitors, coaches, marketing consultants, and professionals related to relevant businesses a fine website. This free WordPress theme is accompanied by an elegant design having minimal style converging the entire attention towards the important information and content displayed on your website. With a sophisticated design and a retina-ready display, your website is going to look marvelous on different devices. With some personalization options given, you will be able to use it as a multipurpose theme. Having a user-friendly interface is going to be useful for users who are not from a coding background. There is no need to write codes or any sort of programming knowledge or skills for creating a website. There is an SEO-friendly design and optimized codes giving you a perfect website that has a faster page load time and delivers stunning performance across all the devices as well as browsers. An interactive element is added by the Call to Action Button (CTA) and animations added further beautify your website. This wonderful Bootstrap-based theme is made translation-ready for supporting various languages such as German, Spanish, Chinese, Japanese, etc. and a lot of social media options are also included.', 'expert-consultant')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Expert Consultant Theme', 'expert-consultant' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'expert-consultant'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( EXPERT_CONSULTANT_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'expert-consultant'); ?></a>
			<a href="<?php echo esc_url( EXPERT_CONSULTANT_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'expert-consultant'); ?></a>
			<a href="<?php echo esc_url( EXPERT_CONSULTANT_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'expert-consultant'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/expert-consultant.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'expert-consultant'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'expert-consultant'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'expert-consultant'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'expert-consultant'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'expert-consultant'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'expert-consultant'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'expert-consultant'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'expert-consultant'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'expert-consultant'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'expert-consultant'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'expert-consultant'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'expert-consultant'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'expert-consultant'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>