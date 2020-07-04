<?php 

namespace App\Models;
use App\Database\DB;

class Auth
{
	private $db;
	private $table = "users";

	public function __construct()
	{
		$this->db = new DB;
		session_start();
	}

	public function login($email ,$password)
	{
		$query = "SELECT * FROM {$this->table} WHERE email = :email AND password = :password" ;

		$this->db->query($query);
		$this->db->bind(':email', $email);
		$this->db->bind(':password', $password);
		$data = $this->db->fetch();

		/*if (verify($password, $data['password'])) {
			print_r($password);
		}else{
			print_r('Gagal');
		}*/
		if ($data['password']) {

			$_SESSION = [
				'id_users' => $data['id_users'],
				'username' => $data['username'],
				'email' => $data['email']
			];
			return redirect('admin/index');
		}else{
			errors('Gagal');
		}
	}
}

?>