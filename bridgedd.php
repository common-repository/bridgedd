<?php
/*
Plugin Name: BridgeDD
Plugin URI: https://bridgedd.com/support
Version: 1.4.1.7
Author: Dion Designs
Text Domain: bridgedd
Domain Path: /languages/
Description: Creates a bridge between phpBB and WordPress
*/
if (!defined('WPINC')) {
	die('ERROR 000');
}
//	+-----------------------------------------------+
//	| BridgeDD is Copyright © 2019 by Dion Designs. |
//	+-----------------------------------------------+
wp_die('<style>pre{overflow:auto}#buttondiv{margin:-45px 0 -10px;line-height:1;font-size:2em;font-weight:bold;text-align:center}</style><div id="buttondiv"><br />BridgeDD has been discontinued<br><br><br><a class="button" href="plugins.php">' . sprintf(__('&larr; Back to %s'), __('Plugins')) . '</a></div>');
