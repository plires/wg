<?php

abstract class Repositorio {
  protected $repoContacts;
  protected $repoNewsletter;

  public function getRepoContacts() {
    return $this->repoContacts;
  }

  public function getRepoNewsletter() {
    return $this->repoNewsletter;
  }

}

?>