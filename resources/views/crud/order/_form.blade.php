@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
<div class="container">
     <div class="row">
                <div class="col-xs-6">
    
    <div class="form-group">
                <label>Date of booking: format. 'MM/DD/YYYY'</label>

                <div class="input-group date">
                  
               
         {!!  Form::text('book',null,['class'=>'form-control', 'id'=>'datepicker']) !!}
         <div class="input-group-addon">
                    <i class="fa fa-calendar" id="datepicker"></i>
                  </div>
                  </div>
                <!-- /.input group -->
              </div>

              <div class="form-group">
{!! Form::label('comment', 'Comment')!!}
{!!  Form::text('comment',null,['class'=>'form-control']) !!}</div>

<div class="form-group">
{!! Form::label('confirmed', 'Status')!!}
 {{ Form::select('confirmed', ['Pending', 'Confirmed','Admin Reservation'], null, ['class' => 'form-control']) }}</div>
     


              </div>
            </div>







{!! Form::button('<i class="fa fa-floppy-o"></i>&nbsp;Save',['class'=>'btn btn-primary','type'=>'submit']) !!}
{!! Form::button('<i class="fa fa-refresh"></i>&nbsp;Reset',['class'=>'btn btn-warning','type'=>'reset']) !!}
<a href="{{url('order')}}" class="btn btn-danger"><i class="fa fa-arrow-left"></i>&nbsp;Cancel</a>
</div>

{{--bugs on
 {!!  Form::text('book',null,['class'=>'form-control', 'id'=>'datepicker']) !!}
--}}