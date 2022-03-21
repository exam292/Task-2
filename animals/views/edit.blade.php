@extends('app')

@section('content')
<div class="mx-auto row" style="width: 200px;">

	
	<form action="edit-script.php" method="post">
	<input type="hidden" name="id" value="<?php echo $data['pet_id'] ?>" />
		<div class="form-group">
			<label>Name: </label>
			<input class="form-control" type="text" name="name" value="<?php echo $data['pet_name'] ?>" />
		</div>
		<div class="form-group">
			<label>Age: </label>
			<input class="form-control" type="text" name="age" value="<?php echo $data['pet_age'] ?>" />
		</div>
		<div class="form-group">
			<label>Type: </label>
			<input class="form-control" type="text" name="type" value="<?php echo $data['pet_type'] ?>" />
		</div>
		<div style="padding: 20px;">
		<input class="btn btn-primary" type="submit" value="Update"/>
		</div>
	</form>
	<div class="text-centered" style="padding: 20px;">

	</div>
</div>

@endsection