<div class="">
    <!-- textarea -->
    <div class="form-group">
    <label>{{$fieldName}}</label>
    <textarea name="{{$nameText}}" id="{{$nameText}}" class="form-control" rows="3" placeholder="..." value="{{ old($nameText) }}"></textarea>
    @if ($errors->first($nameText))
        <span class="messages" style="color:red">    
        {{ $errors->first($nameText) }}
        </span>
        @endif
    </div>
</div>