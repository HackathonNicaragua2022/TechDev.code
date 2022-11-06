@extends('adminlte::page')
@section('content')
</div>
    <div class="container">

        @if (Session::has('mensaje'))
            <div class="alert alert-success" role="alert" class="text-center">
                {{ Session::get('mensaje') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                    <span aria-hiden="true">&times;</span>
                </button>
            </div>

        @endif
        <br>
        <a href="{{ url('cargos/create') }}" class="btn btn-success"> Nuevo Cargo </a>
        <br>
        <br>
        <table class="table table-dark">
            <thead class="thead-light">
                <tr>
                    <th>Categorias</th>
                    <th></th>
                </tr>
            </thead>

            <tbody>

                @foreach ($categoriasTiendas as $categoriaTienda)

                    <tr>
                        <td>{{$categoriaTienda->categoria}}</td>
                        <td><a href="{{ url('') }}" class="btn btn-info">
                                Editar </a>|
                            <form action="{{ url('') }}" method="post" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <input type="submit" onclick="return confirm('Estas seguro de eliminar este registro?')"
                                    class="btn btn-danger" value="eliminar">
                            </form>
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@stop