<h1>Reactions</h1>
<a href="reactions/create">Create</a>
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
        <th scope="col">Edit</th>
        <th scope="col">Delet</th>
    </tr>
    </thead>

    <tbody>
    @foreach($reactions as $reaction)
        <tr>
            <th scope="row">{{$reaction->id}}</th>
            <td><a href="reactions/{{$reaction->id}}">{{$reaction->title}}</a></td>
            <td><a href="reactions/{{$reaction->id}}">{{$reaction->body}}</a></td>
            <td><a href="{{URL::to('reactions/'.$reaction->id.'/edit')}}">
                    <button class="btn btn-small btn-warning" type="submit">Edit</button>
                </a></td>
            <td><a href="reactions/{{$reaction->id}}/delete">
                    <button class="btn btn-small btn-danger" type="submit">Delete</button>
                </a></td>
        </tr>
    @endforeach
    </tbody>
</table>
