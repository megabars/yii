<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BookController
 *
 * @author Мезенцев
 */
class BookController extends Controller{
    public function actionIndex()
    {
        $model = new Book;
        
        $model->title = "Война и мир";
        $model->author = "Толстой";
        
        $model->save(false);
        
        echo 1;
    }
    //put your code here
}
