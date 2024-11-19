<?php
class Account{
    public function __construct(
        public int      $number,
        public string   $type,
        public float    $balance = 0.0 
    ) {}

    public function deposit($money_in){
        $this->balance += $money_in;
    }
    public function withdraw($money_out){
        $this->balance -= $money_out; 
    }

    public function getBalance(): float
    {
        return $this->balance;
    }
}

class Customer{
    public function __construct(
        public string $forename,
        public string $surname,
        public string $email,
        public string $password,
        public array  $accounts
    ) {}
    public function getFullName(){
        return $this->forename . ' ' . $this->surname;
    }
}

$accounts = [new Account(20489446, 'Checking', -20),
             new Account(20148896, 'Savings', 380),];

$customer = new Customer('Ivy', 'Stone', 'ivy@eg.link', 'password', $accounts);
?>

<h2>Name: <b><?= $customer->getFullName()  ?></b></h2>