<?php
    // register
    function register(){
        $data = json_decode(file_get_contents('users.json'), true);
        $user = array(
            'id' => uniqid('', true),
            'fname' => $_REQUEST['firstname'],
            'mname' => $_REQUEST['middlename'],
            'lname' => $_REQUEST['lastname'],
            'uname' => hash('sha512', $_REQUEST['username']),
            'pass' => hash('sha512', $_REQUEST['password']),
        );
        $data[] = $user;
        $json = json_encode($data);
        if(file_put_contents('users.json', $json)){
            header ('Location: index.php?'.$_REQUEST['username'].'-registered-successfully');
        }
    }
    // login
    function login(){
        $data = json_decode(file_get_contents('users.json'), true);
        foreach($data as $index => $prop){
            if(hash('sha512', $_REQUEST['username']) == $prop['uname'] && hash('sha512', $_REQUEST['password']) == $prop['pass']){
                session_start();
                $_SESSION['user_id'] = $prop['id'];
                $_SESSION['user_fname'] = $prop['fname'];
                $_SESSION['user_mname'] = $prop['mname'];
                $_SESSION['user_lname'] = $prop['lname'];
                $_SESSION['user_uname'] = $prop['uname'];
                $_SESSION['user_pass'] = $prop['password'];
                header ('Location: homepage.php');
            }
        }
        echo 'Incorrect Username or Password';
    }
    // events---------------------------------------
    // register
    if(isset($_REQUEST['register_button'])){
        register();
    }
    // login
    if(isset($_REQUEST['login_button'])){
        login();
    }
?>