@if(count($errors))
    <div class="form-group">
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </ul>

        </div>
    </div>
@endif