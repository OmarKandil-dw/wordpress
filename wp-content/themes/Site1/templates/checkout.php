<?php
defined( 'ABSPATH' ) || exit;
global $checkout_custom_template;
$checkout_custom_template = 'checkoutTemplate';
if (get_option('checkout_template') !== $checkout_custom_template) {
    update_option('checkout_template', $checkout_custom_template);
}
$checkout = WC_Checkout::instance();

function checkout_body_class_filter($classes) {
    $classes[] = 'u-body u-xl-mode';
    return $classes;
}
add_filter('body_class', 'checkout_body_class_filter');

function checkout_body_style_attribute() {
    return "";
}
add_filter('add_body_style_attribute', 'checkout_body_style_attribute');

function checkout_body_back_to_top() {
    return <<<BACKTOTOP

BACKTOTOP;
}
add_filter('add_back_to_top', 'checkout_body_back_to_top');

function checkout_get_local_fonts() {
    return '';
}

add_filter('get_local_fonts', 'checkout_get_local_fonts');

theme_layout_before('checkout', '', $checkout_custom_template);

ob_start(); ?>

<?php $skip_min_height = false; ?><section class="u-clearfix u-section-1" id="sec-53cd">
  <div class="u-align-left u-clearfix u-sheet u-valign-middle u-sheet-1">
    <div class="u-checkout u-expanded-width u-checkout-1">
      <div class="u-checkout-blocks-container">
        <div class="u-checkout-billing-details-block u-checkout-block u-indent-30">
          <div class="u-checkout-block-container u-clearfix">
            <h5 class="u-checkout-block-header u-text"><?php esc_html_e( 'Billing details', 'woocommerce' ); ?></h5>
            <div class="u-checkout-block-content u-text">
              <div class="u-checkout-form u-form">
                <form action="#" method="POST" class="checkout u-clearfix u-form-spacing-10 u-inner-form" source="custom" name="form">
                  <?php render_checkout_billing($checkout); ?>
                  
                  
                  
                  
                  
                  
                  <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                  <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
                  <input type="hidden" value="" name="recaptchaResponse">
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="u-checkout-block u-checkout-totals-block u-indent-30">
          <div class="u-checkout-block-container u-clearfix">
            <h5 class="u-checkout-block-header u-text"><?php esc_html_e( 'Your order', 'woocommerce' ); ?></h5>
            <div class="u-align-right u-checkout-block-content u-text">
              <div class="u-checkout-totals-table u-table u-table-responsive">
                <?php woocommerce_order_review(); ?>
              </div>
              <div class="u-checkout-placeorder-form u-form">
                <form action="<?php echo esc_url( wc_get_checkout_url() ); ?>" method="POST" class="checkout u-clearfix u-form-spacing-6 u-inner-form" style="padding: 10px;" source="custom" name="form-1">
                  <?php woocommerce_checkout_payment(); ?><div class="data-from-checkout-form" style="display:none;"></div>
                  <div class="u-align-right u-form-group u-form-submit">
                    
                    <input type="submit" value="submit" class="u-form-control-hidden">
                  </div>
                  <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                  <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
                  <input type="hidden" value="" name="recaptchaResponse">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style data-mode="XXL">@media (max-width: 0px) {
  .u-section-1 .u-sheet-1 {
    min-height: 808px;
  }
  .u-section-1 .u-checkout-1 {
    min-height: 748px;
    margin-bottom: 30px;
    height: auto;
    margin-top: 30px;
  }
  .u-section-1 .u-table-cell-1 {
    font-weight: 700;
  }
  .u-section-1 .u-table-cell-3 {
    font-weight: 700;
  }
  .u-section-1 .u-table-cell-4 {
    font-weight: 700;
  }
  .u-section-1 .u-btn-1 {
    margin-top: 20px;
  }
}</style>
</section><?php if ($skip_min_height) { echo "<style> .u-section-1, .u-section-1 .u-sheet {min-height: auto;}</style>"; } ?>


<?php
$content = ob_get_clean();
if (function_exists('renderTemplate')) {
    renderTemplate($content, '', 'echo', 'custom');
} else {
    echo $content;
}

theme_layout_after('checkout'); ?>

