<!-- header styles -->

<?php
   $localFonts = apply_filters('get_local_fonts', '');
?>
<?php if ($localFonts) : ?> 
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/<?php echo $localFonts; ?>" media="screen" type="text/css" />
<?php else : ?>
   <?php endif; ?>
<link id="u-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
<style> .u-header {
  background-image: none;
}
.u-header .u-sheet-1 {
  min-height: 140px;
}
.u-header .u-image-1 {
  width: 283px;
  height: 133px;
  margin: 4px auto 0 0;
}
.u-header .u-menu-1 {
  margin: -84px 37px 52px auto;
}
.u-header .u-nav-1 {
  font-weight: 500;
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: normal;
}
.u-header .u-nav-2 {
  font-size: 1.25rem;
}
@media (max-width: 1199px) {
  .u-header .u-image-1 {
    width: 283px;
    height: 133px;
    margin-top: -73px;
  }
  .u-header .u-menu-1 {
    width: auto;
    margin-top: -85px;
    margin-right: 100px;
  }
}
@media (max-width: 991px) {
  .u-header .u-menu-1 {
    margin-top: 20px;
    margin-right: 210px;
  }
}
@media (max-width: 767px) {
  .u-header .u-menu-1 {
    margin-right: 300px;
  }
}
@media (max-width: 575px) {
  .u-header .u-menu-1 {
    margin-right: 375px;
    margin-bottom: 7px;
  }
}</style>
