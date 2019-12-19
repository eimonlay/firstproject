<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
</head>
<body>

  <h1>Create New Project</h1>
    <form method="POST" action="/projects">
        {{csrf_field()}}
        <div class="form-group">
            <label for="title">Project Title</label>
            <input type="text" class="form-control" name="title">
            
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description"></textarea>
        </div>

        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
</body>
</html>