@extends('theme.layouts.admin')
@section('title','MOBILIZE')
@section('head')
{{-- :: Librerias CSS :: --}}
@endsection
@section('titulopagina','MOBILIZE')
@section('migajas')
<div class="breadcrumb-wrapper mr-1">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item"><a href="#">Crear Viaje</a>
        </li>
        <li class="breadcrumb-item active">Todos los Cambiones
        </li>
    </ol>
</div>
@endsection
@section('content')



<!-- Columns section start -->
<section id="columns">
	<div class="row">
		<div class="col-md-12 mt-1">
			<div class="card-columns">
				<div class="card">
					<div class="card-content">
						<img class="card-img-top img-fluid" src="/assets/backoffice/app-assets/images/carousel/trailer1.jpg" alt="Card image cap">
						<div class="card-body">
							<h4 class="card-title">Camión 1</h4>
							<p class="card-text text-center">Descripción del Camión.</p>
							<center>
                                <button type="button" class="btn btn-bg-gradient-x-orange-yellow col-12 col-md-5 mr-1 mb-1">Ver Viajes</button>
                            </center>
						</div>
					</div>
				</div> 
				<div class="card">
					<div class="card-content">
						<img class="card-img-top img-fluid" src="/assets/backoffice/app-assets/images/carousel/trailer1.jpg" alt="Card image cap">
						<div class="card-body">
							<h4 class="card-title">Camión 2</h4>
							<p class="card-text text-center">Descripción del Camión.</p>
							<center>
                                <button type="button" class="btn btn-bg-gradient-x-orange-yellow col-12 col-md-5 mr-1 mb-1">Ver Viajes</button>
                            </center>
						</div>
					</div>
				</div> 
				<div class="card">
					<div class="card-content">
						<img class="card-img-top img-fluid" src="/assets/backoffice/app-assets/images/carousel/trailer1.jpg" alt="Card image cap">
						<div class="card-body">
							<h4 class="card-title text-center">Camión 3</h4>
                            <p class="card-text text-center">Descripción del Camión.</p>
                            <center>
                                <button type="button" class="btn btn-bg-gradient-x-orange-yellow col-12 col-md-5 mr-1 mb-1">Ver Viajes</button>
                            </center>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-content">
						<img class="card-img-top img-fluid" src="/assets/backoffice/app-assets/images/carousel/trailer1.jpg" alt="Card image cap">
						<div class="card-body">
							<h4 class="card-title text-center">Camión 4</h4>
							<p class="card-text text-center">Descripción del Camión.</p>
							<center>
                                <button type="button" class="btn btn-bg-gradient-x-orange-yellow col-12 col-md-5 mr-1 mb-1">Ver Viajes</button>
                            </center>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-content">
						<img class="card-img-top img-fluid" src="/assets/backoffice/app-assets/images/carousel/trailer1.jpg" alt="Card image cap">
						<div class="card-body">
							<h4 class="card-title text-center">Camión 5</h4>
							<p class="card-text text-center">Descripción del Camión.</p>
							<center>
                                <button type="button" class="btn btn-bg-gradient-x-orange-yellow col-12 col-md-5 mr-1 mb-1">Ver Viajes</button>
                            </center>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-content">
						<img class="card-img-top img-fluid" src="/assets/backoffice/app-assets/images/carousel/trailer1.jpg" alt="Card image cap">
						<div class="card-body">
							<h4 class="card-title text-center">Camión 6</h4>
							<p class="card-text text-center">Descripción del Camión.</p>
							<center>
                                <button type="button" class="btn btn-bg-gradient-x-orange-yellow col-12 col-md-5 mr-1 mb-1">Ver Viajes</button>
                            </center>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Columns section end -->

@endsection
@section('foot')
{{-- :: Librerias JavaScript :: --}}
@endsection