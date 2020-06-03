<?php
	include("conf.inc.php");

	class PDOInstance
	{
		private static $m_instance = null;
		private $m_pdo = null;

		private function __construct()
		{
			try
			{
				$this->m_pdo = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PASSWORD);
				$this->m_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}
			catch(PDOException $e)
			{
				throw new Exception('PDO Error: '.$e->getMessage());
			}
		}

		public static function getInstance()
		{
			if(is_null(self::$m_instance))
				self::$m_instance = new self();

			return self::$m_instance;
		}
		
		public function getPDO()
		{
			return $this->m_pdo;
		}
	}
?>
