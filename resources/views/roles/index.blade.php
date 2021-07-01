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


<section class="content">
    <div class="container-fluid">
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <!-- AREA EMPLEADOS -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Empleados</h3>
                            <div class="box-tools pull-right">
                                @can('role-create')
                                <a href="{{ route('roles.create')}}" class="btn btn-primary">Crear nuevo rol</a>
                                @endcan
                            </div>
                        </div>
                        @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                        @endif
                        <div class="box-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th width="280px">Action</th>
                                </tr>
                                @foreach ($roles as $key => $role)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                        <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
                                        @can('role-edit')
                                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
                                        @endcan
                                        @can('role-delete')
                                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy',
                                        $role->id],'style'=>'display:inline']) !!}
                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                        {!! Form::close() !!}
                                        @endcan
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div><!-- /.row -->
                </div>
            </div>
    </div>
</section><!-- /.content -->

{!! $roles->render() !!}


@endsection
