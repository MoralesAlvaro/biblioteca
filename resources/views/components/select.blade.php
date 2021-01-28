<div class="form-group">
    <label>{{$fieldName}}</label>
    <select class="form-control select2" name="{{$nameSelect}}" data-placeholder="{{$paceholder}}" style="width: 100%;" value="{{ old($nameSelect) }}">
        @foreach($result as $datos)
            <option value="{{$datos->id}}">{{$datos->$campo}}</option>
        @endforeach        
    </select>
    <!-- Mostando errores de validación -->
    @if ($errors->first($nameSelect))
    <span class="messages" style="color:red">    
    {{ $errors->first($nameSelect) }}
    </span>
    @endif
</div>