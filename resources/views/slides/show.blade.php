<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        
  <p>{{$slide->id}}</p>
  <p>{{$slide->name}}</p>
  <img width="100px" height="100px" src="{{ asset('storage/image/' . $slide->file_path) }}" alt="h">
                    
  <p>{{$slide->created_at}}</p>



</body>
</html>