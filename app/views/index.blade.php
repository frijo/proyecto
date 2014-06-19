@extends('layouts.base')

@section('cabecera')
    @parent
@stop

@section('cuerpo')
	@parent
	<!-- Si ocurre algún error en la creación, se mostrará aquí -->
	{{ HTML::ul($errors->all() )}}

<!--	<div class='center'>

    	<h1 class="">Music Box</h1>
    	<form  enctype="multipart/form-data"  action="image.php" method="POST">
    		<label class="labelUploadFile" for="uploadFile">Select File to Convert</label>
    		<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
			<input name="uploadedfile" class='uploadFile' type="file" accept="image/*">
			</br>
			<label class="labelUploadFile" for="ext">Convert to: </label>
			<select name="ext">
				<option>mp4</option>
				<option>wav</option>
				<option>vlc</option>
			</select>	
			</br>
			<input type="submit" value="Convert!">
		</form>
	</div>​

	{{ Form::open(array('url' => 'upload')) }}
			<h1 class="">Music Box</h1>
			{{ Form::label('uploadFile', 'Select File To Convert') }}
			{{ Form::file('audio_file') }}
			</br>
			
			{{ Form::submit('Convert!') }}

	{{ Form::close() }}
-->
<div class='center'>
	{{ Form::open(array('url'=>'upload','method' => 'post','files' => true))}}

		<h1 class="">Music Box</h1>
			{{ Form::label('uploadFile', 'Select File To Convert') }}
			{{ Form::file('archivo') }}
			</br>
			
			{{ Form::submit('Convert!') }}

		{{ Form::close()}}
	
</div>
	
@stop