@extends('cd-admin.admin-master')

<!-- page content -->
@section('content')

@if(Session::has('failure'))
<div class="alert alert-danger">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>DELETED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
</div>
@elseif(Session::has('success'))
<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong> Mail SEND SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
</div>

@elseif(Session::has('success1'))
<div class="alert alert-success">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong> CANCELED SUCCESSFULLY!!!</strong> {{ Session::get('message', '') }}
</div>

@endif

<!-- BEGIN PAGE BAR -->
<div class="page-bar">
	<ul class="page-breadcrumb">
		<li>
			<a href="{{url('cd-admin/dashboard')}}">Home</a>
			<i class="fa fa-circle"></i>
		</li>
	</li>
	<li>
		<span>View all contact message</span>
	</li>
</ul>
</div>
<!-- END PAGE BAR -->

<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase"> View All Contact Message </span>
				</div>
			</div>
			<div class="portlet-body">
        <table class="table table-hover table-striped">
          <tbody>
            @foreach($c as $contact)
            <tr>
              <td class="mailbox-star">
                <button class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$contact->id}}"><i class="fa fa-trash"> </i></button>

                <button class="btn btn-default" data-toggle="modal" data-target="#view{{$contact->id}}"><i class="fa fa-eye"></i></button>

              </td> 
              <td>
                <?php $test = App\ContactReply::where('contact_id',$contact->id)->orderBy('id','desc')->get();
                ?>

                @if(count($test) == NULL)
                <div class="alert alert-danger" style="padding: 2px; width: 80px;" >Not Replied</div>
                @else
                <div class="alert alert-success" style="padding: 2px; width: 55px;" >Replied</div>
                @endif

              </td>

              <td class="mailbox-name">{{$contact->name}}
               <td class="mailbox-subject">{!!str_limit($contact->message,$limits='50')!!}
               </td>
             </td>
             <td class="mailbox-subject">
               {{$contact->phone_no}}
             </td>

             <td class="mailbox-date">
              {{ \Carbon\Carbon::parse($contact->created_at)->format('d/m/Y ')}} </td>


            </tr>
            @endforeach

          </tbody>
        </table>
      </div>
    </div>
    <!-- END EXAMPLE TABLE PORTLET-->
  </div>
</div>

<!-- view modals -->

@foreach($ers as $er)

<div class="modal fade" id="view{{$er->id}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="view"><strong>Name :</strong>  {{$er['name']}} </h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <pre><strong>E-mail : </strong>{{$er['email']}}    </pre>
       <p><strong>Subject : <br></strong>{!!$er['subject']!!} </p>
       <p><strong>Message : <br></strong>{!!$er['message']!!} </p>
       <p><strong>Phone No. :</strong>{{$er['phone_no']}}</p>
     </div>
     <div class="modal-footer">
       <a href="{{url('/cd-admin/reply-contact/'.$er->id)}}"><button type="submit" class="btn btn-primary pull-left">Reply</button></a>
       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

     </div>
   </div>
 </div>
</div>


<div class="modal modal-danger fade" id="modal-danger{{$er['id']}}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Message from web</h4>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete ?&hellip;</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Cancel</button>
          <a href="{{url('/cd-admin/delete-Message/'.$er['id'])}}"> <button type="button" class="btn btn-outline">Yes</button></a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  @endforeach
  @endsection