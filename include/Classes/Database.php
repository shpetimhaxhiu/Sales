
<?php
	/**
	* Database Class
	*/
	class Database
	{
		public function lidhja()
		{
      $db = mysqli_connect('localhost','root','njeriop123!@#', 'test2');
			if (mysqli_connect_errno($db)) {
			    return mysqli_connect_error();
			} else {
				return $db;
			}
		}
	}
 ?>
