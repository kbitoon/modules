<?php namespace Pingpong\Modules\Generators;

use Pingpong\Modules\Contracts\GeneratorInterface;

abstract class Generator implements GeneratorInterface {

	/**
	 * Generate something.
	 * 
	 * @return mixed 
	 */
	public function generate() {}

}