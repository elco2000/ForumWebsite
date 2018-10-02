
<div>
    <h1>Title: {{$reaction->title}}</h1>
    <h2>Body: {{$reaction->body}}</h2>
</div>

<script>
    function confirmDelete() {
        var result = confirm('Are you sure you want to delete this reaction?');
        return result;
    }
</script>

<td>{{ Form::open(array('url' => 'reactions/'.$reaction->id,  'class' => 'pull-right', 'onsubmit' => 'return confirmDelete()')) }}
    {{ Form::hidden('_method', 'DELETE') }}
    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
    {{ Form::close() }}</td>
