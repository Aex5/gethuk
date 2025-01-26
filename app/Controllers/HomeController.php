<?php if (!defined('GETHUK')) die ('gak boleh bang!');

class HomeController extends Controller
{
  public function index() {
    return $this->view('home');
  }
}
