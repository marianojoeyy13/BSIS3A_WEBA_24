<?php

class Logout extends Controller
{
  public function index()
  {
    if (!Auth::logged_in()) {
      redirect('login');
    }

    Auth::logout();
    redirect('login');
  }
}