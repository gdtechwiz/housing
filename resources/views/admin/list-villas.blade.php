<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>List Villas |  StaySmartVillas</title>
<head>
    @include('admin/layouts/head')
</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
    @include('admin/layouts/menu')

    </div>
<!-- main content start-->
<!-- main content start-->
<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					<h2 class="title1">Villas</h2>
					
					
					<div class="table-responsive bs-example widget-shadow">
						
						<table class="table table-bordered table-hover"> 
							<thead>
								 <tr> 
									 <th>#</th> 
									 <th>Villa Name</th> 
									 <th>Location</th>
									 <th>Cost</th> 
									 <th>Featured</th> 
									 <th>Action</th> 
									 
								 </tr> </thead>
								 <tbody> 
							@foreach($villas as $villa)		 
							     <tr>
									 <th scope="row">{{ $loop->index+1 }}</th>
									 <td>{{ $villa->name }}</td> 
									 <td>{{ $villa->location }}</td>
									 <td>{{ $villa->price }}</td>
									 <td>@if($villa->featured_villa == "yes") {{ "Yes" }} @else {{ "No" }} @endif</td>
									 <td><a href="{{ route('admin.villas.edit',$villa->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
									 <td>
									<form id="delete_form_{{ $villa->id }}" action="{{ route('admin.villas.delete',$villa->id) }}" style="display:none;" method="POST">
									{{ csrf_field() }}
									
									<input type="hidden" name="_method" value="delete" />
									</form>
									<a href="" onclick="
									if(confirm('Are You Sure you want to delete this villa?')){
									event.preventDefault();
									document.getElementById('delete_form_{{ $villa->id }}').submit();
									} 
									else
									{ event.preventDefault(); }"><span class="glyphicon glyphicon-trash"></span></a>
									</td>
									 
								 </tr>
							@endforeach
							</tbody>
						 </table> 
					</div>
				</div>
			</div>
		</div>
		
		@include('admin/layouts/menu')
		
		@include('admin/layouts/footer')

</body>
</html>
		