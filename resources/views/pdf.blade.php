<!DOCTYPE html>
<html>
<head>
    <title>laravel 6 file upload example - ItSolutionStuff.com.com</title>
    <link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">
</head>

<body>
<div class="container">

    <div class="panel panel-primary">
        <div class="panel-heading"><h2>laravel 6 file upload example - ItSolutionStuff.com.com</h2></div>
        <div class="panel-body">


            <div class="alert alert-danger">
                <strong>files</strong>
                <ul>
                    @foreach($posts as $post)
                        <p>{{$post->title}}</p>
                        <a href="{{asset('storage/files/'.'/'.$post->file)}}">{{$post->file}}</a>
                    @endforeach
                </ul>
            </div>


        </div>
    </div>
</div>
</body>

</html>
