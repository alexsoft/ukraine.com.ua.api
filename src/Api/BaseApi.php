<?php
namespace UkraineComUa\Api;

use \UkraineComUa\Adapters\AdapterInterface;

abstract class BaseApi {

	const ENDPOINT = 'https://cp.ukraine.com.ua/tools/api.php';

	protected $adapter;

	public function __construct(AdapterInterface $adapter) {
		$this->adapter = $adapter;
	}

}