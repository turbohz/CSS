<?php 

namespace CSS\Bundle\LessPHPBundle;

require_once __DIR__ . '/Core/lessc.inc.php';

class Compiler {
	
	protected $lessc;
	
	public function __construct()
	{
		$this->lessc = new \lessc();
	}
	
	public function compile($input) {
		
		return $this->lessc->parse($input);
	}
}
