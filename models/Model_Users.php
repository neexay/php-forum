<?php
require 'models/Model_Base.php';
Class Model_Users Extends Model_Base {

public $id, $email,$first_name,$last_name;
public $about,$date_of_reg,$password,$settings;

public function fieldsTable(){

    return array(
    'id' => 'Id',
    'email' => 'email',
    'first_name' => 'first_name',
    'last_name' => 'last_name',
    'about' => 'about',
    'date_of_reg' => 'date_of_reg',
    'password' => 'password',
    'settings' => 'settings',
    );
    }

}