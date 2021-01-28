
<div class="form-group">
    <label for="{{$nameInput}}">{{$nameLabel}}</label>
    <div class="input-group">
        <div class="custom-file">
            <input type="file" accept="image/*" class="custom-file-input" name="{{$nameInput}}" id="{{$nameInput}}">
            <label class="custom-file-label" for="{{$nameInput}}">Buscar</label>
        </div>
        <!-- Mostando errores de validación -->        
        @if ($errors->first($nameInput))
        <span class="messages" style="color:red">    
        {{ $errors->first($nameInput) }}
        </span>
        @endif
    </div>
</div>
