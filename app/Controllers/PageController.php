<?php

namespace App\Controllers;

use Dabl\View\View;
use RedBeanPHP\R as R;

class PageController {

    public function __construct(){
		View::addDirectory(ROOT.'/app/Views');
		R::setup( 'sqlite:'.SQLOCATION );
    }
    public function home(){
		$users = R::getAll( 'SELECT * from yay' );
		\Dabl\View\View::load('home', ['users'=>$users]);
	}
	public function getAdd(){
		\Dabl\View\View::load('post');
	}
	public function postAdd(){
	    $user = R::dispense( 'yay' );
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
        $id = R::store( $user );
		header('Location:/');
	    exit;
	}
	public function getEdit($url){
		$id=$url;
		$users = R::load( 'yay', $id);
		\Dabl\View\View::load('edit', ['users'=>$users]);
	}
	public function postEdit($url){
	    $users = R::load( 'yay', $url );
    	$users->name=$_POST['name'];
    	$users->email=$_POST['email'];
    	R::store($users);
    	header("Location:/");
	}
	public function delete($url){
    	$users = R::load( 'yay', $url );
    	R::trash( $users);
		header("Location:/");
	}
}
