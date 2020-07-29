@extends('layouts.app')

@section('content')
<div class="container">
  <h1 class="text-center mt-4">Registrar Establecimiento</h1>

  <form class="col-md-9 col-xs-12 card card-body">
		<fieldset class="border p-4">
			<legend class="border p-4">Nombre y Categoría</legend>

			<div class="form-group">
				<label for="nombre">Nombre Establecimiento</label>
				<input type="text"
						id="nombre"
						class="form-control @error('nombre') is-invalid @enderror"
						placeholder="Nombre Establecimiento"
						name="nombre"
						value="{{ old('nombre') }}"
					>
					@error('nombre')
							<div class="invalid-feedback">
							{{ $message }}
							</div>
					@enderror
			</div>


				<div class="form-group">
					<label for="categoria">Categoria</label>
					<select
							class="form-control @error('categoria_id') is-invalid @enderror"
							name="categoria_id"
							id="categoria"
					>
						<option value="" selected disabled>-- Seleccione --</option>
						 @foreach($categorias as $categoria)
							<option value="{{ $categoria->id }}">{{$categoria->nombre}}</option>
						 @endforeach
					</select>
				</div>
				



		</fieldset>
  </form>
</div>
@endsection