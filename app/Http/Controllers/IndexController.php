<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\Navigation\AddsTraitsNavigation;

class IndexController extends Controller
{
  use AddsTraitsNavigation;

   public function index() {
     return view('index');
   }

   public function __construct() {
     $this->addNavigation();
   }
}
