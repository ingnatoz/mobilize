@extends('theme.layouts.admin')
@section('title','MOBILIZE')
@section('head')
{{-- :: Librerias CSS :: --}}
<link href="{{ asset('assets/backoffice/app-assets/vendors/css/tables/datatable/datatables.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/backoffice/app-assets/vendors/css/tables/extensions/responsive.dataTables.min.css') }}" rel="stylesheet">
@endsection
@section('titulopagina','Lugares MOBILIZE')
@section('migajas')
<div class="breadcrumb-wrapper mr-1">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item"><a href="#">Content</a>
        </li>
        <li class="breadcrumb-item active">Lugares MOBILIZE
        </li>
    </ol>
</div>
@endsection
@section('content')
<section id="text-inputs">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">En está sección se muentras los Lugares que tiene el sistema de MOBILIZE</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body">
                        <p class="card-text">Este CRUD tiene paginación de 100 Registros
                        </p>

                        <a class="btn btn-success mb-3" href="/crearLugar">Agregar Lugares</a>

                        @if (Session::has('message'))
                        <div class="alert alert-warning">{{ Session::get('message') }}</div>
                        @endif

                        <table class="table center table-striped table-bordered text-inputs-searching">
                            <thead>
                                <tr>
                                    <th>Lugar</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>


                            <tbody>

                              
                                
                                <tr>
                                   <td class="text-center"><a style="color:blue;" href="#">Puebla</a> </td>
                                   <td><center><a class="btn btn-info" href="#">Editar</center></a></td>
                                   <td>
                                       <form action="#" method="POST">
                                           @csrf
                                           @method('DELETE')
                                           <center>
                                           <button  type="submit" class="btn btn-danger" onclick="return confirm('Quiere borrar el registro?')">Eliminar</button>
                                           </center>
                                       </form>
                                   </td>
                               </tr>
                               
                                <tr>
                                   <td class="text-center"><a style="color:blue;" href="#">Texas</a> </td>
                                   <td><center><a class="btn btn-info" href="#">Editar</a></center></td>
                                   <td>
                                       <form action="#" method="POST">
                                           @csrf
                                           @method('DELETE')
                                           <center>
                                              <button  type="submit" class="btn btn-danger" onclick="return confirm('Quiere borrar el registro?')">Eliminar</button> 
                                           </center>
                                       </form>
                                   </td>
                               </tr>
                               
                            </tbody>

                            <tfoot>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Editar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </tfoot>
                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('foot')
{{-- :: Librerias JavaScript :: --}}
<script language="JavaScript" type="text/javascript" src="{{ asset('assets/backoffice/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script language="JavaScript" type="text/javascript" src="{{ asset('assets/backoffice/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
<script language="JavaScript" type="text/javascript" src="{{ asset('assets/backoffice/app-assets/js/scripts/tables/datatables/datatable-api.js') }}"></script>
@endsection