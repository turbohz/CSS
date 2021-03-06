<?php 

namespace CSS\Bundle\CssMinBundle;

require_once __DIR__ . '/Core/CssMin.php';

class Minifier {
	
	protected $cssmin;
	
	public function __construct()
	{
		$this->cssmin = new \CssMin();
	}
	
	public function minify( $input, $filters = null, $plugins = null ) {
		
		return $this->cssmin->minify( $input, $filters, $plugins );
	}
}
