<?php
class Plugin_addingup extends Plugin{
 
  var $meta = array(
    'name'       => 'Adding Up',
    'version'    => '1.0',
    'author'     => 'Will Barker',
    'author_url' => 'http://kindleman.com.au'
  );

  public function sum(){
    $sum = 0;
    $params = $this->attributes;
    $numbers_array = explode(' ',$this->fetchParam('numbers', ''));
    foreach ($numbers_array as $p){ 
      $sum = $sum + (int)$p  ;
    }
    return $sum;
  }
    
}
