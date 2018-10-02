
    <div>
        <h1>Title: {{$post->title}}</h1>
        <h2>Body: {{$post->body}}</h2>
    </div>

    <script>
        function confirmDelete() {
            var result = confirm('Are you sure you want to delete this post?');
            return result;
        }
    </script>

    <td>{{ Form::open(array('url' => 'posts/'.$post->id,  'class' => 'pull-right', 'onsubmit' => 'return confirmDelete()')) }}
        {{ Form::hidden('_method', 'DELETE') }}
        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
        {{ Form::close() }}</td>
