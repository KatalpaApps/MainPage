<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppModel', 'Model');

class Form extends AppModel{

    public $useTable = false;

public function validate($form)
{
   echo 'git';
}
}