<?php
namespace UkraineComUa\Api;

abstract class BaseApi {

	const ENDPOINT = 'https://cp.ukraine.com.ua/tools/api.php';

	protected $authLogin;

	protected $authToken;

	protected $format;

	protected $class;

	protected $method;

}