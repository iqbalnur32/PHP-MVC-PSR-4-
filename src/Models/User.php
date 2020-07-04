<?php 

namespace App\Models;
use App\Database\DB;

class User
{
	private $db;
	private $table = "users";
	private $table_profile = "users_profile";

	public function __construct()
	{
		$this->db = new DB;
	}

	public function getAll()
	{
		$this->db->query("
			SELECT * FROM {$this->table} 
			INNER JOIN {$this->table_profile}
			ON {$this->table}.id_users = {$this->table_profile}.id_profile
		");
		return $this->db->fetchAll();
	}

	public function insert($username, $email, $password)
	{
		$query = "INSERT INTO {$this->table} (username, email, password) VALUES (:username, :email, :password)";
		$this->db->query($query);
		$this->db->bind(":username", $username);
		$this->db->bind(":email", $email);
		$this->db->bind(":password", $password);

		return $this->db->execute();
	}

	public function getWhereEmail($id_users)
	{
		$query = "SELECT * FROM {$this->table} WHERE id_users = :id_isers";
		$this->db->query($query);
		$this->db->bind(':id_users', $id_users);
		return $this->db->fetch();
	}

	public function updateWhereId($id_users, $name, $email)
	{
		$query = "UPDATE {$this->table} SET username = :username, email = :email, password = :password  WHERE id_users = :id_users";
		$this->db->query($query);
		$this->db->bind(':id_users', $id_users);
		$this->db->bind(':username', $username);
		$this->db->bind(':email', $email);
		$this->db->bind(':password', $password);

		return $this->db->execute();
	}

	public function insert2Table()
	{
		$query = "
		INSERT INTO {$this->table} (username, password, email, level_id)
		SELECT username, password, email
		FROM {$this->table} INNER JOIN {$this->table_profile} ON ON {$this->table}.id_users = {$this->table_profile}.id_profile
		";	
	}
}

?>