@extends('layouts.dashboard')
@section('content')

<div class="card card-light mb-1_5 p-3">

<div class="container-fluid">
   <div class="row">
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <ul>
              <li>{!! \Session::get('success') !!}</li>
          </ul>
      </div>
  @endif
      @if($type == 1)
         <div class="col-md-12 mb-3">
            <h1 class="text-info d-inline-block">{{ __('user.income') }}</h1> &nbsp; &nbsp; &nbsp; 
            <button class="btn btn-primary  mt-2" data-toggle="modal" data-target="#create_modal"
               id="add_unit_btn"><span class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top"
               title="Add Unit"></span>
            {{ __('user.create_income') }}</button>
         </div>
      @endif


      @if($type == 0)
      <div class="col-md-12 mb-3">
         <h1 class="text-info d-inline-block">{{ __('user.spends') }}</h1> &nbsp; &nbsp; &nbsp; 
         <button class="btn btn-primary mt-2" data-toggle="modal" data-target="#create_modal"
            id="add_unit_btn"><span class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top"
            title="Add Unit"></span>
         {{ __('user.create_spend') }}</button>
      </div>
   @endif


      <div class="table-responsive">
         <table class="col-md-12 table zui-table zui-table-rounded table-striped table-hover bg-white">
            <thead>
               <tr class="text-center">
                  <th scope="col">#</th>

                 
                  
                  <th scope="col">{{ __('user.user') }}</th>
                  <th scope="col">{{ __('user.amount') }}</th>
                  <th scope="col">{{ __('user.category') }}</th>
                 
                  <th scope="col">type</th>
                  <th scope="col">{{ __('user.action') }}</th>
               </tr>
            </thead>
            <tbody>
         {{-- @foreach ($rows as $row) --}}
         @foreach ($rows as $row)
         <tr class="text-center"  data-iterator="">
            
                
          
            <td>{{$loop->iteration}}</td>
          
            <td>
             {{$row->user->name}}  
            </td>
            <td>{{$row->amount}}</td>
            <td>{{$row->category->name}}</td>
            <td>{{$row->type}}</td>
           
<td>
               <a href="{{ routeHelper('spendsIncome.income.edit', $row->id)}}"  ><button data-target="#create_modal" class="btn btn-primary" > Edit </button> </a>
              <a href="{{ routeHelper('spendsIncome.income.destroy', $row->id)}}" > <button data-target="#create_modal" class="btn btn-danger" > Delete     </button> </a>
            </td>
   
           
         </tr>
         @endforeach
         {{-- @endforeach --}}
               
       
            </tbody>
         </table>
      </div>
   </div>
</div>
</div>
@include('dashboard.spendsIncome.form')
@stop
@section('js-scripts')

@stop