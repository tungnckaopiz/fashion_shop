<h1>Create Post</h1>
@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all () as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>