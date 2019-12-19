<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>List Bookings |  StaySmartVillas</title>
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
					<h2 class="title1">List Of Bookings</h2>
					
					
					<div class="table-responsive bs-example widget-shadow">
						
						<table class="table table-bordered table-hover"> 
							<thead>
								 <tr> 
									 <th>#</th> 
									 <th>Customer Name</th> 
									 <th>Villa Name</th>
									 <th>Email</th> 
									 <th>Phone</th> 
									 <th>View More</th> 
									 
								 </tr> </thead>
								 <tbody> 
							@foreach($bookings as $booking)		 
							     <tr>
									 <th scope="row">{{ $loop->index+1 }}</th>
									 <td>{{ $booking->customer_name }}</td> 
									 <td>{{ $booking->villa_name }}</td>
                                     <td>{{ $booking->email }}</td>
                                     <td>{{ $booking->phone_no }}</td>
									 
									 <td><a><span class="glyphicon glyphicon-edit"></span></a></td>
									 
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
		