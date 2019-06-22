<?php

namespace App\Traits\Navigation;


use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
/**
 *
 */
trait AddsTraitsNavigation {

  protected $navigation = [];

  protected function addNavigation()
  {
    if (Auth::check()) {
      $this->buildUserNavigation();
    } else {
      $this->buildGuestNavigation();
    }
    foreach ($this->navigation as &$link) {
      $link['class'] = Request::is($link['href']) ? 'active':'';
    }
    View::share('navigation', $this->navigation);
  }

  protected function buildGuestNavigation() {
    $this->navigation = [
      [
        'href' => '/post',
        'title' => 'Post'
      ],
      [
        'href' => '/arkliai',
        'title' => 'Arkliai'
      ]
    ];
  }

  protected function buildUserNavigation() {
    $this->navigation = [
      [
        'href' => '/post',
        'title' => 'Post'
      ],
      [
        'href' => '/arkliai',
        'title' => 'Arkliai'
      ],
      [
        'href' => 'dice',
        'title' => 'Dice'
      ]
    ];
  }
}

 ?>
