
    <h1>Posts</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {!! Form::open(['url' => 'posts/'.$post->id , 'method' => 'PATCH']) !!}
    {!! Form::token() !!}

    <div class="form-group">
        {!! Form::label('title', 'Title'); !!}
        {!! Form::text('title', $post->title ,array('class' => 'form-control'))!!}
    </div>

    <div class="form-group">
        {!! Form::label('body', 'Body'); !!}
        {!! Form::textarea('body', $post->body ,array('class' => 'form-control'))!!}
    </div>

    <div class="form-group">
        {!! Form::submit('Submit'); !!}
        {!! Form::close() !!}
    </div>

