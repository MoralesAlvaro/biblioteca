<div class="form-group">
    <label for="exampleInputEmail1">{{$fieldName}}</label>
    <input type="{{$type}}" class="form-control" name="{{$nameInput}}" id="{{$nameInput}}"  value="{{ $result->$nameInput }}" maxlength="{{$maxlength}}" minlength="{{$minlength}}">

    <!-- Mostando errores de validación -->
    @if ($errors->first($nameInput))
    <span class="messages" style="color:red">    
    {{ $errors->first($nameInput) }}
    </span>
    @endif
</div>