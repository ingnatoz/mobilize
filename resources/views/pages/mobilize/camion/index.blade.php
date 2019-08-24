@extends('theme.layouts.admin')
@section('title','MOBILIZE')
@section('head')
{{-- :: Librerias CSS :: --}}
@endsection
@section('titulopagina','MOBILIZE')
@section('migajas')
<div class="breadcrumb-wrapper mr-1">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item"><a href="#">Content</a>
        </li>
        <li class="breadcrumb-item active">Grid System
        </li>
    </ol>
</div>
@endsection
@section('content')
<section id="grid-options" class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Grid options</h4>
                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                <div class="heading-elements">
                    <ul class="list-inline mb-0">
                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                        <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        <li><a data-action="close"><i class="ft-x"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <p>Bootstrap’s grid system uses a series of containers, rows, and columns to layout and align content. It’s built with <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Using_CSS_flexible_boxes">flexbox</a> and is fully responsive. Below is an example and an in-depth look at how the grid comes together.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('foot')
{{-- :: Librerias JavaScript :: --}}
@endsection