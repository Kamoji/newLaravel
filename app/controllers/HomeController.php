<?php

class HomeController extends BaseController {
    public function home() {

        /*
         * Mail::send('emails.auth.test', array('name' => 'Bart'), function($message) {
           $message->to('bartvvenrooij@gmail.com', 'Bart van Venrooij')->subject('Test email');
           });
         */

        return View::make('home');
    }

}
