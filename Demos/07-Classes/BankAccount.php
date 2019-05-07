<?php
class BankAccount 
{
  private $accountHolder;
  private $id; 
  private $balance = 0.0; 
  private $creationTimestamp;      

  function __construct(float $initialBalance = 0.0) 
  {
    $this->balance = $initialBalance;
    $this->creationTimestamp = date("Y-m-d");
  }

  function __destruct() 
  {
    echo "Farewell, your closing balance is " . $this->balance;
  }

  public function __get($propertyName) 
  {
    if ($propertyName == "status") 
      return $this->balance < 0 ? "Overdrawn" : "In Credit"; 
    else 
      return $this->$propertyName;
  }

  public function __set($propertyName, $value) 
  {
    if ($propertyName == "balance") 
      throw new Exception("You can't set balance directly");
    else 
      $this->$propertyName = $value;
  }

  public function __toString() 
  {
    return $this->accountHolder . ", balance £" . $this->balance;
  }

  public function __debugInfo() {
    return [
      "balance"       => $this->balance,
      "accountHolder" => $this->accountHolder,
      "status"        => $this->balance < 0 ? "Overdrawn" : "In Credit"
    ];
  }  

  private static $nextId = 1;
  public static $monthlyFee = 1.50;
  public const OVERDRAFT_LIMIT = -1000;

  public static function getNextId() 
  {
    return self::$nextId;
  }

  public function getAccountHolder() : string 
  {
    return $this->accountHolder;
  }

  public function setAccountHolder(string $ah) : void 
  {
    $this->accountHolder = $ah;
  }

  public function getBalance() : float
  {
    return $this->balance;
  }

  public function deposit(float $amount) : float 
  {
    $this->balance += $amount;
    return $this->balance;
  }

  public function withdraw(float $amount) : float
  {
    $this->balance += $amount;
    return $this->balance;
  }

}
?>