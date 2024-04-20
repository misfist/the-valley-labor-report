<?php
/**
 * Title: Newsletter Signup
 * Slug: tvlr/newsletter-signup
 * Categories: call-to-action
 */
use function TVLR\get_form_id;
$form = get_form_id( array( 's' => 'newsletter' ) );
$form_id = ( $form ) ? (int) $form : 0;
?>
<!-- wp:group {"tagName":"section","align":"full","className":"newsletter-signup","layout":{"type":"default"},"metadata":{"name":"Newsletter Signup"}} -->
<section
	class="wp-block-group alignfull newsletter-signup">
	<!-- wp:columns {,"className":"newsletter-signup__inner"} -->
	<div class="wp-block-columns newsletter-signup__inner">
		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:heading -->
			<h2 class="wp-block-heading">
			<?php
			_e(
				'Subscribe to Receive
                <strong>Last Week in Southern Labor</strong> & <strong>Boss Watch</strong> in Your Inbox',
				'tvlr'
			);
			?>
			</h2>
			<!-- /wp:heading -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"verticalAlignment":"center"} -->
		<div class="wp-block-column is-vertically-aligned-center">
			<!-- wp:wpforms/form-selector {
				"clientId":"80ed4d1f-8efb-45a7-86fe-df6b640b0e5a",
				"formId":"<?php echo $form_id; ?>",
				"copyPasteJsonValue":"{\u0022displayTitle\u0022:false,\u0022displayDesc\u0022:false,\u0022fieldSize\u0022:\u0022medium\u0022,\u0022fieldBorderRadius\u0022:\u00223px\u0022,\u0022fieldBackgroundColor\u0022:\u0022#ffffff\u0022,\u0022fieldBorderColor\u0022:\u0022rgba( 0, 0, 0, 0.25 )\u0022,\u0022fieldTextColor\u0022:\u0022rgba( 0, 0, 0, 0.7 )\u0022,\u0022labelSize\u0022:\u0022medium\u0022,\u0022labelColor\u0022:\u0022rgba( 0, 0, 0, 0.85 )\u0022,\u0022labelSublabelColor\u0022:\u0022rgba( 0, 0, 0, 0.55 )\u0022,\u0022labelErrorColor\u0022:\u0022#d63637\u0022,\u0022buttonSize\u0022:\u0022medium\u0022,\u0022buttonBorderRadius\u0022:\u00223px\u0022,\u0022buttonBackgroundColor\u0022:\u0022#066aab\u0022,\u0022buttonTextColor\u0022:\u0022#ffffff\u0022,\u0022pageBreakColor\u0022:\u0022#066aab\u0022}",
				"className":"signup-form"
			} /-->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->
 
