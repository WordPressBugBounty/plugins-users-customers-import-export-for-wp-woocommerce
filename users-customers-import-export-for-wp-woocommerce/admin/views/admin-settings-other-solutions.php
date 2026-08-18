<?php
/**
 * "Other Solutions" admin tab — sidebar categories + card grid layout.
 *
 * Ported from wt-woocommerce-related-products' "You May Also Need" template.
 * Class prefix renamed wt-crp-os-* → wt-uiew-os-* to keep both plugins collision-free.
 *
 * @package Users_Customers_Import_Export_For_Wp_Woocommerce
 */

// phpcs:disable WordPress.NamingConventions.PrefixAllGlobals -- Template file; variables are template-scoped, not plugin globals.
defined( 'WPINC' ) || die;

$wt_uiew_img_base = esc_url( WT_U_IEW_PLUGIN_URL . 'assets/images/other_solutions' );

$wt_uiew_categories = array(
	'ecommerce-promotions' => array(
		'label'      => __( 'E-commerce Promotions', 'users-customers-import-export-for-wp-woocommerce' ),
		'subtitle'   => __( 'Create and run successful promotional campaigns with the best marketing tools for WooCommerce', 'users-customers-import-export-for-wp-woocommerce' ),
		'icon'       => 'sidebar-ecommerce-promotions.svg',
		'hero'       => null,
		'plugins'    => array(
			array(
				'type'     => 'standard',
				'name'     => __( 'Smart Coupons for WooCommerce', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'     => 'smart-coupons-plugin.png',
				'rating'   => '4.9',
				'features' => array(
					__( 'Advanced BOGO Coupons', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Offer store credits', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Create attractive gift cards', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Give away product coupons', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Coupons based on past purchases', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Restrict coupons by country', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Create and offer sign-up discount coupons', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Cart abandonment coupons', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Customizable countdown sales banner', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Bulk generate coupons', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Import and export coupons', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Coupon embeds', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Allow coupon combinations', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'      => 'https://www.webtoffee.com/product/smart-coupons-for-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=smart_coupons',
			),
			array(
				'type'     => 'standard',
				'name'     => __( 'URL Coupons for WooCommerce', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'     => 'url-coupons-plugin.png',
				'rating'   => '5.0',
				'features' => array(
					__( 'Generate custom coupon URLs', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Set up a redirect page', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Automatically add products', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Create QR code coupons', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'      => 'https://www.webtoffee.com/product/url-coupons-for-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=URL_Coupons',
			),
			array(
				'type'     => 'standard',
				'name'     => __( 'WooCommerce Product Recommendations', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'     => 'product-recommendation-plugin.png',
				'rating'   => '5.0',
				'features' => array(
					__( 'Automatically generate suggestions based on order history', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Display recommended products on the product pages', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Quick setup page to add & edit recommendations', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Multiple product recommendation layouts', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Set up discounts on the recommended product bundle', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Manually create a bought-together list', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Use upsells, cross-sells, & related products as frequently bought products', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Customize the title, button, and label texts', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Customize the display of the recommended products', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'      => 'https://www.webtoffee.com/product/woocommerce-product-recommendations/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=Product_Recommendations',
			),
			array(
				'type'     => 'standard',
				'name'     => __( 'WooCommerce Coupon Generator', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'     => 'coupon-generator-plugin.png',
				'rating'   => '5.0',
				'features' => array(
					__( 'Bulk generate WooCommerce coupons', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Bulk export WooCommerce coupons to CSV', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Add usage restrictions to coupons', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'      => 'https://www.webtoffee.com/product/woocommerce-coupon-generator/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=Coupon_Generator',
			),
			array(
				'type'        => 'standard-with-image',
				'name'        => __( 'WooCommerce Gift Cards', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'        => 'gift-card-plugin.png',
				'rating'      => 'stars',
				'features'    => array(
					__( 'Create unlimited gift cards', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Email gift cards to customers', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Provide refunds to store credit', 'users-customers-import-export-for-wp-woocommerce' ),
					__( '20+ predefined gift card templates', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Category wise template listing', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Add custom templates for gift cards', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Generate gift cards based on order status', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Manage user credit balance', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Fixed and custom gift card amounts', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Add usage restrictions for gift cards', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'         => 'https://www.webtoffee.com/product/woocommerce-gift-cards/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=WooCommerce_Gift_Cards',
				'image_src'   => 'woocommerce-giftcard-hero.svg',
				'card_class'  => 'wt-uiew-os-card--gift-cards',
				'plugin_file' => 'wt-woocommerce-gift-cards/wt-woocommerce-gift-cards.php',
			),
		),
		'standalone' => array(
			'name'        => __( 'ECommerce Marketing Automation App', 'users-customers-import-export-for-wp-woocommerce' ),
			'icon'        => 'ema-app-plugin.png',
			'desc'        => __( 'Create signup forms, popups, and automated email campaigns with pre-built workflow templates to capture leads, recover abandoned carts, and grow sales.', 'users-customers-import-export-for-wp-woocommerce' ),
			'screenshot'  => 'ema-screenshot.svg',
			'url'         => 'https://www.webtoffee.com/product/ecommerce-marketing-automation/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=EMA',
			'plugin_file' => 'ecommerce-marketing-automation/ecommerce-marketing-automation.php',
		),
		'bundle'     => array(
			'tag_emoji'    => '📣',
			'tag_color'    => 'yellow',
			'tag'          => __( 'Promotion Bundle', 'users-customers-import-export-for-wp-woocommerce' ),
			'title'        => __( 'WooCommerce Promotion Bundle', 'users-customers-import-export-for-wp-woocommerce' ),
			'url'          => 'https://www.webtoffee.com/woocommerce-promotions/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=Promotion_Bundle',
			'desc'         => __( 'Make powerful promotional campaigns with our WooCommerce promotion bundle. Create coupon promotions, set up gift cards, and implement popular product recommendation strategies.', 'users-customers-import-export-for-wp-woocommerce' ),
			'pills'        => array(
				__( 'Smart Coupons', 'users-customers-import-export-for-wp-woocommerce' ),
				__( 'Product recommendation', 'users-customers-import-export-for-wp-woocommerce' ),
				__( 'Gift cards', 'users-customers-import-export-for-wp-woocommerce' ),
			),
			'price_orig'   => '$277',
			'price_sale'   => '$194',
			'savings'      => __( 'Save up to 30% off', 'users-customers-import-export-for-wp-woocommerce' ),
			'illustration' => 'woocommerce-promotion-bundle-hero.svg',
		),
	),
	'privacy-compliance'   => array(
		'label'      => __( 'Privacy Compliance', 'users-customers-import-export-for-wp-woocommerce' ),
		'subtitle'   => __( 'Ensure compliance with major cookie laws, including, GDPR, CCPA, LGPD, CNIL, and more', 'users-customers-import-export-for-wp-woocommerce' ),
		'icon'       => 'sidebar-privacy-compliance.svg',
		'hero'       => array(
			'name'        => __( 'GDPR Cookie Consent Plugin (CCPA Ready)', 'users-customers-import-export-for-wp-woocommerce' ),
			'icon'        => 'gdpr-plugin.png',
			'rating'      => 'stars',
			'image'       => 'cookie-consent.svg',
			'desc'        => __( 'This Google-certified CMP lets you create a customizable cookie banner, manage user consent, and ensure global privacy compliance with automatic script blocking.', 'users-customers-import-export-for-wp-woocommerce' ),
			'features'    => array(),
			'url'         => 'https://www.webtoffee.com/product/gdpr-cookie-consent/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=GDPR',
			'plugin_file' => 'webtoffee-cookie-consent/webtoffee-cookie-consent.php',
		),
		'plugins'    => array(
			array(
				'type'        => 'standard-with-image',
				'name'        => __( 'EU Order Withdrawal Button Plugin for WooCommerce', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'        => 'eu-withdrawal-plugin-icon.svg',
				'rating'      => 'stars',
				'features'    => array(
					__( 'Add "Request Withdrawal" button to WooCommerce', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Supports guest withdrawal option', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Two-step confirmation to prevent errors', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Full or partial order withdrawal support', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Dedicated admin dashboard for all requests', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Send email confirmation to customers', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'         => 'https://www.webtoffee.com/product/eu-withdrawal-button/?utm_source=other_solution_page&utm_medium=free_plugin&utm_campaign=EU_Withdarawal_Button',
				'image_src'   => 'eu-withdrawal-hero.svg',
				'card_class'  => 'wt-uiew-os-card--full-width',
				'plugin_file' => 'wt-eu-withdrawal-button/wt-eu-withdrawal-button.php',
			),
		),
		'standalone' => null,
		'bundle'     => null,
	),
	'data-import-export'   => array(
		'label'      => __( 'Data Import & Export', 'users-customers-import-export-for-wp-woocommerce' ),
		'subtitle'   => __( 'The best-in-class import, export, and migration solutions for your WooCommerce data', 'users-customers-import-export-for-wp-woocommerce' ),
		'icon'       => 'sidebar-data-import-export.svg',
		'hero'       => null,

		// User Import Export is intentionally omitted here — this is the free
		// version of that product; we don't cross-sell ourselves on our own page.
		'plugins'    => array(
			array(
				'type'        => 'standard',
				'name'        => __( 'Product Import Export Plugin', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'        => 'product-ie-plugin.png',
				'rating'      => '4.9',
				'features'    => array(
					__( 'Supports Excel, XML, CSV, and TSV file formats', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Schedule automated import and export', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Support for multiple product types', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Export product images in a separate zip file', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Import from URL, Google Sheets, FTP/SFTP', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Export to FTP/SFTP', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Advanced filters and customizations for import and export', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Add and update data while importing', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Maintains action history and debug logs', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Compatible with major 3rd-party plugins', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'         => 'https://www.webtoffee.com/product/product-import-export-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=Product_Import_Export',
				'plugin_file' => 'product-import-export-for-woo/product-import-export-for-woo.php',
			),
			array(
				'type'        => 'standard',
				'name'        => __( 'Order, Coupon, Subscription Export Import', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'        => 'order-ie-plugin.png',
				'rating'      => '4.6',
				'features'    => array(
					__( 'Supports Excel, XML, CSV, and TSV file formats', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Schedule automated import & export', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Email customers on order status change', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Create users on order import', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Filter export by products, order status, email, date, etc', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Import from URL, Google Sheets, FTP/SFTP', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Export to FTP/SFTP', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Advanced filters and customizations for import & export', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Add & update data while importing', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Maintains action history and debug logs', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Compatible with major 3rd-party plugins', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'         => 'https://www.webtoffee.com/product/order-import-export-plugin-for-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=Order_Import_Export',
				'plugin_file' => 'order-import-export-for-woocommerce/order-import-export-for-woocommerce.php',
			),
			array(
				'type'        => 'standard',
				'name'        => __( 'Product Feed & Sync Manager for WooCommerce', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'        => 'product-feed-sync.png',
				'rating'      => '4.9',
				'features'    => array(
					__( 'Generate optimized product feeds for 20+ sales channels', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Map WooCommerce product details and categories', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Create feeds for all Google shopping platforms', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Sync WooCommerce products with Facebook Catalog', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Tailor your product feed with filters', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Track and manage feed updates', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Keep your product feeds up-to-date', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'         => 'https://www.webtoffee.com/product/woocommerce-product-feed/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=WooCommerce_Product_Feed',
				'plugin_file' => 'webtoffee-product-feed/webtoffee-product-feed.php',
			),
			array(
				'type'       => 'standard-with-image',
				'name'       => __( 'Import Export Suite for WooCommerce', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'       => 'ie-suite-plugin.png',
				'rating'     => 'stars',
				'features'   => array(
					__( 'Import/export Products, Orders, Subscriptions, Coupons, Customers, WordPress Users, Categories & Tags, Reviews', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Supports Excel, XML, CSV, and TSV file formats', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Schedule automated import & export', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Import from URL, Google Sheets, FTP/SFTP', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Export to FTP/SFTP', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Import & export custom fields and values', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Advanced filters and customizations for import & export', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Add and update data while importing', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Maintains action history and debug logs', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Compatible with major 3rd-party plugins', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/woocommerce-import-export-suite/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=Import_Export_Suite',
				'image_src'  => 'data-io-illustration.svg',
				'card_class' => 'wt-uiew-os-card--ie-suite',
			),
		),
		'standalone' => null,
		'bundle'     => null,
	),
	'accounting-invoicing' => array(
		'label'      => __( 'Accounting & Invoicing', 'users-customers-import-export-for-wp-woocommerce' ),
		'subtitle'   => __( 'Automatically generate professional WooCommerce invoices and documents for all your orders', 'users-customers-import-export-for-wp-woocommerce' ),
		'icon'       => 'sidebar-accounting-invoicing.svg',
		'hero'       => array(
			'name'        => __( 'PDF Invoices, Packing Slips, & Credit Notes', 'users-customers-import-export-for-wp-woocommerce' ),
			'icon'        => 'pdf-invoices-plugin.png',
			'rating'      => 'stars',
			'pdf_cluster' => true,
			'desc'        => __( 'Automatically generate, customize, and manage professional WooCommerce PDF invoices, packing slips, and credit notes with advanced automation and tax compliance features.', 'users-customers-import-export-for-wp-woocommerce' ),
			'features'    => array(),
			'url'         => 'https://www.webtoffee.com/product/woocommerce-pdf-invoices-packing-slips/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=PDF_invoice',
		),
		'plugins'    => array(
			array(
				'type'     => 'standard',
				'name'     => __( 'Shipping Labels, Dispatch Labels, & Delivery Notes', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'     => 'shipping-labels-plugin.png',
				'rating'   => '5.0',
				'features' => array(
					__( 'Create delivery notes, shipping & dispatch labels', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Enable customers to print the documents from order emails', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Customize shipping label size', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Add multiple shipping labels on one page', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Show product variation data', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Add extra product & order data fields', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Pre-built layouts & customizable templates', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Group products by \'Category\'', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Sort products based on Name or SKU', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Multilingual support', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'      => 'https://www.webtoffee.com/product/woocommerce-shipping-labels-delivery-notes/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=Shipping_Label',
			),
			array(
				'type'     => 'standard',
				'name'     => __( 'WooCommerce Picklists plugin', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'     => 'picklists-plugin.png',
				'rating'   => '4.0',
				'features' => array(
					__( 'Bulk print picklists from the admin order page', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Automatically email picklists based on order status', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Create or customize picklist templates', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Show product variation data', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Group products in picklist by order/category', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Add product meta fields & attributes', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Exclude virtual products from picklists', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Multilingual support', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'      => 'https://www.webtoffee.com/product/woocommerce-picklist/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=Picklist',
			),
			array(
				'type'     => 'standard',
				'name'     => __( 'Customizer for WooCommerce PDF Invoices', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'     => 'pdf-customizer-plugin.png',
				'rating'   => '5.0',
				'features' => array(
					__( 'Drag-and-drop easy customization', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Advanced visual and code editor', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Easy invoice layout customization', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Customize individual elements using block editors', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'View live preview of customization', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Change color, text, background, border & more', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'      => 'https://www.webtoffee.com/product/customizer-for-woocommerce-pdf-invoice/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=PDF_Customizer',
			),
			array(
				'type'     => 'standard',
				'name'     => __( 'WooCommerce Address Labels plugin', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'     => 'address-labels-plugin.png',
				'rating'   => '5.0',
				'features' => array(
					__( 'Generate \'Shipping Address\', \'Billing Address\', \'From Address\', and \'Return Address\' labels', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Customize label sizes', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Bulk print address labels', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Offers built-in label templates', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Change address label layout', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Multilingual support', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'      => 'https://www.webtoffee.com/product/woocommerce-address-label/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=Address_Label',
			),
			array(
				'type'     => 'standard',
				'name'     => __( 'Proforma Invoice', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'     => 'proforma-invoice-plugin.png',
				'rating'   => '5.0',
				'features' => array(
					__( 'Create proforma invoices automatically', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Pre-built proforma invoice layouts', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Easy invoice layout customization', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Attach proforma invoice PDF to order emails', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Allow customers to print invoices', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Set custom proforma invoice number', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Add additional product & order data fields', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Attach special notes with proforma invoices', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Attach transport & sales terms', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Multilingual support', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'      => 'https://www.webtoffee.com/product/woocommerce-proforma-invoice/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=Proforma_Invoice',
			),
			array(
				'type'     => 'standard',
				'name'     => __( 'QR Code Add-on for WooCommerce PDF Invoices', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'     => 'qr-code-plugin.png',
				'rating'   => '5.0',
				'features' => array(
					__( 'Assign QR codes to all generated invoices', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Create QR code that reads order or invoice number', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Add custom data to invoices', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Compatible with WooCommerce PDF Invoice, Packing Slip & Credit Note (Premium)', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Compatible with WooCommerce PDF Invoices, Packing Slips, Delivery Notes, and Shipping Labels (Free)', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'      => 'https://www.webtoffee.com/product/qr-code-addon-for-woocommerce-pdf-invoices/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=QR_Code',
			),
			array(
				'type'        => 'standard',
				'name'        => __( 'WooCommerce Request a Quote', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'        => 'request-quote-plugin.png',
				'rating'      => '5.0',
				'features'    => array(
					__( 'Add quote button to the product & shop pages', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Enable quotation request for selected products', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Automatically send quotes to users', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Disable guest users from asking for quote', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Hide prices and \'add to cart\' button', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Automatic email alerts for admin & users', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Easy button and form customization', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Set quote expiry period', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Limit spams with reCAPTCHA', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'         => 'https://www.webtoffee.com/product/woocommerce-request-a-quote/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=Request_Quote',
				'plugin_file' => 'wt-woo-request-quote/wt-woo-request-quote.php',
			),
			array(
				'type'       => 'standard-with-image',
				'name'       => __( 'Sequential Order Numbers', 'users-customers-import-export-for-wp-woocommerce' ),
				'icon'       => 'sequential-orders-plugin.png',
				'rating'     => 'stars',
				'features'   => array(
					__( 'Auto reset sequence per month/year etc', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Add a custom suffix for order numbers', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Date suffix in order numbers', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Custom sequence for free orders', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'Increment sequence in custom series', 'users-customers-import-export-for-wp-woocommerce' ),
					__( 'More order number templates', 'users-customers-import-export-for-wp-woocommerce' ),
				),
				'url'        => 'https://www.webtoffee.com/product/woocommerce-sequential-order-numbers/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=Sequential_Order_Numbers',
				'image_src'  => 'seq-orders-illustration.png',
				'card_class' => 'wt-uiew-os-card--seq-orders',
			),
		),
		'standalone' => null,
		'bundle'     => array(
			'tag_emoji'    => '📄',
			'tag_color'    => 'green',
			'tag'          => __( 'Invoice Bundle', 'users-customers-import-export-for-wp-woocommerce' ),
			'title'        => __( 'All in one Invoice bundle', 'users-customers-import-export-for-wp-woocommerce' ),
			'url'          => 'https://www.webtoffee.com/pdf-invoices-packing-slips-suite-woocommerce/?utm_source=other_solution_page&utm_medium=free_plugin_user_import_export&utm_campaign=Invoice_bundle',
			'desc'         => __( 'A complete suite of invoices and shipping documents bundle to create and print PDF invoices, packing slips, shipping and delivery documents in WooCommerce.', 'users-customers-import-export-for-wp-woocommerce' ),
			'pills'        => array(
				__( 'Invoice', 'users-customers-import-export-for-wp-woocommerce' ),
				__( 'Packing Slip', 'users-customers-import-export-for-wp-woocommerce' ),
				__( 'Address Labels', 'users-customers-import-export-for-wp-woocommerce' ),
				__( 'Dispatch Labels', 'users-customers-import-export-for-wp-woocommerce' ),
				__( 'Shipping Labels', 'users-customers-import-export-for-wp-woocommerce' ),
				__( 'Delivery Notes', 'users-customers-import-export-for-wp-woocommerce' ),
				__( 'Picklists', 'users-customers-import-export-for-wp-woocommerce' ),
				__( 'Proforma Invoice', 'users-customers-import-export-for-wp-woocommerce' ),
			),
			'price_orig'   => '$279',
			'price_sale'   => '$179',
			'savings'      => __( 'Save up to 30% off', 'users-customers-import-export-for-wp-woocommerce' ),
			'illustration' => 'invoice-bundle.png',
		),
	),
);

/*
 * This is the Product Feed plugin — Data Import & Export is the most relevant
 * category for our audience, so it leads the sidebar. Any category listed here
 * but missing from the array is silently skipped; any category present in the
 * array but not listed here is appended at the end.
 */
$wt_uiew_category_order = array(
	'data-import-export',
	'ecommerce-promotions',
	'privacy-compliance',
	'accounting-invoicing',
);
$wt_uiew_categories     = array_replace( array_fill_keys( $wt_uiew_category_order, null ), $wt_uiew_categories );
$wt_uiew_categories     = array_filter(
	$wt_uiew_categories,
	static function ( $wt_uiew_c ) {
		return null !== $wt_uiew_c;
	}
);

/*
 * Hide categories whose entire content is empty — i.e. no hero, no bundle, no
 * visible standalone (either missing or its plugin is active), and every plugin
 * card in the grid has its plugin_file set AND that plugin is active. Both the
 * sidebar link AND the panel body are skipped for such categories.
 */
if ( ! function_exists( 'is_plugin_active' ) ) {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
}
$wt_uiew_categories = array_filter(
	$wt_uiew_categories,
	static function ( $wt_uiew_c ) {
		if ( ! empty( $wt_uiew_c['hero'] ) ) {
			$wt_uiew_hf = isset( $wt_uiew_c['hero']['plugin_file'] ) ? $wt_uiew_c['hero']['plugin_file'] : '';
			if ( '' === $wt_uiew_hf || ! is_plugin_active( $wt_uiew_hf ) ) {
				return true;
			}
		}
		if ( ! empty( $wt_uiew_c['bundle'] ) ) {
			return true;
		}
		if ( ! empty( $wt_uiew_c['standalone'] ) ) {
			$wt_uiew_sf = isset( $wt_uiew_c['standalone']['plugin_file'] ) ? $wt_uiew_c['standalone']['plugin_file'] : '';
			if ( '' === $wt_uiew_sf || ! is_plugin_active( $wt_uiew_sf ) ) {
				return true;
			}
		}
		if ( ! empty( $wt_uiew_c['plugins'] ) ) {
			foreach ( $wt_uiew_c['plugins'] as $wt_uiew_p ) {
				if ( empty( $wt_uiew_p['plugin_file'] ) || ! is_plugin_active( $wt_uiew_p['plugin_file'] ) ) {
					return true;
				}
			}
		}
		return false;
	}
);
?>
<?php if ( empty( $wt_uiew_categories ) ) : ?>
	<div class="wt-iew-tab-content" data-id="<?php echo esc_attr( $target_id ); ?>">
		<div class="wt-uiew-os-page">
			<div class="wt-uiew-os-header">
				<h1 class="wt-uiew-os-page-title"><?php esc_html_e( 'You\'re all set!', 'users-customers-import-export-for-wp-woocommerce' ); ?></h1>
				<p class="wt-uiew-os-page-subtitle"><?php esc_html_e( 'All recommended plugins are already active on your store.', 'users-customers-import-export-for-wp-woocommerce' ); ?></p>
			</div>
		</div>
	</div>
	<?php return; ?>
<?php endif; ?>
<?php
$wt_uiew_first_category = array_key_first( $wt_uiew_categories );
$wt_uiew_first_cat      = $wt_uiew_categories[ $wt_uiew_first_category ];
?>
<div class="wt-iew-tab-content" data-id="<?php echo esc_attr( $target_id ); ?>">
	<div class="wt-uiew-os-page">

		<div class="wt-uiew-os-header">
			<h1 class="wt-uiew-os-page-title" id="wt-uiew-os-cat-title"><?php echo esc_html( $wt_uiew_first_cat['label'] ); ?></h1>
			<p class="wt-uiew-os-page-subtitle" id="wt-uiew-os-cat-subtitle"><?php echo esc_html( $wt_uiew_first_cat['subtitle'] ); ?></p>
		</div>

		<div class="wt-uiew-os-layout">

			<?php /* ---- Sidebar ---- */ ?>
			<div class="wt-uiew-os-sidebar">
				<ul class="wt-uiew-os-sidebar-nav">
					<?php foreach ( $wt_uiew_categories as $wt_uiew_cat_id => $wt_uiew_cat ) : ?>
						<li>
							<a href="#"
								class="wt-uiew-os-cat-link<?php echo ( $wt_uiew_cat_id === $wt_uiew_first_category ) ? ' active' : ''; ?>"
								data-category="<?php echo esc_attr( $wt_uiew_cat_id ); ?>">
								<?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
								<img class="wt-uiew-os-cat-icon"
									src="<?php echo esc_url( $wt_uiew_img_base . '/' . $wt_uiew_cat['icon'] ); ?>"
									alt="<?php echo esc_attr( $wt_uiew_cat['label'] ); ?>">
								<?php echo esc_html( $wt_uiew_cat['label'] ); ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>

				<div class="wt-uiew-os-trust-badges">
					<div class="wt-uiew-os-trust-badge">
						<?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
						<img src="<?php echo esc_url( $wt_uiew_img_base . '/thirty-day-guarantee.png' ); ?>"
							alt="<?php esc_attr_e( '30 Day Money Back Guarantee', 'users-customers-import-export-for-wp-woocommerce' ); ?>">
						<span><?php esc_html_e( '30 Day No Risk Money Back Guarantee', 'users-customers-import-export-for-wp-woocommerce' ); ?></span>
					</div>
					<div class="wt-uiew-os-trust-badge">
						<?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
						<img src="<?php echo esc_url( $wt_uiew_img_base . '/satisfaction-badge.png' ); ?>"
							alt="<?php esc_attr_e( '99% Satisfaction Rating', 'users-customers-import-export-for-wp-woocommerce' ); ?>">
						<span><?php esc_html_e( 'Fast Support with 99% Satisfaction Rating', 'users-customers-import-export-for-wp-woocommerce' ); ?></span>
					</div>
				</div>
			</div>

			<?php /* ---- Main content ---- */ ?>
			<div class="wt-uiew-os-main">

				<?php foreach ( $wt_uiew_categories as $wt_uiew_cat_id => $wt_uiew_cat ) : ?>
					<div id="wt-uiew-os-panel-<?php echo esc_attr( $wt_uiew_cat_id ); ?>"
						class="wt-uiew-os-category-panel<?php echo ( $wt_uiew_cat_id === $wt_uiew_first_category ) ? ' active' : ''; ?>"
						data-title="<?php echo esc_attr( $wt_uiew_cat['label'] ); ?>"
						data-subtitle="<?php echo esc_attr( $wt_uiew_cat['subtitle'] ); ?>">

						<?php /* -- Hero card -- */ ?>
						<?php
						if ( ! empty( $wt_uiew_cat['hero'] ) ) :
							$wt_uiew_hero              = $wt_uiew_cat['hero'];
							$wt_uiew_hero_plugin_file  = isset( $wt_uiew_hero['plugin_file'] ) ? $wt_uiew_hero['plugin_file'] : '';
							$wt_uiew_hero_is_active    = $wt_uiew_hero_plugin_file && is_plugin_active( $wt_uiew_hero_plugin_file );
							$wt_uiew_hero_is_installed = $wt_uiew_hero_plugin_file && file_exists( WP_PLUGIN_DIR . '/' . $wt_uiew_hero_plugin_file );

							if ( ! $wt_uiew_hero_is_active ) :
								?>
							<div class="wt-uiew-os-hero-card">
								<div class="wt-uiew-os-hero-left">
									<div class="wt-uiew-os-hero-title-row">
										<?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
										<img class="wt-uiew-os-hero-icon"
											src="<?php echo esc_url( $wt_uiew_img_base . '/' . $wt_uiew_hero['icon'] ); ?>"
											alt="<?php echo esc_attr( $wt_uiew_hero['name'] ); ?>">
										<div class="wt-uiew-os-hero-title-block">
											<h3 class="wt-uiew-os-hero-name"><?php echo esc_html( $wt_uiew_hero['name'] ); ?></h3>
											<div class="wt-uiew-os-hero-stars" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'users-customers-import-export-for-wp-woocommerce' ); ?>">
												<?php for ( $i = 0; $i < 5; $i++ ) : ?>
													<span class="wt-uiew-os-star">&#9733;</span>
												<?php endfor; ?>
											</div>
										</div>
									</div>
									<div class="wt-uiew-os-hero-divider"></div>
									<p class="wt-uiew-os-hero-desc"><?php echo esc_html( $wt_uiew_hero['desc'] ); ?></p>
									<?php if ( $wt_uiew_hero_is_installed && current_user_can( 'activate_plugins' ) ) : ?>
										<?php
										$wt_uiew_hero_activate_url = wp_nonce_url(
											self_admin_url( 'plugins.php?action=activate&plugin=' . rawurlencode( $wt_uiew_hero_plugin_file ) ),
											'activate-plugin_' . $wt_uiew_hero_plugin_file
										);
										?>
										<a href="<?php echo esc_url( $wt_uiew_hero_activate_url ); ?>"
											class="wt-uiew-os-btn-premium wt-uiew-os-btn-premium--block">
											<?php esc_html_e( 'Activate', 'users-customers-import-export-for-wp-woocommerce' ); ?>
										</a>
									<?php else : ?>
										<a href="<?php echo esc_url( $wt_uiew_hero['url'] ); ?>"
											target="_blank"
											rel="noopener noreferrer"
											class="wt-uiew-os-btn-premium wt-uiew-os-btn-premium--block">
											<span class="dashicons dashicons-star-filled"></span>
											<?php esc_html_e( 'Get premium', 'users-customers-import-export-for-wp-woocommerce' ); ?>
										</a>
									<?php endif; ?>
								</div>
								<?php if ( ! empty( $wt_uiew_hero['pdf_cluster'] ) ) : ?>
									<div class="wt-uiew-os-hero-right wt-uiew-os-hero-right--pdf-cluster">
										<?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
										<img class="wt-uiew-os-pdf wt-uiew-os-pdf--left"
											src="<?php echo esc_url( $wt_uiew_img_base . '/pdf-invoice-left.svg' ); ?>"
											alt="">
										<?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
										<img class="wt-uiew-os-pdf wt-uiew-os-pdf--center"
											src="<?php echo esc_url( $wt_uiew_img_base . '/pdf-invoice-center.svg' ); ?>"
											alt="">
										<?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
										<img class="wt-uiew-os-pdf wt-uiew-os-pdf--right"
											src="<?php echo esc_url( $wt_uiew_img_base . '/pdf-invoice-right.svg' ); ?>"
											alt="">
									</div>
								<?php elseif ( ! empty( $wt_uiew_hero['image'] ) ) : ?>
									<div class="wt-uiew-os-hero-right">
										<?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
										<img src="<?php echo esc_url( $wt_uiew_img_base . '/' . $wt_uiew_hero['image'] ); ?>"
											alt="<?php echo esc_attr( $wt_uiew_hero['name'] ); ?>">
									</div>
								<?php endif; ?>
							</div>
								<?php
							endif;
						endif;
						?>

						<?php /* -- Plugin card grid -- */ ?>
						<?php if ( ! empty( $wt_uiew_cat['plugins'] ) ) : ?>
							<?php
							// Filter out plugins that are already active — the card is only useful when the plugin is missing or inactive.
							// is_plugin_active() is guaranteed available here — required at the top of the file.
							$wt_uiew_visible_plugins = array_values(
								array_filter(
									$wt_uiew_cat['plugins'],
									static function ( $wt_uiew_p ) {
										if ( empty( $wt_uiew_p['plugin_file'] ) ) {
											return true;
										}
										return ! is_plugin_active( $wt_uiew_p['plugin_file'] );
									}
								)
							);
							$wt_uiew_chunks          = array_chunk( $wt_uiew_visible_plugins, 3 );
							foreach ( $wt_uiew_chunks as $wt_uiew_row ) :
								?>
								<div class="wt-uiew-os-card-grid">
									<?php foreach ( $wt_uiew_row as $wt_uiew_plugin ) : ?>

										<?php if ( 'image' === $wt_uiew_plugin['type'] ) : ?>

											<div class="wt-uiew-os-card-image">
												<?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
												<img src="<?php echo esc_url( $wt_uiew_img_base . '/' . $wt_uiew_plugin['src'] ); ?>"
													alt="">
											</div>

											<?php
										else :
											$wt_uiew_with_image = ( 'standard-with-image' === $wt_uiew_plugin['type'] && ! empty( $wt_uiew_plugin['image_src'] ) );
											$wt_uiew_card_class = 'wt-uiew-os-card';
											if ( $wt_uiew_with_image ) {
												$wt_uiew_card_class .= ' wt-uiew-os-card--with-image';
											}
											if ( ! empty( $wt_uiew_plugin['card_class'] ) ) {
												$wt_uiew_card_class .= ' ' . sanitize_html_class( $wt_uiew_plugin['card_class'] );
											}
											?>

											<div class="<?php echo esc_attr( $wt_uiew_card_class ); ?>">
												<div class="wt-uiew-os-card-body">
													<?php if ( $wt_uiew_with_image ) : ?>
														<div class="wt-uiew-os-card-header wt-uiew-os-card-header--stacked">
															<?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
															<img class="wt-uiew-os-card-icon"
																src="<?php echo esc_url( $wt_uiew_img_base . '/' . $wt_uiew_plugin['icon'] ); ?>"
																alt="<?php echo esc_attr( $wt_uiew_plugin['name'] ); ?>">
															<div class="wt-uiew-os-card-title-block">
																<span class="wt-uiew-os-card-name"><?php echo esc_html( $wt_uiew_plugin['name'] ); ?></span>
																<?php if ( 'stars' === $wt_uiew_plugin['rating'] ) : ?>
																	<span class="wt-uiew-os-card-rating wt-uiew-os-card-rating--stars" aria-label="<?php esc_attr_e( '5 out of 5 stars', 'users-customers-import-export-for-wp-woocommerce' ); ?>">
																		<?php for ( $i = 0; $i < 5; $i++ ) : ?>
																			<span class="wt-uiew-os-star">&#9733;</span>
																		<?php endfor; ?>
																	</span>
																<?php else : ?>
																	<span class="wt-uiew-os-card-rating">
																		<?php echo esc_html( $wt_uiew_plugin['rating'] ); ?>
																		<span class="wt-uiew-os-star">&#9733;</span>
																	</span>
																<?php endif; ?>
															</div>
														</div>
													<?php else : ?>
														<div class="wt-uiew-os-card-header">
															<div class="wt-uiew-os-card-icon-name">
																<?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
																<img class="wt-uiew-os-card-icon"
																	src="<?php echo esc_url( $wt_uiew_img_base . '/' . $wt_uiew_plugin['icon'] ); ?>"
																	alt="<?php echo esc_attr( $wt_uiew_plugin['name'] ); ?>">
																<span class="wt-uiew-os-card-name"><?php echo esc_html( $wt_uiew_plugin['name'] ); ?></span>
															</div>
															<?php if ( 'stars' === $wt_uiew_plugin['rating'] ) : ?>
																<span class="wt-uiew-os-card-rating wt-uiew-os-card-rating--stars">
																	<span class="wt-uiew-os-star">&#9733;</span>
																	<span class="wt-uiew-os-star">&#9733;</span>
																	<span class="wt-uiew-os-star">&#9733;</span>
																	<span class="wt-uiew-os-star">&#9733;</span>
																	<span class="wt-uiew-os-star">&#9733;</span>
																</span>
															<?php else : ?>
																<span class="wt-uiew-os-card-rating">
																	<?php echo esc_html( $wt_uiew_plugin['rating'] ); ?>
																	<span class="wt-uiew-os-star">&#9733;</span>
																</span>
															<?php endif; ?>
														</div>
													<?php endif; ?>
													<ul class="wt-uiew-os-card-features<?php echo ( count( $wt_uiew_plugin['features'] ) > 3 ) ? ' wt-uiew-os-card-features--collapsible' : ''; ?>">
														<?php foreach ( $wt_uiew_plugin['features'] as $wt_uiew_feature ) : ?>
															<li>
																<span class="dashicons dashicons-yes-alt"></span>
																<?php echo esc_html( $wt_uiew_feature ); ?>
															</li>
														<?php endforeach; ?>
													</ul>
													<?php if ( count( $wt_uiew_plugin['features'] ) > 3 ) : ?>
														<div class="wt-uiew-os-show-more-less">
															<a href="#" class="wt-uiew-os-show-more"><?php esc_html_e( 'Show More', 'users-customers-import-export-for-wp-woocommerce' ); ?></a>
															<a href="#" class="wt-uiew-os-show-less"><?php esc_html_e( 'Show Less', 'users-customers-import-export-for-wp-woocommerce' ); ?></a>
														</div>
													<?php endif; ?>
													<?php
													$wt_uiew_plugin_file      = ! empty( $wt_uiew_plugin['plugin_file'] ) ? $wt_uiew_plugin['plugin_file'] : '';
													$wt_uiew_plugin_installed = $wt_uiew_plugin_file && file_exists( WP_PLUGIN_DIR . '/' . $wt_uiew_plugin_file );
													if ( $wt_uiew_plugin_installed && current_user_can( 'activate_plugins' ) ) :
														$wt_uiew_activate_url = wp_nonce_url(
															self_admin_url( 'plugins.php?action=activate&plugin=' . rawurlencode( $wt_uiew_plugin_file ) ),
															'activate-plugin_' . $wt_uiew_plugin_file
														);
														?>
														<a href="<?php echo esc_url( $wt_uiew_activate_url ); ?>"
															class="wt-uiew-os-btn-premium">
															<?php esc_html_e( 'Activate', 'users-customers-import-export-for-wp-woocommerce' ); ?>
														</a>
													<?php else : ?>
														<a href="<?php echo esc_url( $wt_uiew_plugin['url'] ); ?>"
															target="_blank"
															rel="noopener noreferrer"
															class="wt-uiew-os-btn-premium">
															<span class="dashicons dashicons-star-filled"></span>
															<?php esc_html_e( 'Get premium', 'users-customers-import-export-for-wp-woocommerce' ); ?>
														</a>
													<?php endif; ?>
												</div>
												<?php if ( $wt_uiew_with_image ) : ?>
													<div class="wt-uiew-os-card-image-side">
														<?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
														<img src="<?php echo esc_url( $wt_uiew_img_base . '/' . $wt_uiew_plugin['image_src'] ); ?>"
															alt="">
													</div>
												<?php endif; ?>
											</div>

										<?php endif; ?>

									<?php endforeach; ?>
								</div>
							<?php endforeach; ?>
						<?php endif; ?>

						<?php /* -- Bundle section (renders BEFORE the standalone, per Figma order) -- */ ?>
						<?php
						if ( ! empty( $wt_uiew_cat['bundle'] ) ) :
							$wt_uiew_bundle    = $wt_uiew_cat['bundle'];
							$wt_uiew_tag_color = ! empty( $wt_uiew_bundle['tag_color'] ) ? $wt_uiew_bundle['tag_color'] : 'green';
							?>
							<div class="wt-uiew-os-bundle">
								<div class="wt-uiew-os-bundle-content">
									<span class="wt-uiew-os-bundle-tag wt-uiew-os-bundle-tag--<?php echo esc_attr( $wt_uiew_tag_color ); ?>">
										<?php if ( ! empty( $wt_uiew_bundle['tag_emoji'] ) ) : ?>
											<span class="wt-uiew-os-bundle-tag-emoji"><?php echo esc_html( $wt_uiew_bundle['tag_emoji'] ); ?></span>
										<?php endif; ?>
										<?php echo esc_html( $wt_uiew_bundle['tag'] ); ?>
									</span>
									<div class="wt-uiew-os-bundle-title">
										<a href="<?php echo esc_url( $wt_uiew_bundle['url'] ); ?>"
											target="_blank"
											rel="noopener noreferrer">
											<?php echo esc_html( $wt_uiew_bundle['title'] ); ?>
										</a>
										<span class="dashicons dashicons-external"></span>
									</div>
									<p class="wt-uiew-os-bundle-desc"><?php echo esc_html( $wt_uiew_bundle['desc'] ); ?></p>
									<div class="wt-uiew-os-bundle-pills">
										<?php foreach ( $wt_uiew_bundle['pills'] as $wt_uiew_pill ) : ?>
											<span class="wt-uiew-os-bundle-pill">
												<span class="dashicons dashicons-yes-alt"></span>
												<?php echo esc_html( $wt_uiew_pill ); ?>
											</span>
										<?php endforeach; ?>
									</div>
									<p class="wt-uiew-os-bundle-pricing">
										<?php
										printf(
											wp_kses(
												/* translators: 1: strikethrough original price, 2: bold sale price, 3: green savings text */
												__( 'Total: <s>%1$s</s> <strong>%2$s</strong> <span class="wt-uiew-os-savings">(%3$s)</span>', 'users-customers-import-export-for-wp-woocommerce' ),
												array(
													's'    => array(),
													'strong' => array(),
													'span' => array( 'class' => array() ),
												)
											),
											esc_html( $wt_uiew_bundle['price_orig'] ),
											esc_html( $wt_uiew_bundle['price_sale'] ),
											esc_html( $wt_uiew_bundle['savings'] )
										);
										?>
									</p>
									<a href="<?php echo esc_url( $wt_uiew_bundle['url'] ); ?>"
										target="_blank"
										rel="noopener noreferrer"
										class="wt-uiew-os-btn-bundle">
										<?php esc_html_e( 'View Bundle', 'users-customers-import-export-for-wp-woocommerce' ); ?>
										<span class="dashicons dashicons-external"></span>
									</a>
								</div>
								<?php if ( ! empty( $wt_uiew_bundle['illustration'] ) ) : ?>
									<div class="wt-uiew-os-bundle-illustration">
										<?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
										<img src="<?php echo esc_url( $wt_uiew_img_base . '/' . $wt_uiew_bundle['illustration'] ); ?>"
											alt="<?php echo esc_attr( $wt_uiew_bundle['title'] ); ?>">
									</div>
								<?php endif; ?>
							</div>
						<?php endif; ?>

						<?php /* -- Standalone card (e.g. EMA App) — renders AFTER the bundle, per Figma order -- */ ?>
						<?php
						if ( ! empty( $wt_uiew_cat['standalone'] ) ) :
							$wt_uiew_solo = $wt_uiew_cat['standalone'];

							/*
							 * Tri-state install/active check:
							 *   active         → hide banner
							 *   installed only → show "Activate" button (nonce-protected activate URL)
							 *   not installed  → show default "Try Now" button
							 *
							 * is_plugin_active() is guaranteed available here — required at the top of the file.
							 */
							$wt_uiew_solo_plugin_file  = isset( $wt_uiew_solo['plugin_file'] ) ? $wt_uiew_solo['plugin_file'] : '';
							$wt_uiew_solo_is_active    = $wt_uiew_solo_plugin_file && is_plugin_active( $wt_uiew_solo_plugin_file );
							$wt_uiew_solo_is_installed = $wt_uiew_solo_plugin_file && file_exists( WP_PLUGIN_DIR . '/' . $wt_uiew_solo_plugin_file );

							if ( ! $wt_uiew_solo_is_active ) :
								?>
							<div class="wt-uiew-os-standalone">
								<div class="wt-uiew-os-standalone-content">
									<div class="wt-uiew-os-standalone-header">
										<?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
										<img class="wt-uiew-os-standalone-icon"
											src="<?php echo esc_url( $wt_uiew_img_base . '/' . $wt_uiew_solo['icon'] ); ?>"
											alt="<?php echo esc_attr( $wt_uiew_solo['name'] ); ?>">
										<h3 class="wt-uiew-os-standalone-name"><?php echo esc_html( $wt_uiew_solo['name'] ); ?></h3>
									</div>
									<p class="wt-uiew-os-standalone-desc"><?php echo esc_html( $wt_uiew_solo['desc'] ); ?></p>
									<?php if ( $wt_uiew_solo_is_installed && current_user_can( 'activate_plugins' ) ) : ?>
										<?php
										$wt_uiew_solo_activate_url = wp_nonce_url(
											self_admin_url( 'plugins.php?action=activate&plugin=' . rawurlencode( $wt_uiew_solo_plugin_file ) ),
											'activate-plugin_' . $wt_uiew_solo_plugin_file
										);
										?>
										<a href="<?php echo esc_url( $wt_uiew_solo_activate_url ); ?>"
											class="wt-uiew-os-btn-premium wt-uiew-os-btn-premium--block">
											<?php esc_html_e( 'Activate', 'users-customers-import-export-for-wp-woocommerce' ); ?>
										</a>
									<?php else : ?>
										<a href="<?php echo esc_url( $wt_uiew_solo['url'] ); ?>"
											target="_blank"
											rel="noopener noreferrer"
											class="wt-uiew-os-btn-premium wt-uiew-os-btn-premium--block">
											<?php esc_html_e( 'Try Now', 'users-customers-import-export-for-wp-woocommerce' ); ?>
										</a>
									<?php endif; ?>
								</div>
								<?php if ( ! empty( $wt_uiew_solo['screenshot'] ) ) : ?>
									<div class="wt-uiew-os-standalone-screenshot">
										<?php // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage ?>
										<img src="<?php echo esc_url( $wt_uiew_img_base . '/' . $wt_uiew_solo['screenshot'] ); ?>"
											alt="<?php echo esc_attr( $wt_uiew_solo['name'] ); ?>">
									</div>
								<?php endif; ?>
							</div>
								<?php
							endif;
						endif;
						?>

					</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>
</div>
