<?php
	require_once 'config/config.php';

	class MySqlDatabaseClass
	{
		//Fields
		private $db_connection;

		/* Dit is de constructor van de MySqlDatabaseClass
		 * Een constructor herken je in PHP aan de naam. De naam is altijd
		 *  __construct
		 */
		public function __construct()
		{
			// Velden roep je aan met $this->naam_van_het_veld_zonder_$
			// Er wordt hier een verbinding gemaakt met de mysql-server
			$this->db_connection = mysqli_connect(SERVERNAME,
												 USERNAME,
												 PASSWORD);
			// Er wordt hier een database geselecteerd
			mysqli_select_db($this->db_connection, DATABASE) or
				die('MySqlDatabaseClass, database niet geselecteerd');
		}

		// De functie krijgt als argument een query mee.
		// Deze wordt door de mysql_query($query) afgevuurd op de database
		public function fire_query($query)
		{
			$result = mysqli_query($this->db_connection, $query)
						or die('MySqlDatabase: '.mysqli_error($this->db_connection));
			return $result;
		}
	}

	// Maak nu een instantie van de net gedefinieerde class.
	$database = new MySqlDatabaseClass();
?>

