<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
  <h1>Projects</h1>
<ol type=1>
  @foreach($projects as $project)
    <li>{{$project->title}}</li>  
    <ul>
    	<li>{{$project->description}}</li>
	</ul>
  @endforeach
</ol>
    
</body>
</html>