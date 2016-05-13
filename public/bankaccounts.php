<?php

class BankAccounts {

	protected $accounts;

	public function __construct($accounts)
	{
		$this->accounts = $accounts;
	}

	public function filterBy($accountType)
	{
		return array_filter($this->accounts, function($account) use ($accountType)
		{
			return $this->isOfType($account, $accountType);
		});
	}

	public function isOfType($account, $accountType)
	{
		return $account->type() == $accountType && $account->isActive();
	}
}

class Account {

	protected $type;

	private function __construct($type)
	{
		$this->type = $type;
	}

	public static function open($type)
	{
		return new static($type);
	}

	public function type()
	{
		return $this->type;
	}

	public function isActive()
	{
		return true;
	}

}

$accounts = [
	Account::open('checking'),
	Account::open('savings'),
	Account::open('checking'),
	Account::open('savings'),
];


$accounts = new BankAccounts($accounts);

$savings = $accounts->filterBy('savings');

var_dump($savings);
