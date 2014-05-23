<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
App::uses('Controller', 'Controller');
App::uses('GeoIpLocation', 'GeoIp.Model');


/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $components = array('Session');
    public $layout = 'katalpa';

    public function beforeFilter() {
     
        if (!$this->Session->check('Config.language')) {
            $GeoIpLocation = new GeoIpLocation();
            $ipAdress = $this->request->clientIp();
            $location = $GeoIpLocation->find($ipAdress);
            
            if ($location == "pl") {
                Configure::write('Config.language', 'pl');
                $this->Session->write('Config.language', 'pl');
            }
            if ($location == "de" || $location == "at" || $location == "ch")
            {
                Configure::write('Config.language', 'de');
                $this->Session->write('Config.language', 'de');
            }
                else {
                $this->Session->write('Config.language', 'en');
            }
        }
    }
   

}
