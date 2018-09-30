 <h1>Posts</h1>
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
        @foreach($posts as $post)
            <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td><a href="{{URL::to('posts/'.$post->id.'/edit')}}">
                        <button class="tablebutton" type="submit">Edit</button>
                    </a></td>
                <td>{{ Form::open(array('url' => '$posts/'.$post->id,  'class' => 'pull-right')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                    {{ Form::close() }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
