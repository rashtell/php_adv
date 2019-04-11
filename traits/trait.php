<?php

trait Log
{
    protected function Log($msg)
    {
      echo "{$msg}\n";
    }
}

class Table{
  use Log;

  public function save(){
    $this->Log('save start');
  }
}

(new Table())->save();