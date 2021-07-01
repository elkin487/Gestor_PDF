@extends('dashboard.app')
@section('content')
<h1>
    <small>Rol</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Here</li>
</ol>
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- AREA EMPLEADOS -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Ver Rol</h3>
                            <div class="box-tools pull-right">
                                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Nombre:</strong>
                                        {{ $role->name }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Permisos:</strong>
                                        @if(!empty($rolePermissions))
                                            @foreach($rolePermissions as $v)
                                                <label class="label label-success">{{ $v->name }},</label>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div>
                </div>
            </div>
        </section><!-- /.content -->
    </div>
</section>
@endsection