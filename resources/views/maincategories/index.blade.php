@extends('adminlayout.layout')

@section('content')




            <table class="table table-bordered" id="dtBasicExample" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>


                <tfoot>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th></th>
                    <th></th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($maincategories as $mainCategory)
                <tr>
                    <td>{{$mainCategory->id, 'DESC'}}</td>
                    <td><a href="maincategories/{{$mainCategory->id}}">{{$mainCategory->title}}</a></td>
                    <td> {{$mainCategory->description}}</td>
                    <td><a href="{{URL::to('maincategories/'.$mainCategory->id.'/edit')}}"><button class="tablebutton" type="submit">Edit</button></a></td>
                    <td>{{ Form::open(array('url' => 'maincategories/'.$mainCategory->id,  'class' => 'pull-right')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'tablebutton')) }}
                        {{ Form::close() }}</td>
                </tr>
                @endforeach
                </tbody>

               <script>
                   $(document).ready(function() {
                       $('#dtBasicExample').DataTable();
                   } );
               </script>

            </table>




    @endsection