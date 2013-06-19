<?php

	class Database {
		
		private static $instance = null;
		private $pdoObject;
		
		const DEFAULT_HOST = 'localhost';
		const DEFAULT_USERNAME = 'root';
		const DEFAULT_PASSWORD = '';
		const DEFAULT_DATABASE = 'nodetest';
		
		private function __construct() {
			$this->pdoObject = new PDO( 'mysql:dbname=' . self::DEFAULT_DATABASE . 
										';host=' . self::DEFAULT_HOST,
										self::DEFAULT_USERNAME, self::DEFAULT_PASSWORD );
		}
		
		public static function getInstance() {
			if( is_null( self::$instance ) ) {
				self::$instance = new Database();
			}
			
			return self::$instance;
		}
		
		public function getPdoObject() {
			return $this->pdoObject;
		}
		
	}

?>