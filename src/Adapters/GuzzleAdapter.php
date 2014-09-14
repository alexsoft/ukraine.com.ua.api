<?php
namespace UkraineComUa\Adapters;

class GuzzleAdapter extends BaseAdapter implements AdapterInterface {

	protected $authLogin;

	protected $authToken;

	protected $format = 'json';

	public function __construct($authLogin, $authToken, $format = 'json') {
		$this->authLogin = $authLogin;
		$this->authToken = $authToken;
		$this->format = $format;
	}

	public function post($url, array $headers = array(), $content = '')
	{
		$headers['content-type'] = 'application/json';
		$request = $this->client->post($url, $headers, $content);
		$this->response = $request->send();

		return $this->response->getBody(TRUE);
	}

}