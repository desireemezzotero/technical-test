@php
    $apiUrl = "https://jsonplaceholder.typicode.com/posts";
    $jsonData = file_get_contents($apiUrl);
    $posts = json_decode($jsonData, true);
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

  @vite("resources/css/app.css")
  
</head>
<body>

 <div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    UseriD
                </th>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Body
                </th>
            </tr>
        </thead>
        <tbody>

    @foreach($posts as $post)
       <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $post['userId'] }}
                </th>
                <td class="px-6 py-4">
                  {{ $post['id'] }}
                </td>
                <td class="px-6 py-4">
                {{ $post['title'] }}
                </td>
                <td class="px-6 py-4">
                {{ $post['body'] }}
                </td>
            </tr>
        @endforeach
    </tbody>
 </table>

</body>
</html>