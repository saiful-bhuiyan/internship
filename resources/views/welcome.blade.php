<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class=" bg-blue-700 px-4 py-8 rounded-lg m-2">
        <p class="text-4xl text-white text-center font-bold">Start Time : 4:30 pm End Time 5:30 pm</p>
    </div>
    <div class="flex p-2 w-full ">
        <div class="w-1/4 bg-blue-700 rounded-lg">
            <p class="text-xl md:text-2xl text-white font-bold p-4">Hello, I am Saiful Islam I'm Professional Web designer and Developer, Creating frontend website and backend applications for the client all across the world.As a full-stack web developer, you are a multifaceted professional with expertise in both front-end and back-end development, capable of creating dynamic, user-friendly, and robust web applications. </p>
        </div>
     


            <div class="grid grid-cols-1 sm:grid-cols-3 md-grid-cols-3 w-3/4 gap-8 px-4">

                @if($posts)
                @foreach($posts as $v)
                <div class="col-span-1 max-w-md mx-auto bg-white rounded-xl overflow-hidden shadow-md mt-2">
                    <img class="w-full h-56 object-cover object-center" src="{{asset($v->image)}}" alt="Image">
                    <div class="p-4 ">
                        <div class="font-bold text-lg mb-2">{{$v->title}}</div>
                        <p class="text-gray-700 text-base">{{substr($v->description, 0, 200)}}</p>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
       
  
    </div>
    <div class=" bg-blue-700 px-4 py-8 rounded-lg m-2">
        <p class="text-4xl text-white text-center font-bold">Github Repository : https://github.com/saiful-bhuiyan/internship.git</p>
    </div>
</body>

</html>