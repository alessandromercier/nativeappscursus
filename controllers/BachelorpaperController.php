<?php

namespace app\controllers;

use yii\web\Controller;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TheoryController
 *
 * @author Jens Buysse
 */
class BachelorpaperController extends Controller {

    //put your code here

    public function actionIndex() {
        return $this->render('index');
    }

   
}
