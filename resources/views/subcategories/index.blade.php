<table class="table">
    <tr class="normaltr">
        <th>Id</th>
        <th>Title</th>
        <th>Description</th>
        <th></th>
        <th></th>
    </tr>

    @foreach($subcategories as $subcategory)

        <tr class="normaltr">
            <td>{{$subcategory->id, 'DESC'}}</td>
            <td><a href="subcategories/{{$subcategory->id}}">{{$subcategory->title}}</a></td>
            <td> {{$subcategory->description}}</td>
            <td><a href="{{URL::to('subcategories/'.$subcategory->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
            <td>{{ Form::open(array('url' => 'subcategories/'.$subcategory->id,  'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                {{ Form::close() }}</td>

        </tr>

    @endforeach
</table>