<?php
namespace ZeusElementor\Modules\Modal;

use ZeusElementor\Base\Module_Base;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

class Module extends Module_Base {

	public function get_widgets() {
		return [
			'Modal',
		];
	}

	public function get_name() {
		return 'zeus-modal';
	}
}
