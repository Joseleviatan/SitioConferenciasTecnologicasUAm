@extends('layouts.app')

@section('content')
<div class="text-center py-5 mb-4" style="background-color:rgb(142, 189, 233);">
    <div class="container">
        <h1 class="display-4 text-dark fw-bold">Universidad Americana (UAM)</h1>
        <p class="lead text-dark fw-bold">Formando profesionales con visión y compromiso</p>
    </div>
</div>



<div class="container">
    
    <div class="row mb-5">
        <div class="col-md-6">
            <div class="card shadow p-4">
                <h3 class="display-7 text-primary fw-bold">Misión</h3>
                <p>Formar profesionales íntegros, competentes y comprometidos con el desarrollo sostenible de la sociedad, mediante una educación de calidad centrada en el estudiante.</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow p-4">
                <h3 class="display-7 text-primary fw-bold">Visión</h3>
                <p>Ser una institución de educación superior reconocida por su excelencia académica, innovación y liderazgo en la formación de profesionales para un mundo globalizado.</p>
            </div>
        </div>
    </div>

   
    <div class="mb-5">
<div class="mx-auto" style="max-width: 700px;">
    <div id="carruselUAM" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner rounded shadow">
            <div class="carousel-item active">
                <img src="{{ asset('images/uam1.jpg') }}" class="d-block w-100 object-fit-cover" style="height: 250px;" alt="Imagen 1">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/uam2.jpg') }}" class="d-block w-100 object-fit-cover" style="height: 250px;" alt="Imagen 2">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/uam3.jpg') }}" class="d-block w-100 object-fit-cover" style="height: 250px;" alt="Imagen 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carruselUAM" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carruselUAM" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
</div>

</div>
@endsection
