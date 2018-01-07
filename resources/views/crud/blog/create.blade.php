
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add a new post!</h4>
      </div>
      <div class="modal-body">
      {!! Form::open(['route'=>'blog.store']) !!}
            @include('crud.blog._form')
            
           
            {!! Form::close() !!}
      </div>
     
    </div>

  </div>
</div>


