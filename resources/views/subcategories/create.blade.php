{!! Form::open(array('url' => 'subcategories', 'method' => 'POST')) !!}
{!! Form::token() !!}
<div class="form-group">
    <div class="">
        {!! Form::label('title', 'Title'); !!}<br>
        {!! Form::text('title', '', array('class' => '')) !!}
    </div>
    <div class="">
        {!! Form::label('description', 'description'); !!}<br>
        {!! Form::textarea('description', '', array('class' => '')) !!}
    </div>
    <div class="">
        {!! Form::submit('Submit', array('class' => '')); !!}<br>
        {!! Form::close() !!}
    </div>
</div>


@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif