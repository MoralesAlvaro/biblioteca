<div class="form-group">
    <label>{{$fieldName}}</label>
    <select name="{{$nameSelect}}[]" id="{{$nameSelect}}" class="select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
        @foreach($result as $datos)
            <option value="{{$datos->$campo}}">{{$datos->$campo}}</option>
        @endforeach
    </select>
    <!-- Mostando errores de validación -->
    @if ($errors->first($nameSelect))
    <span class="messages" style="color:red">    
    {{ $errors->first($nameSelect) }}
    </span>
    @endif
</div>