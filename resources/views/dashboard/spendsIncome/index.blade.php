@extends('layouts.dashboard')
@section('content')

<div class="card card-light mb-1_5 p-3">

<div class="container-fluid">
   <div class="row">
      <div class="col-md-12 mb-3">
         <h1 class="text-info d-inline-block">{{ __('user.income') }}</h1>
         <button class="btn btn-primary float-left mt-2" data-toggle="modal" data-target="#create_modal"
            id="add_unit_btn"><span class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top"
            title="Add Unit"></span>
         {{ __('user.create_income') }}</button>
      </div>
      <div class="table-responsive">
         <table class="col-md-12 table zui-table zui-table-rounded table-striped table-hover bg-white">
            <thead>
               <tr>
                  <th scope="col">#</th>
                  <th scope="col">{{ __('user.name') }}</th>
                 
                  <th scope="col">{{ __('user.category') }}</th>
               
                  <th scope="col">{{ __('user.amount') }}</th>
                  <th scope="col">{{ __('user.user') }}</th>
                  <th scope="col">{{ __('user.action') }}</th>
               </tr>
            </thead>
            <tbody>
         {{-- @foreach ($rows as $row) --}}
         <tr class="text-center"  data-iterator="">
            <td></td>
            <td ></td>
          
            <td>
               
            </td>
            <td></td>
            <td></td>
            <td></td>
   
           
         </tr>
         {{-- @endforeach --}}
               
       
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
            <h4 class="modal-title" id="myModalLabel">{{ __('units.add_unit') }}</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
         <form role="form" action="#" method="post" id="add_unit">
            @csrf
            <div class="modal-body pb-0" id="modal-loader-u">
               <div class="form-group">
                  <label class="control-label" for="name">{{ __('units.unit_name') }}</label>
                  <input class="form-control" name="name" id="name">
               </div>
             
               <div class="form-group">
                  <label class="control-label"
                     for="unit_einvoice_code">{{ __('units.unit_einvoice_code') }}</label>
                  <select class="form-control selectpicker" name="unit_einvoice_code" id="unit_einvoice_code"
                     title="{{ __('units.select_unit_einvoice_code') }}">
                     
                   
                  </select>
               </div>
              
            </div>
            <div class="modal-footer d-flex justify-content-end">
               <button class="btn btn-primary" type="submit">{{ __('extends.save') }}</button>
               <button type="button" class="btn btn-secondary mr-1"
                  data-dismiss="modal">{{ __('extends.close') }}
               </button>
            </div>
         </form>
      </div>
   </div>
</div>
@stop
@section('js-scripts')

@stop