 @extends('layout.app')
 @section('content')


 <div class="container pt-5">
     <div class="row">
         <div class="table table-responsive">

             <table class="table table-bordered" id="table">
                 <tr>
                     <th>id</th>
                     <th>name</th>
                     <th>email</th>
                     <th>phone</th>
                     <th class="text-center" width="150px">

                         <a href="#" class="create-modal btn btn success btn-sm">
                             <button type="button" class=" create-modal btn btn-primary" data-toggle="modal" data-target="#addmodal">
                                 add
                             </button>
                         </a>
                     </th>
                 </tr>
                 @csrf

                 @foreach($post as $data)

                 <tr>
                     <td>{{$data->id}}</td>

                     <td>{{$data->name}}</td>
                     <td>{{$data->email}}</td>
                     <td>{{$data->phone}}</td>

                     <td>
                         <a href="#" class="show-modal btn btn-info btn-sm" data-id="{{$data->id}}" data-title="{{$data->name}}" data-body="{{$data->body}}">
                             show
                         </a>
                         <a href="#" class="edit-modal btn btn-warning btn-sm" data-id="{{$data->id}}" data-title="{{$data->name}}" data-body="{{$data->body}}">
                             edit
                         </a>
                         <a href="#" class="delete-modal btn btn-danger btn-sm" data-id="{{$data->id}}" data-title="{{$data->name}}" data-body="{{$data->body}}">
                             delete


                     </td>
                 </tr>

                 @endforeach
             </table>
         </div>

     </div>

 </div>


 <!-- Modal -->
 <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 <form role="form " id="submt_form">


                     <div class="form-group">
                         <label for="exampleInputEmail1"> name</label>
                         <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="name ">
                       
                     </div>
                     <div class="form-group">
                         <label for="exampleInputPassword1">email</label>
                         <input type="email" class="form-control" id="email" placeholder="email">
                     </div>

                     <div class="form-group">
                         <label for="phone">phone</label>
                         <input type="phone" class="form-control" id="phone" placeholder="phone">
                     </div>
             
                     <button type="button" class="btn btn-primary" id="add">Submit</button>
                 </form>

             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                 <button type="button" class="btn btn-primary">Save changes</button>
             </div>
         </div>
     </div>
 </div>
 @endsection