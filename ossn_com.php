<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */

/**
 * Email login component initialize
 * 
 * @return void;
 */
function email_login_init() {
		$path = ossn_route()->com . "StrictEmailLogin/actions/";
		
		$actions = array();
		$actions[] = 'user/login';
		$actions[] = 'admin/login';
		
		foreach($actions as $action){
			ossn_unregister_action($action);
			ossn_register_action($action, $path . $action . '.php');
		}
}

ossn_register_callback('ossn', 'init', 'email_login_init');
