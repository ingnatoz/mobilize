@extends('theme.layouts.admin')
@section('title','Crear Viaje')
@section('head')
{{-- :: Librerias CSS :: --}}
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
                            <div class="form-group">
                                <label for="companyName">Company Name</label>
                                <input type="text" id="companyName" class="form-control" placeholder="Company Name" name="company">
                            </div>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="timesheetinput1">Employee Name</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="timesheetinput1" class="form-control" placeholder="employee name" name="employeename">
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="timesheetinput2">Project Name</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="text" id="timesheetinput2" class="form-control" placeholder="project name" name="projectname">
                                            <div class="form-control-position">
                                                <i class="la la-briefcase"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="timesheetinput3">Date</label>
                                <div class="position-relative has-icon-left">
                                    <input type="date" id="timesheetinput3" class="form-control" name="date">
                                    <div class="form-control-position">
                                        <i class="ft-message-square"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Rate Per Hour</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Rate Per Hour" aria-label="Amount (to the nearest dollar)" name="rateperhour">
                                    <div class="input-group-append">
                                        <span class="input-group-text">.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="timesheetinput5">Start Time</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="time" id="timesheetinput5" class="form-control" name="starttime">
                                            <div class="form-control-position">
                                                <i class="ft-clock"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="timesheetinput6">End Time</label>
                                        <div class="position-relative has-icon-left">
                                            <input type="time" id="timesheetinput6" class="form-control" name="endtime">
                                            <div class="form-control-position">
                                                <i class="ft-clock"></i>
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
@endsection