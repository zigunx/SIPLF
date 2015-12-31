@extends('backend/templates/index')
@section('js')
<script src='{{asset('assets/js/controller/admin-ukuranjas.js')}}'></script>
@stop
@section('content')
<div class="main-content" ng-controller="ukuranjas">
    <div class="container">
        <!-- start: PAGE HEADER -->
        <div class="row">
            <div class="col-sm-12">
                <!-- start: PAGE TITLE & BREADCRUMB -->
{!! Breadcrumbs::render('ukuranjas'); !!}
                <div class="page-header">
                    <h1>{{$title}}</h1>
                </div>
                <!-- end: PAGE TITLE & BREADCRUMB -->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="tabbable">
                    <ul class="nav nav-tabs tab-bricky" id="myTab">
                        <li class="active">
                            <a data-toggle="tab" href="#panel_tab2_example1">
                                <i class="green fa fa-home"></i> Tambah Data ukuranjas
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="panel_tab2_example1" class="tab-pane active">
                                                   <alert ng-repeat="alert in alerts" type="<%alert.type%>" close="closeAlert($index)"><% alert.msg %></alert>
                             <form class="form-horizontal" role="form" name="agendaForm" ng-submit="submit({{$data->id_jas}})" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Nama ukuranjas </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='ukuranjas' ng-model='data.ukuranjas'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"> Tahun Ajaran </label>
                                    <div class="col-sm-9">
                                        <input type='text' class='col-sm-10 form-control' name='tahun_ajaran' ng-model='data.tahun_ajaran'/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label" for="form-field-1"></label>
                                    <div class="col-sm-9">
                                        <button class="btn btn-success" type="submit">
                                            Save
                                        </button>
                                        <a href='{{route('admin.ukuranjas.index')}}' class="btn btn-blue">Back</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop