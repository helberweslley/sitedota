@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Profile</h1>
@stop

@section('content')
    <section class="content">

        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{Auth::user()->avatar}}" alt="User profile picture">

                        <h3 class="profile-username text-center">{{Auth::user()->name}}</h3>

                        <p class="text-muted text-center">{{Auth::user()->username}}</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>MMR SOLO</b> <a class="pull-right">4.100</a>
                            </li>
                            <li class="list-group-item">
                                <b>MMR GRUPO</b> <a class="pull-right">4.000</a>
                            </li>
                            <li class="list-group-item">
                                <b>MMR RR</b> <a class="pull-right">10.000</a>
                            </li>
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- About Me Box -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Sobre</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <strong><i class="fa fa-book margin-r-5"></i> Descrição</strong>

                        <p class="text-muted">
                            Breve descrição.
                        </p>

                        <hr>

                        <strong><i class="fa fa-pencil margin-r-5"></i> Posição</strong>

                        <p>
                            <span class="label label-success">Suporte 4</span>
                            <span class="label label-warning">Jungle</span>
                            <span class="label label-danger">Feeder</span>
                        </p>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#settings" data-toggle="tab" aria-expanded="true">Settings</a></li>
                        <li class=""><a href="#activity" data-toggle="tab" aria-expanded="false">Campeonatos</a></li>
                        <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false">Resultados</a></li>
                    </ul>
                    <div class="tab-content">

                        <div class="tab-pane active" id="settings">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label for="inputName" class="col-sm-2 control-label">Nome</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputExperience" class="col-sm-2 control-label">Descrição</label>

                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="inputExperience" placeholder="Breve descrição"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputSkills" class="col-sm-2 control-label">Posição</label>

                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputSkills" placeholder="Suporte 4">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-danger">Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.tab-pane -->
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->

    </section>
@stop