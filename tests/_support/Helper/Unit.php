<?php
namespace Helper;

// here you can define custom actions
// all public methods declared in helper class will be available in $I

class Unit extends \Codeception\Module
{
	public function getDSN()
	{
		return $this->getModule('Db')->_getConfig('dsn');
	}

	public function getPassword()
	{
		return $this->getModule('Db')->_getConfig('password');
	}

	public function getUser()
	{
		return $this->getModule('Db')->_getConfig('user');
	}

	public function getDbName()
	{
		return $this->getModule('Db')->_getConfig('dbname');
	}

	public function getHost()
	{
		return $this->getModule('Db')->_getConfig('host');
	}

	public function getCharset()
	{
		return $this->getModule('Db')->_getConfig('charset');
	}
}
