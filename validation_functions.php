
<?php

function valid_email($email)
{
	if (!empty($email)) {

		$email_pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';
		preg_match($email_pattern, $email, $email_matches);
		if ($email_matches[0])
			return true;
	}
	return false;
}


function valid_name($name)
{
	if (!empty($name)) {

		$name_pattern = '/^[a-zA-Z ]*$/';
		preg_match($name_pattern, $name, $name_matches);
		if ($name_matches[0])
			return true;
	}
	return false;
}

function valid_pass($pass)
{
	if (!empty($pass)) {

		$pass_pattern = "/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/";
		preg_match($pass_pattern, $pass, $pass_matches);
		if ($pass_matches[0])
			return true;
	}
	return false;
}


function valid_empty_contact($fn, $ln, $email, $top, $sub)
{
	if (!empty($fn) && !empty($ln) && !empty($email) && !empty($top)) {
		if (valid_name($fn) && valid_name($ln) && valid_email($email)) {
			return true;
		} else return false;
	} else return false;
}
?>
