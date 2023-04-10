<?php
abstract class Persona {
  protected string $nombre;
  private string $apellidos;
  private ?DateTime $fechaNacimiento;

  function __construct (string $name, ?string $lastName, ?DateTime $birthDay = null) {
    $this->nombre = $name;
    $this->apellidos = $lastName??'';
    $this->fechaNacimiento = $birthDay;
  }

  function setNombre (string $nombre): void {
    $this->nombre = $nombre;
  }

  public function getNombre (): string {
    return $this->nombre;
  } 
  public function getApellidos (): string {
    return $this->apellidos;
  }

  public function getFechaNacimiento (): ?DateTime {
    return $this->fechaNacimiento;
  }

  public function getFechaNacimientoString (): string {
    return $this->fechaNacimiento 
            ? $this->fechaNacimiento->format('d-m-Y')
            : '';
  }

  static function nombreStringLength (string $nombre): int {
    return strlen($nombre);
  }

  function mayorEdad () : ?bool {
    if (!$this->fechaNacimiento) return null;
    $anho_actual = new DateTime();
    $intervalo = $anho_actual->diff($this->fechaNacimiento);
    $anhos = $intervalo->y;
    return $anhos>=18;
  }

  static function dimeEdad (?DateTime $nacimiento) : ?int {
    if (!$nacimiento) return null;
    $anho_actual = new DateTime();
    $intervalo = $anho_actual->diff($nacimiento);
    return $intervalo->y;   
  }

  public function dimeNombreCompleto (): string {
    return sprintf('%s %s',$this->nombre,$this->apellidos);
  }

  abstract public function tratamientoPersona (string $genero='f') : string;
}
