<div class="row">
    <div class="col-12 text-center mb-3">
        <i class="material-icons plus" data-url="">add_circle_outline</i>
    </div>
    <div class="col-4">
        <select name="cargos" class="form-control">
            @foreach ($cargos as $cargo)
                <option value="{{ $cargo->id}}">
                    {{ $cargo->descricao }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-4 px-0">
        <input type="text" class="form-control" id="data_inicio" name="data_inicio" placeholder="Data Inicio">
    </div>
    <div class="col-3">
        <input type="text" class="form-control" id="data_fim" placeholder="Data Fim">
    </div>
    <div class="bg-danger">
        <i class="material-icons plus" data-url="">clear</i>
    </div>
</div>
