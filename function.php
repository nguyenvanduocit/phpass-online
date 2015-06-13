<?php
function send_json($data){
	@header( 'Content-Type: application/json; charset=utf8');
	echo json_encode($data);
	die();
}
function generate_password($password){
	require_once __DIR__.'/lib/PasswordHash.php';
	$wp_hasher = new PasswordHash( 8, true );
	$hashed = $wp_hasher->HashPassword( $password );
	return $hashed;
}
function ajax_handler(){
	if(!isset($_POST['password'])){
		send_json(array(
			'success'=>false,
			'msg'=>'Your have to provice the new password.'));
	}
	else{
		$password = $_POST['password'];
		$new_password = generate_password($password);
		send_json(array(
			'success'=>true,
			'msg'=>'Success',
			'data'=>$new_password
		));
	}
}