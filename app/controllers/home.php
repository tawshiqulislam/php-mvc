<?php

class Home extends Controller{

    protected $user;
    public function __construct(){
        $this->user = $this->model('User');
    }

    public function index($name = ''){
        // echo "home/index";
        $user = $this->user;
        $user->name = $name;
        // echo $user->name;

        $this->view('home/index', ['name' => $user->name]);
    }

    public function create($username='', $email=''){
        $this->user->create([
            'username' => $username,
            'email' => $email
        ]);
    }



    public function test(){
        echo "App > Controllers > Home.php > function test() excuted";
    }
}

?>