<?php
class Home extends Controller
{
    public function index()
    {
        if(isset($_SESSION['user_name'])){
            $this->view('home/command');
        }else{
            $this->view('home/login');
        }
        
    }
}