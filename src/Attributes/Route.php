<?php
	#[Attribute(Attribute::TARGET_METHOD)]
	class Route{

		/**
		* @param string $method The HTTP method for this route
		* @param string $uri The URI this route will match
		* @param bool $isRegex (Optional) Flag for whether the URI is a regular expression
		*/
		public function __construct(public string $method, public string $uri, public bool $isRegex = false){}
	}
