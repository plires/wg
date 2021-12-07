<?php

require_once("repoNewsletter.php");

class RepoNewsletterSQL extends RepoNewsletter
{
  protected $conexion;

  public function __construct($conexion) 
  {
    $this->conexion = $conexion;
  }

  function searchEmailInBDD($tablename, $email) {

    $sql = "SELECT email FROM $tablename WHERE email = '$email' ";
    $stmt = $this->conexion->prepare($sql);
    $stmt->execute();
    $email = $stmt->fetch(PDO::FETCH_ASSOC);

    if ( $email ) {

      return false; // El mail ya se encuentra en la tabla

    } 

    return true;

  }

  public function saveNewsletterInBDD($post)
  {

    $sql = "INSERT INTO newsletter values(default, :email, :created_at)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindValue(":email", $post['email_newsletter'], PDO::PARAM_STR);
        $stmt->bindValue(":created_at", date("Y-m-d H:i:s"), PDO::PARAM_STR);
        
    $save = $stmt->execute();

    return $save;

  }
  
}

?>
