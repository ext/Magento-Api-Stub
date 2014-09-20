<?php

class MyCompany_MyModule_Model_Api extends Mage_Api_Model_Resource_Abstract {
	public function my_method_name(){
		return array(
			array('my_int' => 7, 'my_string' => 'lorem ipsum'),
			array('my_int' => 9, 'my_string' => 'dot sit amet'),
		);
	}
}
