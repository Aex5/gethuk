<?php if (!defined('GETHUK')) die('gak boleh bang!');

class AboutController extends Controller
{
  public function index()
  {
    $this->view('about');
  }
}
