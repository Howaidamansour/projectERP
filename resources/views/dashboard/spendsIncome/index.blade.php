@extends('layouts.dashboard')
@section('content')
@include('dashboard.spendsIncome.form')
@include('dashboard.spendsIncome.edit')


<div class="card card-light mb-1_5 p-3">

<div class="container-fluid">
   <div class="row">
      
      <div class="col-md-12 mb-3">
         <h1 class="text-info d-inline-block">{{ __('user.' . ((int) $type ? 'income' : 'spends')) }}</h1> &nbsp; &nbsp; &nbsp; 
         <button type="button" class="btn btn-primary  mt-2" data-toggle="modal" data-target="#create_modal"
            id="add_unit_btn"><span class="glyphicon glyphicon-plus"
            title="Add Unit"></span>
         {{ __('user.create_' . (int) $type  ? 'income' : 'spend') }}</button>
      </div>

 
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
              
                  <button type="button" class="btn btn-primary mt-2 edit_income_btn" data-route="{{ routeHelper('spendsIncome.income.edit', $row->id) }}" data-toggle="modal" data-target="#edit_modal" id="edit_income_btn">
                      <span class="glyphicon glyphicon-plus" data-toggle="tooltip" data-placement="top" title="Add Unit"></span>
                      {{ __('user.edit') }}
                  </button>
              
                  <form action="{{ routeHelper('spendsIncome.income.destroy', $row->id)}}" method="POST" class="mt-2">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
          
               
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
{{-- @php
dd($row);
@endphp --}}


@stop
{{-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> --}}
<script type="text/javascript" src="{{ asset('assets/js/jquery-3.7.0.min.js') }}"></script>
<script>

   $(document).ready(function () {
      $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
      console.log(2344);
      $('.edit_income_btn').on('click', function () {
         console.log('Button clicked');  

         var route = $(this).data('route');
         console.log('Route:', route);
         $.ajax({
            url: route,
            type: 'GET',
            success: function (data) {
               console.log('test btn success')
               console.log('AJAX success', data);  
               $('#amount2').val(data[0].amount)
               // $('#category_id_option').val(data[0].amount)
               $('#category_id option').each(function () {
                  if ($(this).val() == data[0].category_id) {
                     $(this).prop('selected', true);
                  }
               });
               console.log(data[0].id)

               $('#btn_edit_modal').on('click', function (e) {
                     e.preventDefault();
                     var id  = data[0].id;
                     var routeUpdate = "{{routeHelper('spendsIncome.income.update', ['id' => ':id'])}}"
                     routeUpdate = routeUpdate.replace(':id', id);
                     var form = $(this).closest('form'); 
                     
                     console.log(routeUpdate);
                     console.log('hudaaaaaaaaa')
                     $.ajax({
                        url: routeUpdate,
                        type: 'POST',
                        data: form.serialize(),

                        success: function (data) {
                           console.log('AJAX success', data);  
                           $('#create_modal').modal('hide');
                        
                        },
                        error: function (xhr, status, error) {
                           console.error('AJAX error:', error);  
                        }

                        
                     });

                  });

            },
            error: function (xhr, status, error) {
               console.error('AJAX error:', error);  
            }
         });
      });
      

   

      $('#create_modal').on('hidden.bs.modal', function () {
      $('#amount').val('');
      $('#category_id_option').val('');
     });

      $('#btn_save').on('click', function (e) {
         e.preventDefault(); 
         var form  = $(this).closest('form');
         console.log('Button btn_save clicked'); 
   console.log(form.attr('id')); 
         $.ajax({
           url: form.attr('action'),
           type: 'POST',
           data: form.serialize(),
          
           success: function (data) {
               console.log('AJAX success', data);  
               $('#create_modal').modal('hide');
              
            },
            error: function (xhr, status, error) {
               console.error('AJAX error:', error);  
            }
         
         });


      });
      
      $('#edit_income_btn').on('hidden.bs.modal', function (e) {
      $('#amount').val('');
      $('#category_id_option').val('');
   });

   
     

   });

</script>
@section('js-scripts')







@stop