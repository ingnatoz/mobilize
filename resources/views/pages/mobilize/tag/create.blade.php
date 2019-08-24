@extends('theme.layouts.admin')
@section('title','Subida de Tags')
@section('head')
{{-- :: Librerias CSS :: --}}
@endsection
@section('titulopagina','Subida de Tags')
@section('migajas')
<div class="breadcrumb-wrapper mr-1">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item"><a href="#">Content</a>
        </li>
        <li class="breadcrumb-item active">Subida de Tags
        </li>
    </ol>
</div>
@endsection
@section('content')
<section id="basic-form-layouts">
<div class="row match-height justify-content-md-center">
    <div class="col-xl-6 col-lg-6 col-md-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-icons">Subida de Tags</h4>
                <a class="heading-elements-toggle">
                    <i class="la la-ellipsis-v font-medium-3"></i>
                </a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li>
                            <a data-action="expand">
                                <i class="ft-maximize"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card-content collapse show">
                <div class="card-body">
                    <form class="form">
                        <div class="form-body">
                        <h4 class="form-section text-center">
                                <i class="ft-flag"></i> En este formulario solamente se subira el archivo de Tags "EXCEL" por mes</h4>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                    <div class="position-relative has-icon-left">
                                            <input type="file" class="form-control-file" id="exampleInputFile">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="form-actions right">
                            <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i>Guardar
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
@endsection