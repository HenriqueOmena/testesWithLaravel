<div class="row">
    <select name="cargos">
        @foreach ($cargos as $cargo)
            <option value="{{ $cargo->id}}">
                {{ $cargo->descricao }}
            </option>
        @endforeach
    </select>
</div>
