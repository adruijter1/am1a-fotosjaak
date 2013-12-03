<?php
	require_once("MySqlDatabaseClass.php");

	// Hieronder de classdefinitie van de LoginClass
	class LoginClass
	{
		//Fields
		private $id;
		private $email;
		private $password;
		private $userrole;
		private $activated;
		private $activationdate;
		
		// Properties
		public function get_id() { return $this->id;}
		
		//Constructor
		public function __construct()
		{
			
		}
		
		public function find_by_sql($query)
		{
			// Met global maak je het database-objct uit de MySqlDatabaseclass
			// bruikbaar binnen de find_by_sql method
			global $database;
			
			//Vuur de query af op de database
			$result = $database->fire_query($query);
			
			/* Dit is het array waar alle LoginClassobjecten in worden gestopt
			 * Elk LoginClassobject bevat een gevonden record uit de database
			 * Vindt de query 3 records dan zitten er 3 LoginClassobjecten in 
			 * het array $object_array. 
			 */
			$object_array = array();
			
			while ( $row = mysql_fetch_array($result))
			{
				// Maak iedere while ronde een LoginClassobject aan
				$object = new LoginClass();
				// Stop per record ieder databaseveld in het LoginClassobject
				// veld
				$object->id				=	$row['id'];
				$object->email			=	$row['email'];
				$object->password		=	$row['password'];
				$object->userrole		=	$row['userrole'];
				$object->activated		=	$row['activated'];
				$object->activationdate	=	$row['activationdate'];
				// Stop het net gemaakte LoginClassobject in het $object_array
				$object_array[] = $object;			
			}
			return $object_array;
		}
	}
?>