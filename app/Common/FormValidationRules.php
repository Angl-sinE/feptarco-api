<?php
/**
 * Created by PhpStorm.
 * User: aflores
 * Date: 11/8/19
 * Time: 3:47 PM
 */

namespace App\Common;

class FormValidationRules
{
	protected static $rules = [
		'common' => [],
		'athlete' => [],
		'admin' => [],
		'trainer' => [],
		'judge' => []
	];


	public function defineRulesByRole($role)
	{

	}


}