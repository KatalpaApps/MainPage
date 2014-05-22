<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FormsController
 *
 * @author tosiek
 */
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

class FormsController extends AppController {

    //put your code here
    function process() {
        $form = $_POST;
        $message = "";
        foreach ($form as $key => $value) {
            $value = strip_tags($value);
        }
        foreach ($form as $key => $value) {
            if (isset($value)) {
                $message .= "<h1>" . $key . "</h1><br>" . $value;
            }
        }
        $Email = new CakeEmail();
        $Email->from(array($form['email'] => 'Katalpa Contact Form'));
        $Email->to('teodor.busse@gmail.com');
        $Email->subject('Formularz kontaktowy katalpy');
        $Email->send($message);
    }

}
