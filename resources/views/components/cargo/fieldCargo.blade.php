<div class="row">

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
    <div class="col-4">
        <input type="text" class="form-control" id="data_fim" placeholder="Data Fim">
    </div>
</div>
