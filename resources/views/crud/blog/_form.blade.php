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
 <td>{{ Form::select('type', ['Uncategorized', 'News ', 'Achievement'], null, ['class' => 'form-control']) }}
     
</td>
        
    </tr>
    <tr>
        <td width="25% ">&nbsp;</td>
        <td> &nbsp;</td>
    </tr>
    <tr>
        <td width="25% ">{!! Form::label('content', 'Content')!!}</td>
        <td> {!!  Form::textarea('content',null,['class'=>'form-control']) !!}</td>
    </tr>

    <tr>
        <td width="25% ">&nbsp;</td>
        <td> &nbsp;</td>
    </tr>

</table>




{!! Form::button('<i class="fa fa-floppy-o"></i>&nbsp;Save',['class'=>'btn btn-primary','type'=>'submit']) !!}
{!! Form::button('<i class="fa fa-refresh"></i>&nbsp;Reset ',['class'=>'btn btn-warning','type'=>'reset']) !!}
<a href="{{url('blog')}}" class="btn btn-danger"><i class="fa fa-arrow-left"></i>&nbsp;Cancel</a>


