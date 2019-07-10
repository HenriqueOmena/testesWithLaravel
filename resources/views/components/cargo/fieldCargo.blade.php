<div class="row px-5">

    <div class="row">
        <select name="cargos" class="form-control">
            @foreach ($cargos as $cargo)
                <option value="{{ $cargo->id}}">
                    {{ $cargo->descricao }}
                </option>
            @endforeach
        </select>


    </div>
</div>
