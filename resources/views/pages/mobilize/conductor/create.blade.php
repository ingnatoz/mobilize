@extends('theme.layouts.admin')
@section('title','Creación de CONDUCTOR')
@section('head')
{{-- :: Librerias CSS :: --}}
@endsection
@section('titulopagina','Creación de CONDUCTOR')
@section('migajas')
<div class="breadcrumb-wrapper mr-1">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item"><a href="#">Content</a>
        </li>
        <li class="breadcrumb-item active">Creación de CONDUCTOR
        </li>
    </ol>
</div>
@endsection
@section('content')
<section id="basic-form-layouts">
    <div class="row justify-content-md-center">
        <div class="col-xl-8 col-lg-8 col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title" id="basic-layout-icons">Formulario de Coductor</h4>
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

                        <div class="card-text">
                            <p>En este Formulario pordras crear un Conductor.</p>
                        </div>

                        <form class="form">
                            <div class="form-body">
                                    <div class="row">
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label for="timesheetinput1">Nombre Completo</label>
                                                            <div class="position-relative has-icon-left">
                                                                <input type="text" id="timesheetinput1" class="form-control" placeholder="Nombre Completo" name="employeename">
                                                                <div class="form-control-position">
                                                                    <i class="ft-user"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="timesheetinput2">CURP</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="timesheetinput2" class="form-control" placeholder="CURP" name="projectname">
                                                        <div class="form-control-position">
                                                            <i class="la la-briefcase"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="timesheetinput2">Telefono</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="timesheetinput2" class="form-control" placeholder="Telefono" name="projectname">
                                                        <div class="form-control-position">
                                                            <i class="la la-briefcase"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="timesheetinput2">Dirección</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="timesheetinput2" class="form-control" placeholder="Dirección" name="projectname">
                                                        <div class="form-control-position">
                                                            <i class="la la-briefcase"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                

                                

                                <div class="form-group">
                                    <label for="timesheetinput3">Fecha de Nacimiento</label>
                                    <div class="position-relative has-icon-left">
                                        <input type="date" id="timesheetinput3" class="form-control" name="date">
                                        <div class="form-control-position">
                                            <i class="ft-message-square"></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Pago Mensual</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">$</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Pago Mensual" aria-label="Amount (to the nearest dollar)" name="rateperhour">
                                        <div class="input-group-append">
                                            <span class="input-group-text">.00</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="form-actions right">
                                <button type="submit" class="btn btn-primary">
                                    <i class="la la-check-square-o"></i>Gurdar
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