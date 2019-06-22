<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Traits\Navigation\AddsTraitsNavigation;

class DiceController extends Controller
{
  use AddsTraitsNavigation;


  public function __construct() {
    // $this->middleware('auth');
    }
  public function index() {
    $this->addNavigation();
    
    return view('dice', ['title' => __('DICE'),
    'random' => rand(1,6)]);
    }
}
