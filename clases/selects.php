<?php

class Selects {

  /**
   * [getValues funcion para rellenar los options del select]
   *
   * @return [array] [devuelve el array con los valores del archivo JSON]
   */
  public function getValues($fileJson) {
    // Leo el archivo
    $file = file_get_contents( __DIR__ . '/../includes/' . $fileJson );

    // Lo divido por enters
    $selectJSON = explode(PHP_EOL, $file);

    $selectFinal=array();

    // Y CADA LINEA LA CONVIERTO DE JSON A ARRAY
    foreach($selectJSON as $select) {
      $selectFinal[] = json_decode($select, true);
    }

    if ( count($selectFinal) == 1 ) {
      $selectFinal=array();
    }

    return $selectFinal;
  }

}

?>
