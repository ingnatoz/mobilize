@extends('theme.layouts.admin')
@section('title','Creacion de Camnión')
@section('head')
{{-- :: Librerias CSS :: --}}
{{-- ciclos --}}
<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
@endsection
@section('titulopagina','Creacion de Camnión')
@section('migajas')
<div class="breadcrumb-wrapper mr-1">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item"><a href="#">Content</a>
        </li>
        <li class="breadcrumb-item active">Creacion de Camnión
        </li>
    </ol>
</div>
@endsection
@section('content')
<section id="horizontal-form-layouts">
<div class="row justify-content-md-center">
    <div class="col-xl-8 col-lg-8 col-md-10">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="horz-layout-colored-controls">Creación de Camión</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content collpase show">
                <div class="card-body">
                    <div class="card-text">
                        <p>En este Formulario pordras crear un Camión nuevo para poder relizar viajes.</p>
                    </div>
                    <form class="form form-horizontal">
                        <div class="form-body">
                            <h4 class="form-section"><i class="la la-eye"></i>Formulario de Camión</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput1">Numero Economico</label>
                                        <div class="col-md-9">
                                            <input type="text" id="userinput1" class="form-control border-primary" placeholder="Numero Economico" name="firstname">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput4">Apodo</label>
                                        <div class="col-md-9">
                                            <input type="text" id="userinput4" class="form-control border-primary" placeholder="Apodo" name="nickname">
                                        </div>
                                    </div>
                                </div>
                            </div>		                      
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput5">Placas</label>
                                        <div class="col-md-9">
                                            <input class="form-control border-primary" type="email" placeholder="Placas" id="userinput5">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput6">Imagen</label>
                                        <div class="col-md-9">
                                            <input type="file" class="form-control-file" id="exampleInputFile">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-md-3 label-control" for="userinput8">Descripción</label>
                                        <div class="col-md-9">
                                            <textarea id="userinput8" rows="6" class="form-control border-primary" name="bio" placeholder="Descripción"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions right">
                            <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> Guardar
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection
@section('foot')
{{-- :: Librerias JavaScript :: --}}
{{-- ciclos --}}
<script language="JavaScript" type="text/javascript" src="{{ asset('assets/backoffice/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
<script language="JavaScript" type="text/javascript" src="{{ asset('assets/backoffice/app-assets/js/scripts/forms/form-repeater.js') }}"></script>
@endsection