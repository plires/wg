<?php

require_once("repoContacts.php");

class RepoContactsSQL extends repoContacts
{
  protected $conexion;

  public function __construct($conexion) 
  {
    $this->conexion = $conexion;
  }

  public function saveContactAutoInBDD($post)
  {

    $sql = "INSERT INTO contacts_seguros_auto values(default, :name, :email, :phone, :year, :marca, :modelo, :province, :locality, :age,  :origin, :created_at)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindValue(":name", $post['name'], PDO::PARAM_STR);
        $stmt->bindValue(":email", $post['email'], PDO::PARAM_STR);
        $stmt->bindValue(":phone", $post['phone'], PDO::PARAM_STR);
        $stmt->bindValue(":year", $post['year'], PDO::PARAM_STR);
        $stmt->bindValue(":marca", $post['marca'], PDO::PARAM_STR);
        $stmt->bindValue(":modelo", $post['modelo'], PDO::PARAM_STR);
        $stmt->bindValue(":province", $post['province'], PDO::PARAM_STR);
        $stmt->bindValue(":locality", $post['locality'], PDO::PARAM_STR);
        $stmt->bindValue(":age", $post['age'], PDO::PARAM_STR);
        $stmt->bindValue(":origin", $post['origin'], PDO::PARAM_STR);
        $stmt->bindValue(":created_at", date("Y-m-d H:i:s"), PDO::PARAM_STR);
        
    $save = $stmt->execute();

    return $save;

  }

  public function saveContactLifeInBDD($post)
  {

    $sql = "INSERT INTO contacts_seguros_vida values(default, :name, :email, :phone, :seguro, :age, :gender, :province, :locality, :income,  :origin, :created_at)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindValue(":name", $post['name'], PDO::PARAM_STR);
        $stmt->bindValue(":email", $post['email'], PDO::PARAM_STR);
        $stmt->bindValue(":phone", $post['phone'], PDO::PARAM_STR);
        $stmt->bindValue(":seguro", $post['seguro'], PDO::PARAM_STR);
        $stmt->bindValue(":age", $post['age'], PDO::PARAM_STR);
        $stmt->bindValue(":gender", $post['gender'], PDO::PARAM_STR);
        $stmt->bindValue(":province", $post['province'], PDO::PARAM_STR);
        $stmt->bindValue(":locality", $post['locality'], PDO::PARAM_STR);
        $stmt->bindValue(":income", $post['income'], PDO::PARAM_STR);
        $stmt->bindValue(":origin", $post['origin'], PDO::PARAM_STR);
        $stmt->bindValue(":created_at", date("Y-m-d H:i:s"), PDO::PARAM_STR);
        
    $save = $stmt->execute();

    return $save;

  }

  public function saveContactAgroInBDD($post)
  {

    $sql = "INSERT INTO contacts_seguros_agro values(default, :name, :email, :phone, :seguro, :activity, :province, :locality, :hectares,  :origin, :created_at)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindValue(":name", $post['name'], PDO::PARAM_STR);
        $stmt->bindValue(":email", $post['email'], PDO::PARAM_STR);
        $stmt->bindValue(":phone", $post['phone'], PDO::PARAM_STR);
        $stmt->bindValue(":seguro", $post['seguro'], PDO::PARAM_STR);
        $stmt->bindValue(":activity", $post['activity'], PDO::PARAM_STR);
        $stmt->bindValue(":province", $post['province'], PDO::PARAM_STR);
        $stmt->bindValue(":locality", $post['locality'], PDO::PARAM_STR);
        $stmt->bindValue(":hectares", $post['hectares'], PDO::PARAM_STR);
        $stmt->bindValue(":origin", $post['origin'], PDO::PARAM_STR);
        $stmt->bindValue(":created_at", date("Y-m-d H:i:s"), PDO::PARAM_STR);
        
    $save = $stmt->execute();

    return $save;

  }

  public function saveContactPatrimonialesInBDD($post)
  {

    $sql = "INSERT INTO contacts_seguros_patrimoniales values(default, :name, :email, :phone, :origin, :seguro, :plan, :created_at)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindValue(":name", $post['name'], PDO::PARAM_STR);
        $stmt->bindValue(":email", $post['email'], PDO::PARAM_STR);
        $stmt->bindValue(":phone", $post['phone'], PDO::PARAM_STR);
        $stmt->bindValue(":origin", $post['origin'], PDO::PARAM_STR);
        $stmt->bindValue(":seguro", $post['seguro'], PDO::PARAM_STR);
        $stmt->bindValue(":plan", $post['plan'], PDO::PARAM_STR);
        $stmt->bindValue(":created_at", date("Y-m-d H:i:s"), PDO::PARAM_STR);
        
    $save = $stmt->execute();

    return $save;

  }

  public function saveContactFormContactInBDD($post)
  {

    $sql = "INSERT INTO contacts_form values(default, :name, :email, :phone, :comments, :origin, :created_at)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindValue(":name", $post['name'], PDO::PARAM_STR);
        $stmt->bindValue(":email", $post['email'], PDO::PARAM_STR);
        $stmt->bindValue(":phone", $post['phone'], PDO::PARAM_STR);
        $stmt->bindValue(":comments", $post['comments'], PDO::PARAM_STR);
        $stmt->bindValue(":origin", $post['origin'], PDO::PARAM_STR);
        $stmt->bindValue(":created_at", date("Y-m-d H:i:s"), PDO::PARAM_STR);
        
    $save = $stmt->execute();

    return $save;

  }

}

?>
