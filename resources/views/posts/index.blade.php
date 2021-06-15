<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>

<body>
    <div class="container max-w-60 mx-auto pt-4">
        <h1 class='text-5xl font-bold mb-2'>Posts</h1>
        @foreach ($posts as $post)
            <article class="border-b border-black border-solid p-2">
                <h2 class="text-xl font-bold mb-2">{{$post->title}}</h2>
                <p class="text-md"> {{$post->content}} </p>
                <span class="mt-4 block">{{$post->created_at}}</span>
            </article>
        @endforeach
    </div>
</body>

</html>