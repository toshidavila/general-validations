<?php
// comment test
// test2

class ValidateFields
{
  private function setFields($value)
  {
    return $value;
  }
  
  private function emptyFields($value)
  {
    $result = 0;
    $value = $this->setFields($value);
    if(empty($value))
    {
      $result = 'El campo no puede estar vacío,';
    }
    return $result;
  }
}

?>
