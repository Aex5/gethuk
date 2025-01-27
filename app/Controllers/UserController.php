<?php if (!defined('GETHUK')) die ('gak boleh bang!');

class UserController extends Controller {

 public function index() {
    $user = $this->model('User');
    $data = $user->userGet();

    return $this->view('user', ['users' => $data]);
  }
}
