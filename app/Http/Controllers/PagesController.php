<?php

 namespace blog\Http\Controllers;

 class PagesController extends Controller {

 	public function getIndex(){
     return view('pages.welcome');

 	}
 	public function getAbout(){
 		 $first ='claude';
       $last ='dushime';
       $fullname=$first." ".$last;
       $email='engdushime@gmail.com';

       return view('pages.about')->withFullname($fullname)->withEmail($email);

 		
 	}
public function getContact(){

 		return view('pages.contact');
	 	}



 }