@extends('layouts.dashboard')
@section('content')

<div class="card card-light mb-1_5 p-3">

<div class="container-fluid">
   <div class="row">

    <div class="col-md-12 mb-3">
   

    </div>
         <div class="col-md-12 mb-3">
            <h1 class="text-info d-inline-block">{{ __('user.category_name') }}</h1> &nbsp; &nbsp; 
            <button class="btn btn-primary  mt-2" style="margin-left: 200px" data-toggle="modal" data-target="#create_modal"
               id="add_unit_btn"><span class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top"
               title="Add Unit"></span>
            {{ __('user.create_category') }}</button>
         </div>
 


   


      <div class="table-responsive">
         <table class="col-md-12 table zui-table zui-table-rounded table-striped table-hover bg-white">
            <thead>
               <tr class="text-center" >
                  <th scope="col">#</th>
                  
                 
                  <th scope="col">{{ __('user.category') }}</th>
               
               
               </tr>
            </thead>
            <tbody>
         @foreach ($categories as $category)
         <tr class="text-center"  data-iterator="">
            <td> {{$loop->iteration}} </td>
            <td >{{$category->name}}</td>
          
           
           
         </tr>
         @endforeach
               
       
            </tbody>
         </table>
      </div>
   </div>
</div>
</div>
<div class="modal fade" id="create_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="myModalLabel">{{ __('user.create_category') }}</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <form role="form" action="{{ routeHelper('category.store')}}" method="post" id="add_unit">
            @csrf
            <div class="modal-body pb-0" id="modal-loader-u">
               <div class="form-group">
                  <label class="control-label" for="name">{{ __('user.category_name') }}</label>
                  <input class="form-control" name="name" id="name">
               </div>
             
              
            </div>
            <div class="modal-footer d-flex justify-content-end">
               <button class="btn btn-primary" type="submit">{{ __('user.save') }}</button>
               <button type="button" class="btn btn-secondary mr-1"
                  data-dismiss="modal">{{ __('user.close') }}
               </button>
            </div>
         </form>
      </div>
   </div>
</div>
@stop
@section('js-scripts')

@stop