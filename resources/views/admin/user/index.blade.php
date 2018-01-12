@extends('admin.master-admin')
@section('content')
    <div class="box box-primary">
         <div class="box-header with-border">
            <h1>Manage User</h1>
         </div>
         @if(session('infor'))    <!-- display infor -->
        <div class="alert alert-success">
            <p>{{ session('infor') }}</p>
        </div>
           @endif
           <div class="box">
               <div class="box-body">
                   <table class="table table-bordered" id="mytable" border="0">
                       <tr class="mytr" >
                         <th class="myth">Index</th>
                         <th class="myth">User name</th>
                         <th class="myth">Roles</th>
                         <th class="myth">Email</th>
                         <th class="myth">Change Roles</th>
                         <th class="myth">Delete</th>
                       </tr>
                       @foreach($users as $index => $user)
                       <tr>
                           <td >{{ $index + 1 }}</td>
                           <td ><b>{{$user->name}}</b></td>
                           <td >
                               @if(($user->roles)==2) Admin @endif
                               @if(($user->roles)==1) Editor @endif
                               @if(($user->roles)==0) User @endif
                           </td>
                           <td >{{$user->email}}</td>
                           <td ><a href="{{url('administrator/user/edit-user')}}/{{$user->id}}" style="color:red" class="click"><button type="button" class="btn btn-success">Edit</button></a></td>
                           <td ><a href="{{url('administrator/user/delete-user')}}/{{$user->id}}" style="color:red" class="click" onclick="return confirm('Are you sure ?');"><button type="button" class="btn btn-danger">Delete</button></a></td>
                       </tr>
                       @endforeach
                   </table>
               </div>
         </div>

    </div>
@stop
