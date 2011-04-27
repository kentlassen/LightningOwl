<?php

class Model_Writing extends Model {

	
	public function create_note($note_id, $user_id, $type, $title, $content, $html_content)
	{
		DB::query('INSERT INTO notes SET note_id="$note_id", user_id="$user_id", $date=NOW(), $update=NOW(), type="$type", title="$title", content="$content", html_content="$html_content"');
	}
	
	public function delete_note($note_id, $user_id, $type, $title, $content, $html_content)
	{
		DB::query('DELETE FROM notes WHERE note_id="$note_id"');
	}
	
	public function _note($note_id, $user_id, $type, $title, $content, $html_content)
	{
		DB::query('UPDATE notes SET $date=NOW(), $update=NOW(), type="$type", title="$title", content="$content", html_content="$html_content"');
	}
	
}

/* End of file registration.php */