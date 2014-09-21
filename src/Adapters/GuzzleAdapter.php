<?php
namespace UkraineComUa\Adapters;

use Guzzle\Http\Client;

class GuzzleAdapter extends BaseAdapter implements AdapterInterface {

	protected $client;

	protected $response;

	protected $exception;

	public function __construct($authLogin, $authToken, $client = NULL, $exception = NULL, $format = 'json') {
		$this->client = new Client;

		$this->client
			// Set default Bearer header for all requests
			->setDefaultOption('headers/Authorization', sprintf('Bearer %s', $authToken));

		parent::__construct($authLogin, $authToken, $format);
	}

	public function post($url, array $headers = [], array $content = [])
	{
		$headers['content-type'] = 'application/json';
		$request = $this->client->post($url, $headers, $content);
		$this->response = $request->send();

		return $this->response->getBody(TRUE);
	}

}