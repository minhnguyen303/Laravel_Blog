<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        table{
            margin: auto;
            border: 1px solid;
            border-collapse: collapse;
        }

        td{
            border-top: 1px dashed;
            border-right: 1px solid;
            border-left: 1px solid;
        }

        th{
            border: 1px solid;
        }

        td, th{
            padding: 5px;
            text-align: center;
        }

    </style>
    <title>Document</title>
</head>
<body>
<table>
    <caption>
        <h1>Blog</h1>
        <a href="{{route('posts.create')}}">
            <button>Create</button>
        </a>
    </caption>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Action</th>
    </tr>
    @foreach($posts as $key=>$post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>
                <a href="/posts/{{$post->id}}"><button>Read</button></a>
                <a href="/posts/{{$post->id}}/edit"><button>Edit</button></a>
                <button form="delete{{$post->id}}" type="submit">Delete</button>

                <form action="/posts/{{$post->id}}" id="delete{{$post->id}}" method="post" hidden>
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
    @endforeach
    <tfoot>
        <div>
            {{ $posts->links() }}
        </div>
    </tfoot>
</table>
</body>
</html>
