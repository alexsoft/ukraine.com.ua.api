<?php
namespace UkraineComUa\Adapters;

interface AdapterInterface {
	public function get($url);

	public function post($url, array $headers = array(), $content = '');
}