<?php
namespace UkraineComUa\Adapters;

class GuzzleAdapter extends BaseAdapter implements AdapterInterface {

	public function post($url, array $headers = [], array $content = [])
	{
		$headers['content-type'] = 'application/json';
		$request = $this->client->post($url, $headers, $content);
		$this->response = $request->send();

		return $this->response->getBody(TRUE);
	}

}