<table class="woocommerce-checkout-review-order-table u-table-entity">
                  <colgroup>
                    <col width="50%">
                    <col width="50%">
                  </colgroup>
                  <tbody class="u-align-right u-table-body"><?php render_checkout_products(); ?>
                    <tr>
                      <td class="u-align-left u-border-1 u-border-grey-dark-1 u-first-column u-table-cell u-table-cell-1"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></td>
                      <td class="u-border-1 u-border-grey-dark-1 u-table-cell"><?php wc_cart_totals_subtotal_html(); ?></td>
                    </tr>
                    <tr>
                      <td class="u-align-left u-border-1 u-border-grey-dark-1 u-first-column u-table-cell u-table-cell-3"><?php esc_html_e( 'Total', 'woocommerce' ); ?></td>
                      <td class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-4"><?php wc_cart_totals_order_total_html(); ?></td>
                    </tr>
                  </tbody>
                </table>