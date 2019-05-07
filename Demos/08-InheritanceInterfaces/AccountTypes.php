<?php
abstract class BankAccount 
{
  private $accountHolder;
  private $id; 
  private $balance = 0.0; 
  private $creationTimestamp;      

  public abstract function getTermsAndConditions() : string;
  public abstract function getGuaranteedLimit() : float;

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

final class SavingsAccount extends BankAccount 
{
  private $premium;
  private $goneOverdrawn;

  private const BASIC_INTEREST_RATE   = 0.015;
  private const PREMIUM_INTEREST_RATE = 0.030;
  private const GUARANTEED_LIMIT      = 85000;

  public function applyInterest() 
  {
    if ($this->balance < 0) 
        throw new Exception("No interest if you're overdrawn!");
    elseif ($this->premium && !$this->goneOverdrawn) 
        $this->balance *= (1 + self::PREMIUM_INTEREST_RATE);
    else 
        $this->balance *= (1 + self::BASIC_INTEREST_RATE);

    $this->goneOverdrawn = false;
  }

  public function __construct(bool $prem, float $initBal = 0.0) 
  {
    parent::__construct($initBal);
    $this->premium = $prem;
  } 

  public function __destruct() 
  {
    echo ($this->premium ? "Premium" : "Normal") . " account closing";
    parent::__destruct();
  }   

  public function withdraw(float $amount) : float
  {
    parent::withdraw($amount);
    if ($this->balance < 0) 
    {
      $this->goneOverdrawn = true;
    }
    return $this->balance;
  }

  public function __toString() 
  {
    $str = parent::__toString() . "," .
           ($this->premium ? "premium, " : "normal, ") .
           ($this->goneOverdrawn ? "gone overdrawn" : "not gone overdrawn");
    return $str;
  }

  public function getTermsAndConditions() : string { return "some Ts-and-Cs"; }
  public function getGuaranteedLimit() : float { 75000; }

  public final function calculateUniqueCode() : string
  {
    return "ImagineThisIsAUniqueCode:-)";
  }
}

?>