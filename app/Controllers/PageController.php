<?php

namespace App\Controllers;

use Dabl\View\View;
use RedBeanPHP\R as R;

class PageController {

    public function __construct(){
		View::addDirectory(ROOT.'/app/Views');
		R::setup('sqlite:'.SQLOCATION);
    }
    public function home(){
		$users = R::getAll( 'SELECT * from user_bean' );
		\Dabl\View\View::load('home', ['users'=>$users]);
	}
	public function getAdd(){
		\Dabl\View\View::load('post');
	}
	public function postAdd(){
	    $user = R::dispense( 'user_bean' );
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $id = R::store( $user );
		header('Location:/');
	    exit;
	}
	public function getEdit($url){
		$id=$url;
		$users = R::load( 'user_bean', $id);
		\Dabl\View\View::load('edit', ['users'=>$users]);
	}
	public function postEdit($url){
	    $users = R::load( 'user_bean', $url );
    	$users->name=$_POST['name'];
    	$users->email=$_POST['email'];
    	R::store($users);
    	header("Location:/");
	}
	public function delete($url){
    	$users = R::load( 'user_bean', $url );
    	R::trash( $users);
		header("Location:/");
	}
}
