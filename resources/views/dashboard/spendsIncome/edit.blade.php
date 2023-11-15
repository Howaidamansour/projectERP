<div class="modal fade" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
   aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            @if($type == 1)
              <h4 class="modal-title" id="myModalLabel">{{ __('user.create_income') }}</h4>
            @endif

            @if($type == 0)
              <h4 class="modal-title" id="myModalLabel">{{ __('user.create_spend') }}</h4>
            @endif

            <button type="button" class="close" data-dismiss="modal">&times;</button>
         </div>
     
            <form role="form" method="post" >
    
            @csrf
            <div class="modal-body pb-0" id="modal-loader-u">

               <div class="form-group">
                  <label class="control-label" for="name">{{ __('user.amount') }}</label>
                  <input class="form-control" name="amount2" id="amount2" value="">
                  <input type="hidden" value="{{$type}}" name="type" id="type">
                  {{-- <input type="hidden" value="{{$row->id}}" name="id" id="transaction_id"> --}}
               </div>

             
               <div class="form-group">
                  <label class="control-label"
                     for="unit_einvoice_code">{{ __('user.category') }}</label>
                  <select class="form-control selectpicker" name="category_id" id="category_id"
                     title="{{ __('user.category') }}">
                     @foreach ($categories as $category)
                     <option  id="category_id_option" value="{{$category->id}}" >{{$category->name}}</option>
                     @endforeach
                     
                   
                  </select>
               </div>
              
            </div>
            <div class="modal-footer d-flex justify-content-end">
               <button class="btn btn-primary "  type="button"  id="btn_edit_modal">{{ __('user.save') }}</button>
               <button type="button" class="btn btn-secondary"
                  data-dismiss="modal">{{ __('user.close') }}
               </button>
            </div>
         </form>
      </div>
   </div>
</div>