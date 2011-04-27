<?php

class Model_Registration extends Model {

	
	public function create_user($user_id, $first_name, $last_name, $email, $username, $password)
	{
		DB::query('INSERT INTO users SET user_id="$user_id", first_name="$first_name", last_name="$last_name", email="$email", username="$username", password="$password"');
	}
	
	public function delete_user($user_id)
	{
		DB::query('DELETE FROM users WHERE user_id="$user_id"');
	}
	
	public function update_user($user_id, $first_name, $last_name, $email, $username, $password, $avatar_url)
	{
		DB::query('UPDATE users SET user_id="$user_id", first_name="$first_name", last_name="$last_name", email="$email", username="$username", password="$password", avatar_url="$avatar_url"');
	}
	
}

/* End of file registration.php */