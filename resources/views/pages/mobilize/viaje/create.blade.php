@extends('theme.layouts.admin')
@section('title','Crear Viaje')
@section('head')
{{-- :: Librerias CSS :: --}}
{{-- libreria select --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/backoffice/app-assets/vendors/css/forms/selects/select2.min.css') }}">
<link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">
@endsection
@section('titulopagina','Crear Viaje')
@section('migajas')
<div class="breadcrumb-wrapper mr-1">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item"><a href="#">Content</a>
        </li>
        <li class="breadcrumb-item active">Crear Viaje
        </li>
    </ol>
</div>
@endsection
@section('content')
<section id="basic-form-layouts">
<div class="row match-height justify-content-md-center">
    <div class="col-xl-8 col-lg-8 col-md-10">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title" id="basic-layout-icons">Crear Viaje</h4>
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
                        <h4 class="form-section">
                                <i class="ft-flag"></i> En este formulario podras crear viajes.</h4>
                            {{-- <div class="form-group">
                                <label for="companyName">Company Name</label>
                                <input type="text" id="companyName" class="form-control" placeholder="Company Name" name="company">
                            </div> --}}
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p class="text-bold-600 font-medium-2 text-danger text-center">Fecha de Salida</p>
                                        <div class="position-relative has-icon-left">
                                            <input type="date" id="timesheetinput3" class="form-control" name="date">
                                            <div class="form-control-position">
                                                <i class="ft-message-square"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <p class="text-bold-600 font-medium-2 text-danger">Fecha de Llegada</p>
                                        <div class="position-relative has-icon-left">
                                            <input type="date" id="timesheetinput3" class="form-control" name="date">
                                            <div class="form-control-position">
                                                <i class="ft-message-square"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div> 

                                <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="timesheetinput5">Hora de Salida</label>
                                            <div class="position-relative has-icon-left">
                                                <input type="time" id="timesheetinput5" class="form-control" name="starttime">
                                                <div class="form-control-position">
                                                    <i class="ft-clock"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <p class="text-bold-600 font-medium-2 text-danger text-center">Hora de Salida</p>
                                        <div class="position-relative has-icon-left">
                                            <input type="time" id="timesheetinput5" class="form-control" name="starttime">
                                            <div class="form-control-position">
                                                <i class="ft-clock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 {{-- Primera --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <p class="text-bold-600 font-medium-2 text-danger text-center">C. Porte</p>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="timesheetinput2" class="form-control" placeholder="C. Porte" name="projectname">
                                            <div class="form-control-position">
                                                <i class="la la-briefcase"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <p class="text-bold-600 font-medium-2 text-danger text-center">Origen</p>
                                        <div class="position-relative has-icon-left">
                                            <select class="select2 form-control" id="default-select">
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                            <p class="text-bold-600 font-medium-2 text-danger text-center">Destino</p>
                                        <div class="position-relative has-icon-left">
                                            <select class="select2 form-control" id="default-select">
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{-- Seguda --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <p class="text-bold-600 font-medium-2 text-danger text-center">C. Porte</p>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="timesheetinput2" class="form-control" placeholder="C. Porte" name="projectname">
                                            <div class="form-control-position">
                                                <i class="la la-briefcase"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                            <p class="text-bold-600 font-medium-2 text-danger text-center">Origen</p>
                                        <div class="position-relative has-icon-left">
                                            <select class="select2 form-control" id="default-select">
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <p class="text-bold-600 font-medium-2 text-danger text-center">Destino</p>
                                        <div class="position-relative has-icon-left">
                                            <select class="select2 form-control" id="default-select">
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                {{-- Tercera     --}}
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <p class="text-bold-600 font-medium-2 text-danger text-center">Camión</p>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" value="909090" id="timesheetinput2"  readonly="readonly" class="form-control" placeholder="project name" name="projectname">
                                            <div class="form-control-position">
                                                <i class="la la-briefcase"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <p class="text-bold-600 font-medium-2 text-danger text-center">Termino</p>
                                        <div class="position-relative has-icon-left">
                                            <select class="select2 form-control" id="default-select">
                                                    <optgroup label="Central Time Zone">
                                                        <option value="AL">Alabama</option>
                                                        <option value="AR">Arkansas</option>
                                                        <option value="IL">Illinois</option>
                                                        <option value="IA">Iowa</option>
                                                        <option value="KS">Kansas</option>
                                                        <option value="KY">Kentucky</option>
                                                        <option value="LA">Louisiana</option>
                                                        <option value="MN">Minnesota</option>
                                                        <option value="MS">Mississippi</option>
                                                        <option value="MO">Missouri</option>
                                                        <option value="OK">Oklahoma</option>
                                                        <option value="SD">South Dakota</option>
                                                        <option value="TX">Texas</option>
                                                        <option value="TN">Tennessee</option>
                                                        <option value="WI">Wisconsin</option>
                                                    </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <p class="text-bold-600 font-medium-2 text-danger text-center">Chofer</p>
                                        <div class="position-relative has-icon-left">
                                            <select class="select2 form-control" id="default-select">
                                                    <optgroup label="Selecione un Chofer">
                                                        <option value="AL">Joel</option>
                                                        <option value="AL">David</option>
                                                        <option value="AL">Miguel</option>
                                                    </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                        

                                <div class="col-md-6">
                                  <div class="form-group file-repeater">
                                        <p class="text-bold-600 font-medium-2 text-danger text-center">Vales Diesel</p>
                                        <div data-repeater-list="repeater-list">
                                            <div data-repeater-item>
                                                <div class="row mb-1">
                                                    <div class="col-9 col-xl-10">
                                                        <input type="text" class="form-control" placeholder="Vales Diesel" name="phone">
                                                    </div>
                                                    <div class="col-2 col-xl-1">
                                                        <button type="button" data-repeater-delete class="btn btn-icon btn-danger mr-1">
                                                            <i class="ft-x"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <button type="button" data-repeater-create class="btn btn-primary">
                                            <i class="ft-plus"></i>Agregar más
                                        </button>
                                    </div>  
                                </div>

                                <div class="col-md-6">
                                  <div class="form-group file-repeater">
                                        <p class="text-bold-600 font-medium-2 text-danger text-center">Refacciones</p>
                                        <div data-repeater-list="repeater-list">
                                            <div data-repeater-item>
                                                <div class="row mb-1">
                                                    <div class="col-9 col-xl-10">
                                                        <input type="text" class="form-control" placeholder="Vales Diesel" name="phone">
                                                    </div>
                                                    <div class="col-2 col-xl-1">
                                                        <button type="button" data-repeater-delete class="btn btn-icon btn-danger mr-1">
                                                            <i class="ft-x"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
        
                                        <button type="button" data-repeater-create class="btn btn-primary">
                                            <i class="ft-plus"></i>Agregar más
                                        </button>
                                    </div>  
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <p class="text-bold-600 font-medium-2 text-danger text-center">Gastos Viaje</p>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">$</span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Gasto" aria-label="Amount (to the nearest dollar)" name="rateperhour">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                        <div class="form-group">
                                                <p class="text-bold-600 font-medium-2 text-danger text-center">Verificación</p>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="timesheetinput2" class="form-control" placeholder="Verificación" name="projectname">
                                                <div class="form-control-position">
                                                    <i class="la la-briefcase"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                                <p class="text-bold-600 font-medium-2 text-danger text-center">I. Mecanica</p>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="timesheetinput2" class="form-control" placeholder="I. Mecanica" name="projectname">
                                                <div class="form-control-position">
                                                    <i class="la la-briefcase"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                                <p class="text-bold-600 font-medium-2 text-danger text-center">Pte. USA</p>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="timesheetinput2" class="form-control" placeholder="Pte. USA" name="projectname">
                                                <div class="form-control-position">
                                                    <i class="la la-briefcase"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                                <p class="text-bold-600 font-medium-2 text-danger text-center">Disel</p>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="timesheetinput2" class="form-control" placeholder="Disel" name="projectname">
                                                <div class="form-control-position">
                                                    <i class="la la-briefcase"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                                <p class="text-bold-600 font-medium-2 text-danger text-center">Casetas</p>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="timesheetinput2" class="form-control" placeholder="Casetas" name="projectname">
                                                <div class="form-control-position">
                                                    <i class="la la-briefcase"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                                <p class="text-bold-600 font-medium-2 text-danger text-center">Transferencia</p>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="timesheetinput2" class="form-control" placeholder="Transferencia" name="projectname">
                                                <div class="form-control-position">
                                                    <i class="la la-briefcase"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                                <p class="text-bold-600 font-medium-2 text-danger text-center">Lav Caja</p>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="timesheetinput2" class="form-control" placeholder="Lav Caja" name="projectname">
                                                <div class="form-control-position">
                                                    <i class="la la-briefcase"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                                <p class="text-bold-600 font-medium-2 text-danger text-center">Lav Camión</p>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="timesheetinput2" class="form-control" placeholder="Lav Camión" name="projectname">
                                                <div class="form-control-position">
                                                    <i class="la la-briefcase"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                                <p class="text-bold-600 font-medium-2 text-danger text-center">Comisión</p>
                                            <div class="position-relative has-icon-left">
                                                <input type="text" id="timesheetinput2" class="form-control" placeholder="Comisión" name="projectname">
                                                <div class="form-control-position">
                                                    <i class="la la-briefcase"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group file-repeater">
                                            <p class="text-bold-600 font-medium-2 text-danger text-center">Otros</p>
                                            <div data-repeater-list="repeater-list">
                                                <div data-repeater-item>
                                                    <div class="row mb-1">
                                                        <div class="col-9 col-xl-10">
                                                            <input type="text" class="form-control" placeholder="Otros" name="phone">
                                                        </div>
                                                        <div class="col-2 col-xl-1">
                                                            <button type="button" data-repeater-delete class="btn btn-icon btn-danger mr-1">
                                                                <i class="ft-x"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
            
                                            <button type="button" data-repeater-create class="btn btn-primary">
                                                <i class="ft-plus"></i>Agregar más
                                            </button>
                                        </div>  
                                    </div>

                                    <div class="col-md-4">
                                            <div class="form-group">
                                                <p class="text-bold-600 font-medium-2 text-danger text-center">Sueldo</p>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">$</span>
                                                    </div>
                                                    <input type="text" class="form-control" placeholder="Sueldo" aria-label="Amount (to the nearest dollar)" name="rateperhour">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <p class="text-bold-600 font-medium-2 text-danger text-center">Notificar Reparaciones y Servicios de Unidad</p>
										<div class="position-relative has-icon-left">
			                            	<textarea id="timesheetinput7" rows="5" class="form-control" name="notes" placeholder="Notificar Reparaciones y Servicios de Unidad"></textarea>
				                            <div class="form-control-position">
				                                <i class="ft-file"></i>
				                            </div>
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
{{-- libreria select --}}
<script language="JavaScript" type="text/javascript" src="{{ asset('assets/backoffice/app-assets/vendors/js/forms/select/select2.full.min.js') }}"></script>
<script language="JavaScript" type="text/javascript" src="{{ asset('assets/backoffice/app-assets/js/scripts/forms/select/form-select2.js') }}"></script>


<script language="JavaScript" type="text/javascript" src="{{ asset('assets/backoffice/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js') }}"></script>
<script language="JavaScript" type="text/javascript" src="{{ asset('assets/backoffice/app-assets/js/scripts/forms/form-repeater.js') }}"></script>
@endsection