<?php
/* 访问控制 */
defined('IN_ECTOUCH') or die('Deny Access');

class mointeModel extends baseModel {

	public function get_em_desc($name){
		switch ($name) {
			case 'liugu':
				return "Frontend Software Enginneer";
				break;
			case 'rankai':
				return "Product Manager";
				break;
			case 'yuhongjie':
				return "xx";
				break;
			default:
				return "not found";
				break;
		}
	}
	
}
