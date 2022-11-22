<div class="mb-3">
    <div class="form-group mb-3">
        <label for="name">Name:</label>
        <input 
            type="name"     
            class="form-control" 
            id="name" 
            name="name" 
            placeholder="Enter name"
            value="{{$client->name ?? ''}}">
    </div>
    
    <div class="form-group">
        <label for="rfc">RFC:</label>
        <input 
            type="rfc"
            class="form-control"
            id="rfc"
            name="rfc"
            placeholder="Enter RFC"
            value="{{$client->rfc ?? ''}}">
    </div>

    @if (isset($isEdit))
        <input type="hidden" id="user_id" name="user_id" value="{{$client->user_id}}">
    @endif
</div>