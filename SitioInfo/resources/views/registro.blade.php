@extends('layouts.app')

@section('content')
<div class="py-5" style="background-image: url('{{ asset('images/fondoregistro.jpg') }}'); background-size: cover; background-position: center; background-attachment: fixed;">
    <div class="container mt-5">
        <h1 class="text-center text-dark fw-bold mb-4">Registro a Conferencias</h1>

        <div class="row justify-content-center">
            <div class="col-md-8">
            <form id="registroForm" class="p-4 shadow rounded" style="background-color:rgb(213, 233, 248);">
                    <div class="mb-3">
                        <label for="nombre" class="form-label fw-bold">Nombre completo:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                        <div class="invalid-feedback">Por favor, ingresa tu nombre completo.</div>
                    </div>

                    <div class="mb-3">
                        <label for="correo" class="form-label fw-bold">Correo institucional:</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                        <div class="invalid-feedback">Por favor, ingresa un correo institucional válido.</div>
                    </div>

                    <div class="mb-3">
                        <label for="carrera" class="form-label fw-bold">Carrera:</label>
                        <input type="text" class="form-control" id="carrera" name="carrera" required>
                        <div class="invalid-feedback">Por favor, indica tu carrera.</div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-bold">Conferencias a las que deseas asistir:</label><br>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="conferencias[]" id="conf1" value="GitHub">
                            <label class="form-check-label" for="conf1">Uso de GitHub en proyectos colaborativos</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="conferencias[]" id="conf2" value="Docker">
                            <label class="form-check-label" for="conf2">Introducción a Docker para entornos de desarrollo</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="conferencias[]" id="conf3" value="Linux">
                            <label class="form-check-label" for="conf3">Configuración básica de servidores Linux</label>
                        </div>
                        <div class="invalid-feedback d-block" id="conferenciaError" style="display:none;">
                            Selecciona al menos una conferencia.
                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-hover">Enviar Registro</button>
                    </div>

                </form>

                <div id="mensajeExito" class="alert alert-success mt-4 d-none" role="alert">
                    ¡Registro enviado exitosamente!
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Validaciones JS -->
<script>
document.getElementById('registroForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Evita el envío vacio

    // Obtener los valores
    let nombre = document.getElementById('nombre').value.trim();
    let correo = document.getElementById('correo').value.trim();
    let carrera = document.getElementById('carrera').value.trim();
    let conferencias = document.querySelectorAll('input[name="conferencias[]"]:checked');

    let valido = true;

    let regexNombre = /^[a-zA-ZÁÉÍÓÚáéíóúñÑ\s]{5,}$/;
if(!regexNombre.test(nombre)) {
    document.getElementById('nombre').classList.add('is-invalid');
    valido = false;
} else {
    document.getElementById('nombre').classList.remove('is-invalid');
}


    let regexCorreo = /^[a-zA-Z0-9._%+-]+@(uam|uamv)\.edu\.ni$/;
    if(!regexCorreo.test(correo)) {
        document.getElementById('correo').classList.add('is-invalid');
        valido = false;
    } else {
        document.getElementById('correo').classList.remove('is-invalid');
    }

    if(carrera.length < 3) {
    document.getElementById('carrera').classList.add('is-invalid');
    valido = false;
} else {
    document.getElementById('carrera').classList.remove('is-invalid');
}

    if(conferencias.length === 0 || conferencias.length > 3) {
    document.getElementById('conferenciaError').style.display = 'block';
    valido = false;
} else {
    document.getElementById('conferenciaError').style.display = 'none';
}

if(valido) {
    if (confirm('Seguro que deseas enviar tu registro?')) {
        document.getElementById('mensajeExito').classList.remove('d-none');
        document.getElementById('registroForm').reset();
        document.querySelectorAll('.is-invalid').forEach(element => {
            element.classList.remove('is-invalid');
        });
    } else {
        // Si cancela no pasa nada se queda en la página
        return;
    }
}

});
</script>
@endsection
