
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Product</h4>
      </div>
      <div class="modal-body">
      {!! Form::open(['route'=>'product.store']) !!}
            @include('crud.product._form')
            
           
            {!! Form::close() !!}
      </div>
     
    </div>

  </div>
</div>


