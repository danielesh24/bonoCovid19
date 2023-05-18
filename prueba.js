
function bd(){
	Swal.fire({
  title: 'CREAR BD',
  text: "Desea Crear La Base De Datos",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Crear'
}).then((result) => {
  if (result.value) {
    crearbd()
  }
})
}

function crearbd(){
	Swal.fire(
      'creando',
      '',
      'success'
    )
	location.href="CrearBD.php"
}




function modi(){
	Swal.fire({
  title: 'Modificar',
  text: "Seguro que desea modificar esta persona",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Si, Modificar'
}).then((result) => {
  if (result.value) {
    Modificar()
  }
})
}

function Modificar(){
	Swal.fire(
      'creandp',
      '',
      'success'
    )
	location.href="modificar.php"
}





