<?php
namespace UkraineComUa\Adapters;

abstract class BaseAdapter {

	protected $authLogin;

	protected $authToken;

	protected $format = 'json';

	public function __construct($authLogin, $authToken, $format = 'json') {
		$this->authLogin = $authLogin;
		$this->authToken = $authToken;
		$this->format = $format;
	}

	protected function formatContent(array $data) {
		$response = [
			'auth_login' => $this->authLogin,
			'auth_token' => $this->authToken,
			'format' => $this->format
		];

		/* @TODO here needs to be proper setting of fields */
		foreach ($data as $key => $value) {
			$response[$key] => $value;
		}
	}

}