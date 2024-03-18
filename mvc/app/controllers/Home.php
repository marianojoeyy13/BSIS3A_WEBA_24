<?php

class Home extends Controller 
{
    
    public function index()
    {
        $user = new User();
        $arr['firstname'] = 'jamil';
        $rows = $user->update('1', $arr);
        show($rows);

        $this->view('home');
    }
}