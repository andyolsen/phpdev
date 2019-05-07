<?php
interface Freezable 
{
  function freeze() : void;
  function unfreeze() : void;
}

interface Loggable 
{
  const LOGPATH = "//server/logs/logs.txt";

  function logBrief() : void;
  function logVerbose() : void;
}

class Calculator implements Freezable, Loggable 
{
  // Implementation of Freezable.
  public function freeze() : void { /* TODO */ }
  public function unfreeze() : void { /* TODO */ }

  // Implementation of Loggable.
  public function logBrief() : void  { /* TODO */ }
  public function logVerbose() : void { /* TODO */ }

  // Plus other members, as for a normal class
}

?>