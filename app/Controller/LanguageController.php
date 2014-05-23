<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
App::uses('AppController', 'Controller');
/**
 * Description of LanguageConroller
 *
 * @author tosiek
 */
class LanguageController extends AppController{
    //put your code here
    function index(){
       $lang = $this->request->query['lang'];
       $site = $this->request->query['site'];
       if($lang == "pl")
       {
           $this->Session->write('Config.language', 'pl');
       }
       if($lang == "de")
       {      
           $this->Session->write('Config.language', 'de');
       }
       if($lang == "en"){       
           $this->Session->write('Config.language', 'en');
       }
       $url = "../".$site; 
       return $this->redirect($url);     
    }
}
