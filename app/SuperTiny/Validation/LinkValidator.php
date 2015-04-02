<?php namespace SuperTiny\Validation;

class LinkValidator extends Validator
{
	protected static $rules = [

		'url' 	=> 'Required|Url|Unique:links,url',
		'hash'	=> 'Required|Unique:links,hash'
	];
}

?>