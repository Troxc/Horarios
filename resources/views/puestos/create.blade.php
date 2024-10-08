@extends('plantillas/plantilla1')


@section('contenido1')
    @include('puestos/tablahtml')
@endsection

@section('contenido2')
    <h1>NUEVO</h1>
    <div class="container">
        <form action="{{ route('puestos.store') }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label for="idPuesto" class="col-4 col-form-label">Puesto ID :</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="idPuesto" id="idPuesto" placeholder="EJEMPLO: ABC1234" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nombre" class="col-4 col-form-label">Nombre :</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="nombre" id="nombre"
                        placeholder="Nombre" />
                </div>
            </div>
            <div class="mb-3 row">
                <label for="tipo" class="col-4 col-form-label">Tipo :</label>
                <div class="col-8">
                    <input type="text" class="form-control" name="tipo" id="tipo" placeholder="Tipo" />
                </div>
            </div>
            <div class="mb-3 row">
                <div class="offset-sm-4 col-sm-8">
                    <button type="submit" class="btn btn-primary">
                        AGREGAR
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
