<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
      if(Auth::user()->hasRole('admin')){
        return view('dashboard');
      }elseif (Auth::user()->hasRole('seniorcitezen')) {
        return view('seniorcitezendsb');
      }elseif (Auth::user()->hasRole('pwd')) {
        return view('pwddsb');
      }elseif (Auth::user()->hasRole('soloparent')) {
        return view('soloparentdsb');
      }elseif (Auth::user()->hasRole('kasambahay')) {
        return view('kasambahaydsb');
      }elseif (Auth::user()->hasRole('kalipi')) {
        return view('kalipidsb');
      }
    }
}
