<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Edit todo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form action="{{ route('events.update',$id) }}" method="POST" class="" role="form">
			@csrf
			{{method_field('put')}}
				<div class="form-group">
					<legend>Add event</legend>
				</div>
				<div class="form-group">
					<label class="control-label" for="title">title:</label>
					<input name="title" type="text" class="form-control" id="title" placeholder="Enter title" value="{{$event->title}}">
				</div>
				<div class="form-group">
					<label class="control-label" for="content">content:</label>
					<input name="content" type="text" class="form-control" id="content" placeholder="Enter content" value="{{$event->content}}">
				</div>
				<div class="form-group">
					<label class="control-label" for="time">time:</label>
					<div id="datepicker" class="input-group date" data-date-format="dd-mm-yyyy"> 
						<input class="form-control" readonly="" type="text" name="time" value="{{$event->time}}">
						 <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
					</div>
				</div>
				<div class="form-group">
					<label class="control-label" for="location">location:</label>
					<input name="location" type="text" class="form-control" id="location" placeholder="Enter location" value="{{$event->location}}">
				</div>
				
		
				<div class="form-group">
					<div class="">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
		</form>
		</form>
	</div>
</body>
	<!-- Latest compiled and minified CSS & JS -->
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css"><script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript">
$(function () {  
 $("#datepicker").datepicker({         
autoclose: true,
format: 'yy/mm/dd',         
todayHighlight: true 
}).datepicker('update', new Date());
});
</script>
</html>