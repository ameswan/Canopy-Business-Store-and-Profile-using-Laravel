@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif
<table width="80%">
    
    
    <tr>
        <td width="25% ">{!! Form::label('title', 'Title')!!}</td>
        <td> {!!  Form::text('title',null,['class'=>'form-control']) !!}</td>
    </tr>
    <tr>
        <td width="25% ">&nbsp;</td>
        <td> &nbsp;</td>
    </tr>
     <tr>
        <td>{!! Form::label('type', 'Type')!!}</td>
 <td>{{ Form::select('type', ['Uncategorized', 'Product ', 'Services'], null, ['class' => 'form-control']) }}
     
</td>
        
    </tr>
    <tr>
        <td width="25% ">&nbsp;</td>
        <td> &nbsp;</td>
    </tr>
     <tr>
        <td width="25% ">{!! Form::label('price', 'Price')!!}</td>
        <td> {!!  Form::text('price',null,['class'=>'form-control']) !!}</td>
    </tr>
    <tr>
        <td width="25% ">&nbsp;</td>
        <td> &nbsp;</td>
    </tr>
    <tr>
        <td width="25% ">{!! Form::label('description', 'Description')!!}</td>
        <td> {!!  Form::textarea('description',null,['class'=>'form-control']) !!}</td>
    </tr>
    <tr>
        <td width="25% ">&nbsp;</td>
        <td> &nbsp;</td>
    </tr>
    <tr><td></td><td>
        <p style="color:red;">If you want to use your images in file manager, just key in 'uploads/[imgname.format]'</p>
    </td></tr>
    <tr>
        <td width="25% "><br>
        {!! Form::label('imagePath', 'Image path')!!}</td>
        <td> {!!  Form::text('imagePath',null,['class'=>'form-control']) !!}</td>
    </tr>
    <tr>
        <td width="25% ">&nbsp;</td>
        <td> &nbsp;</td>
    </tr>

</table>




{!! Form::button('<i class="fa fa-floppy-o"></i>&nbsp;Save',['class'=>'btn btn-primary','type'=>'submit']) !!}
{!! Form::button('<i class="fa fa-refresh"></i>&nbsp;Reset',['class'=>'btn btn-warning','type'=>'reset']) !!}
<a href="{{url('product')}}" class="btn btn-danger"><i class="fa fa-arrow-left"></i>&nbsp;Cancel</a>

