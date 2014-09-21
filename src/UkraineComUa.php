<?php
namespace UkraineComUa;

use \UkraineComUa\Api\Database;
use \UkraineComUa\Api\Database\User;
use \UkraineComUa\Api\Mailbox;
use \UkraineComUa\Adapters\AdapterInterface;

class UkraineComUa {

	protected $adapter;

	public function __construct(AdapterInterface $adapter) {
		$this->adapter = $adapter;
	}

	public function database() {
		return new Database($this->adapter);
	}

	public function database_user() {
		return new User($this->adapter);
	}

	public function mailbox() {
		return new Mailbox($this->adapter);
	}

}
