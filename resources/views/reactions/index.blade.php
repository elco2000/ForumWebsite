

<h1>Reactions</h1>
@if (session('status'))
    <div class="alert alert-succes">
        {{session('status')}}
    </div>
@endif
<table class="table table-hover table-dark table-striped">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col"></th>
        <th scope="col"></th>
    </tr>
    </thead>

    <tbody>
    @foreach($reactions as $reaction)
        <tr>
            <th scope="row">{{$reaction->id}}</th>
            <td>{{$reaction->title}}</td>
            <td>{{$reaction->body}}</td>
            <td><a href="{{URL::to('posts/'.$reaction->id.'/edit')}}">
                    <button class="tablebutton" type="submit">Edit</button>
                </a></td>
            <td>{{ Form::open(array('url' => '$reactions/'.$reaction->id,  'class' => 'pull-right')) }}
            {{ Form::hidden('_method', 'DELETE') }}
            {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
            {{ Form::close() }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
