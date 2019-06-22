<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
// use App\Traits\Navigation\AddsGuestNavigation;
// use App\Traits\Navigation\AddsArkliaiNavigation;

class PostController extends Controller {
  // use AddsGuestNavigation;
  // use AddsArkliaiNavigation;
  public function __construct() {
    // $this->addNavigation();
    // $this->middleware('auth');
    // $this->addNavigation();
    }
    public function index() {
      return view('empty', ['title' => __('P3MP'),
    'reasons' => ['abc']]);
    }
}
