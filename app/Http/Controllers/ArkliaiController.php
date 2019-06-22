<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Traits\Navigation\AddsTraitsNavigation;

class ArkliaiController extends Controller {
  use AddsTraitsNavigation;
  public function __construct() {
    // $this->middleware('auth');

    // $this->addNavigation();
  }
  public function index() {
    $this->addNavigation();
    return view('empty', ['title' => __('P3MP'),
    'reasons' => ['abc']]);
  }
}
