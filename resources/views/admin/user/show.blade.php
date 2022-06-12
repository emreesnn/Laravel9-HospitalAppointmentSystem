@extends('layouts.adminwindow')

@section('title', '
 : '.$data->title)


@section('content')

    <!-- Form Elements -->
    <div class="panel panel-default">
        <div class="panel-heading">
            Detail Message Data
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 180px">Id</th>
                        <td>{{$data->id}}</td>
                    </tr>
                    <tr>
                        <th>Name & Surname</th>
                        <td>{{$data->name}}</td>
                    </tr>
                    <tr>
                        <th>E-mail</th>
                        <td>{{$data->email}}</td>
                    </tr>
                    <tr>
                        <th>Roles</th>
                        <td>
                            @foreach ($data->roles as $role)
                                {{$role->name}}<a href="{{route('admin.user.destroyrole',['uid'=>$data->id ,'rid'=>$role->id])}}"class="btn btn-danger"
                                   onclick="return confirm('Deleting !! Are you sure ?')">[X]</a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <th>Created Date</th>
                        <td>{{$data->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Update Date</th>
                        <td>{{$data->updated_at}}</td>
                    </tr>
                    <tr>
                        <th>Add Role to User</th>
                        <td>
                            <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                @csrf
                                <select name="role_id">
                                    @foreach ($roles as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                <div class="panel-footer">
                                    <button type="submit" class="btn btn-primary">Add Role</button>
                                </div>
                            </form>

                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <!-- End Form Elements -->

@endsection
