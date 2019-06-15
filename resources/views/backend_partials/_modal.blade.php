
<div id="DeleteModal" class="modal fade text-danger" role="dialog">
   <div class="modal-dialog modal-md">
     <!-- Modal content-->
     <form action="" id="deleteForm" method="post">
         <div class="modal-content">
             <div class="modal-header bg-danger">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title text-center">DELETE CONFIRMATION</h4>
             </div>
             <div class="modal-body">
                 {{ csrf_field() }}
                 {{ method_field('DELETE') }}
                 <p class="text-center">Are You Sure Want To Delete ?</p>
             </div>
             <div class="modal-footer">
                 <center>
                     <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
                     <button type="submit" name="" class="btn btn-danger" data-dismiss="modal" onclick="formSubmit()">Yes, Delete</button>
                 </center>
             </div>
         </div>
     </form>
   </div>
  </div>


  <!--Add Modal inventory -->
    <div class="modal fade" id="modalForm" tabindex="-1" role="dialog" data-backdrop="static">
        <div class="modal-dialog" role="document">
            <div class="modal-content" id="modal_content">


            </div>
        </div>
    </div>


<!-- Modal Update quantity -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editLabel" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editLabel">Update Quantity</h4>
      </div>

      <form action="{{route('backend.quanties.update','test')}}" method="post">
              @method('patch')
      	    @csrf
	      <div class="modal-body">
	      		<input type="hidden" name="inventory_id" id="inv_id" value="">
				@include('backend.inventory.update_form')
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Save</button>
	      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Give medicine quantity -->
<!-- Modal -->
<div class="modal fade" id="myModal"  role="dialog" aria-labelledby="myModalLabel" data-backdrop="static">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Give Medicine</h4>
      </div>
       <form action="{{route('backend.medicines.store')}}" method="POST">
               @csrf
            <div class="modal-body">
                	@include('backend.medicines.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-bl" data-dismiss="modal"> CLOSE</button>
                    <button type="submit" name="update" class="btn btn-info"> SAVE</button>

            </div>
            </form>
    </div>
  </div>
</div>


<!-- Modal New Appoints -->
<!-- Modal -->
<div class="modal fade" id="timeModal" tabindex="-1" role="dialog" aria-labelledby="timeModalLabel" data-backdrop="static">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="timeModalLabel">New Appointment</h4>
      </div>
       {!! Form::open([
                        'method' => 'POST',
                        'route'  => 'backend.appointments.store'
                    ]) !!}

           @csrf
            <div class="modal-body">
                @include('backend.appointments.form')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-bl" data-dismiss="modal"><i class="fa fa-close"></i> CLOSE</button>
                    <button type="submit" name="update" class="btn btn-info">
                        <i class="fa fa-save"></i> SAVE</button>

            </div>
             {!! Form::close() !!}

    </div>
  </div>
</div>







