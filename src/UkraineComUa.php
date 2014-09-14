<?php
namespace UkraineComUa;

use \UkraineComUa\Api\Database;
use \UkraineComUa\Api\Database\User;
use \UkraineComUa\Api\Mailbox;

class UkraineComUa {

	public function __construct() {

	}

	public function database() {
		return new Database;
	}

	public function database_user() {
		return new User;
	}

	public function mailbox() {
		return new Mailbox;
	}

}
