<?php
class ControllerUsersEvent {

  public $model;

  public function __construct($model) {
    $this->model = $model;
  }

  public function getUsersPerEvent($data) {
    $eventId = $data["evento"];

    $this->model->entity = "EVENTO_USUARIO NATURAL JOIN USUARIO";
    $this->model->id = array("ID_EVENTO" => $eventId,
    "MARCA_GUARDADO" => true);
    $event = $this->model->get();
    $response = array(
      "codeStatus" => OK,
      "message" => $event
    );
    return $response;
  }

  public function setAsistencia($data) {
    $eventIds = $data["eventos"];

    $query = "UPDATE EVENTO_USUARIO SET ASISTIDO = TRUE WHERE ID_EVENTO_USUARIO IN ({$eventIds})";
    $model = new Model();
    $result = $model->setQuery($query);
    $response = array(
      "codeStatus" => OK,
      "message" => $result      
    );
    return $response;
  }
}
