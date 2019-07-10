<div class="row row-inputs mb-3">
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
        <input type="text" class="form-control data_inicio"  name="data_inicio" placeholder="Data Inicio">
    </div>
    <div class="col-3">
        <input type="text" class="form-control data_fim"  name="data_fim" placeholder="Data Fim">
    </div>
    <div class="btn-remove">
        <i class="material-icons remove" data-url="">clear</i>
    </div>
</div>
