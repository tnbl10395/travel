<?php 
	$client = new GuzzleHttp\Client();
	$request = $client->get('http://localhost:8000/api/location');
	$response = $request->getBody();
	$res = json_decode($response,true);

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">


</head>
<body>
	<a href="location/insert">Insert</a>
	<div class="container">
		<table class="table table-dark table-hover">
			<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Picture</th>
				<th>Description</th>
				<th>Map</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			</thead>
			<tbody>
			@foreach($res as $obj)
				<tr>
					<td>{{$obj['locationID']}}</td>
					<td>{{$obj['locationName']}}</td>
					<td><img src="{{$obj['picture']}}" alt=""></td>
					<td>{{$obj['description']}}</td>
					<td>{{$obj['map']}}</td>
					<td><a href=""><i class="fa fa-pencil-square-o"></i></a></td>
					<td><a href="location/delete/{{$obj['locationID']}}"><i class="fa fa-times"></i></a></td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</body>
</html>