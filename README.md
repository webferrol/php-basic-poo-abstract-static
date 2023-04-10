# Clases abstractas

Para crear una clase abstracta sólo hay que anteponer delante de la clase la palabra reservada __abstract__.
Una __clase abstract__ no puede ser instanciada por tanto es la máxima expresión de abstracción, sería una mera plantilla.

## Ejercicio

- [] Crea una clase Persona con los siguientes atributos privados o protegidos:
  - {string} nombre
  - {string} apellidos
  - {DateTime} fecha de nacimiento

- [] Convertir la clase Persona en abstracta

- [] Crear su constructores, getters y setters

- [] Crear las siguientes funciones:
  – mayorEdad: indica si es o no mayor de edad.
  – nombreCompleto: devuelve el nombre mas apellidos

- [] Crear otra clase llamada Alumno que herederá todo de la clase Persona.