<?php
require 'models/Model_Base.php';
Class Model_Users Extends Model_Base {

public $id;
public $name;
public $email;
public $password;

public function fieldsTable(){

return array(
'id' => 'Id',
'name' => 'name',
'email' => 'email',
'password' => 'password'
);
}

}