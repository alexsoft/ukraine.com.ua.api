<?php
namespace UkraineComUa\Api;

use UkraineComUa\Api\Database\User;

class Database extends BaseApi {

	public function user() {
		return new User;
	}

}