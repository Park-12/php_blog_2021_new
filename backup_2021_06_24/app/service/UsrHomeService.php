<?php
class APP__UsrHomeService {
  private APP__UsrHomeRepository $usrHomeRepository;

  public function __construct() {
    global $App__usrHomeRepository;
    $this->usrHomeRepository = $App__usrHomeRepository;
  }
}