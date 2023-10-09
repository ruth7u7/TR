@extends('layouts.app')

@section('template_title')
    Lugar Turistico
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Lugar Turistico') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('lugar-turisticos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Nombre</th>
										<th>Descripcion</th>
										<th>Id Ciudad</th>
										<th>Estado Registro</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lugarTuristicos as $lugarTuristico)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $lugarTuristico->nombre }}</td>
											<td>{{ $lugarTuristico->descripcion }}</td>
											<td>{{ $lugarTuristico->id_ciudad }}</td>
											<td>{{ $lugarTuristico->estado_registro }}</td>

                                            <td>
                                                <form action="{{ route('lugar-turisticos.destroy',$lugarTuristico->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('lugar-turisticos.show',$lugarTuristico->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('lugar-turisticos.edit',$lugarTuristico->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $lugarTuristicos->links() !!}
            </div>
        </div>
    </div>
@endsection
