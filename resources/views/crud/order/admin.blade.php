@extends('vendor.backpack.base.layout')

@section('htmlheader_title')
Order
@endsection

@section('contentheader_title')
Order
@endsection

@section('content')
<section class="content-header">
    <h1>
        @yield('contentheader_title', '')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-gears"></i> Systems</a></li>
        <li><a href="#">@yield('contentheader_title')</a></li>

    </ol>
</section>
<br><br>
<div class="container-fluid spark-screen">
    <div class="row">
        <div class="box box-primary">
            <div class="box-body " style="overflow-y:auto;" width="100%">
        
        <div class="col-xs-12 well">
           <a href="#" class="btn bg-navy"  data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i>&nbsp; Reserve for Holiday/Busy-day</a><br><br>
          
          
            <table  class="table table-bordered table-hover table-inverse" >
                <thead  style="border:solid 2px; border-color:black" class="thead-inverse">
                    <tr>
                        <td>No.</td>
                        <td>User ID</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Address</td>
                        <td>Payment ID</td>
                        <td>Phone</td>
                         <td>Book</td>
                         <td>Comment</td>
                        <td>Confirmed</td>
                        <td>Action</td>
                    </tr>
                </thead>
               
                <tbody>
                    <?php $i=1; ?>
                  
                    @foreach($orders as $order)
                    <tr>
                        
                        <td>{{$i++}}</td>
                        <td>{{$order->user_id}}</td>
                        <td>{{$order->name}}</td>
                        <td>@foreach($users as $user) 
                         
                        @if($order->user_id==$user->id)
                              {{$user->email}}
                        @endif
                             @endforeach
                             </td>
                        <td>{{$order->address}} </td>

                        <td><a href="#" class="open-AddBookDialog btn bg-navy" data-id="{!!$order->payment_id!!}" data-toggle="modal" data-target="#myOrder"> {{$order->payment_id}}</a></td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->book}}</td>
                        <td>{{$order->comment}}</td>
                        <td>@if($order->confirmed==1)DONE @elseif($order->confirmed==2)Admin Reserve @else PENDING @endif</td>
                        


                        <td width="32%"><div class="pull-left"><a href="{{url('order/'.$order->id.'/edit')}}" class="btn bg-maroon"><i class="fa fa-pencil"></i>&nbsp Update</a></div></td>

                    </tr>
                    @endforeach
                    
                </tbody>

            </table>

        </div>
            </div></div></div>
</div>
 @include('crud.order.create')
@endsection
<!--<script>
    $(document).ready(function(){
        setTimeout(function() {
          $('#alert').fadeOut('slow');
        }, 900); // <-- time in milliseconds
    });
    </script>-->

    @section('after_scripts')
    <script>
$(document).on("click", ".open-AddBookDialog", function () {
     var myBookId = $(this).data('id');
    // $(".modal-body #bookId").val( myBookId );
    createCookie("abc",myBookId, "10"); 
     // As pointed out in comments, 
     // it is superfluous to have to manually call the modal.
     // $('#addBookDialog').modal('show');
});

    function createCookie(name, value, days) {
 var expires;
 if (days) {
  var date = new Date();
  date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
  expires = "; expires=" + date.toGMTString();
 } else {
  expires = "";
 }
  document.cookie = escape(name) + "=" + escape(value) + expires + "; path=/";
 }
</script>
<script>
  $(function () {
    

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });


    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
@endsection