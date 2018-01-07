
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reservation for Free Day</h4>
      </div>
      <div class="modal-body">
      
      {!! Form::open(['route'=>'order.store']) !!}
            @include('crud.order._form')
            
           
            {!! Form::close() !!}
  
       
    
      </div>
     
    </div>

  </div>
</div>



<div id="myOrder" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cart Detail</h4>
      </div>
      <div class="modal-body">
 
     <!---starto-->
      <?php
      if(isset($_COOKIE['abc'])) { 
        $nopenting =$_COOKIE["abc"];
      echo '<b>Transaction key: </b>'.$nopenting;
      
      }

   
   ?>
    
   
  
  
<div class="row">
        <div class="col-md-10 col-md-offset-2">
             
<h4>We are using cookies, so if the Payment id is not same as your choice, please hold [Shift]+[F5]. Sorry for inconvenient, our development team will do more work on better interface</h4>
<?php if(isset($_COOKIE['abc'])) { ?>
                  
                    @foreach($orders as $order)
                     
                   @if($order->payment_id==$nopenting)
                  
                  {!!$order->cart!!}
                  @endif
      
                    @endforeach
               
               <?php } ?>
        </div>
    </div>
     <!---endto-->
  
       
    
      </div>
     
    </div>

  </div>
</div>
