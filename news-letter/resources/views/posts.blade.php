<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Posts</title>

    <style>
        .principal {
            margin-top: 1em;
        }
        .conteudo-central {
            display: flex;
            align-items: center;
            flex-direction: column;
        }
        .botaozinho {
            text-align: left;
            position: absolute;
            left: 381px;
        }
    </style>

</head>

<body class="antialiased">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <div class="container principal">

        <div style="text-align: center; margin-bottom: 1em;">    
            <span >
                Número de posts: {{count($posts)}}
            </span>    
        </div>

        <div class="conteudo-central">
            @foreach ($posts as $post)
                <div class="card" style="width: 30rem;">
                    <div class="card-body" >
                        <h5 class="card-title">{{$post->tittle}}</h5>
                        <p class="card-text"><pre>{{$post->content}}</p>
                        <a href="{{url("/posts/{$post->id}")}}" class="btn btn-primary botaozinho">Go To</a>
                    </div>
                </div>
                <br>
            @endforeach
        </div>

    </div>

</body>

</html>