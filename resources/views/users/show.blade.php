@extends('dashboard.app')
@section('content')

<h1>
    <small>Usuario</small>
</h1>
<ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
    <li class="active">Ver usuario</li>
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
                            <h3 class="box-title">Ver usuario</h3>
                            <div class="box-tools pull-right">
                                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
                            </div>
                        </div>
                        <div class="box-body">

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Name:</strong>
                                        {{ $user->name }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Email:</strong>
                                        {{ $user->email }}
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <strong>Roles:</strong>
                                        @if(!empty($user->getRoleNames()))
                                        @foreach($user->getRoleNames() as $v)
                                        <label class="badge badge-success">{{ $v }}</label>
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
