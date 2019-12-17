<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>
		cd &lt;your-app-folder&gt;<br>
	    git init<br>
	    git remote add deploy {{ $data['absolutePath'] }}<br>
	    <br>
	    git add . <br>
	    git commit -m "&lt;commit message&gt;"<br>
	    git push deploy master
	</p>	
	
    {!! Form::open(['method'=>'put', 'route'=>['repo.create.importEnd', $data['title'] ]]) !!}

    	{!! Form::submit('Import') !!}

    {!! Form::close() !!}

</body>
</html>