{!! Form::open(array('url' => 'subcategories/'.$subcategory->id, 'method' => 'PATCH')) !!}
{!! Form::token() !!}

<div class="form-group">
    {!! Form::label('title', 'title'); !!}<br>
    {!! Form::text('title', $subcategory->title, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'description'); !!}<br>
    {!! Form::textarea('description', $subcategory->description, array('class' => 'form-control')) !!}
</div>
<div class="form-group">
    {!! Form::submit('Submit', array('class' => 'tablebutton')); !!}
    {!! Form::close() !!}
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