<?php
	class Person{
		private $name;
		private $email;
		private static $ageLimit = 40;

		public function __construct($name, $email){
			$this->name=$name;
			$this->email=$email;
			echo __CLASS__ .' Created!!!<br>';
		}

		public function __destruct(){
			echo __CLASS__ .' destroyed!!!<br>';
		}

		public function setName($name){
			$this->name=$name;
		}

		public function getName(){
			return $this->name.'<br>';
		}

		public function setEmail($email){
			$this->email=$email;
		}

		public function getEmail(){
			return $this->email;
		}

		public static function getAgeLimit(){
			return self::$ageLimit;
		}
	}

	#This is Static Props method
	#echo Person::ageLimit;

	#This is Static Private Method
	echo Person::getAgeLimit().'<br>';

	//$person1 = new Person('John Doe','kaveendra.oshan@gmail.com');

	//$person1->setName('John Doe');

	//echo $person1->getName().'<br>';

	//$person1->name = "John Doe";
	//echo $person1->name;

	class Customer extends Person{
		private $balance;

		public function __construct($name,$email,$balance){
			parent::__construct($name,$email,$balance);
			$this->balance = $balance;
			echo 'A new '.__CLASS__.' has been created! <br>';
		}

		public function setBalance($balance){
			$this->balance = $balance;
		}

		public function getBalance(){
			return $this->balance.'<br>';
		}
	}

	$customer1 = new Customer('Kaveendra','kaveendra.oshan@gmail.com',4500);
	echo $customer1->getName();
	echo $customer1->getBalance();