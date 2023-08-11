<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </head>

</head>
<body>
    <div class="row " >
        <div class=" mt-3 col-4 offset-md-3" >
           <h1>Kendime yazilar:</h1>
        </div>
    </div>
    <div class="container" >
        <h3 class=''>Articles</h3>
        <!-- Örnek.blade.php -->

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Yazar Adı</th>
            <th>Makale Başlığı</th>
            <th>Yorumlar</th>
        </tr>
    </thead>
    <tbody>
        <!-- Örnek.blade.php -->

@foreach($data as $authorData)
    <h2>Yazar Adı: {{ $authorData['name'] }}</h2>
    <ul>
        @foreach($authorData['articles'] as $articleData)
            <li>
                <h3>Makale Başlığı: {{ $articleData['title'] }}</h3>
                <p>İçerik: {{ $articleData['content'] }}</p>

                @if(count($articleData['comments']) > 0)
                    <ul>
                        @foreach($articleData['comments'] as $comment)
                            <li>Yorum: {{ $comment['content'] }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>Henüz yorum bulunmamaktadır.</p>
                @endif
            </li>
        @endforeach
    </ul>
@endforeach

    </tbody>
</table>

        

   
   
   
   
   
    </div>
    

    
    

</body>
</html>