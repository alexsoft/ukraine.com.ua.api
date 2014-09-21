<?php

namespace spec\UkraineComUa;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class UkraineComUaSpec extends ObjectBehavior
{

	public function it_is_initializable() {
		$this->shouldHaveType('UkraineComUa\UkraineComUa');
	}

	public function it_should_return_a_database_instance() {
		$this->database()->shouldBeAnInstanceOf('UkraineComUa\Api\Database');
	}

	public function it_should_return_a_database_user_instance() {
		$this->database_user()->shouldBeAnInstanceOf('UkraineComUa\Api\Database\User');
	}

	public function its_database_instance_should_return_a_user_instance() {
		$this->database()->user()->shouldBeAnInstanceOf('UkraineComUa\Api\Database\User');
	}

	public function it_should_return_a_mail_instance() {
		$this->mailbox()->shouldBeAnInstanceOf('UkraineComUa\Api\Mailbox');
	}

}
