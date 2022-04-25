<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Todo | home</title>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
</head>
<body>
<h1>All Todo's</h1>
<h3>
    <a href="/create">
        <button>Create Todo</button>
    </a>
</h3>
<h4>
    <x-alert></x-alert>
</h4>

<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Status</th>
        <th scope="col">Change Status</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
    </thead>
    @foreach($todo as $item)

        <tr>
            <th scope="row">1</th>
            <th> {{$item->title}}</th>
            @if($item->completed)
                <th>Complete</th>
            @else
                <th>In complete</th>
            @endif
            <th><a href="{{asset('/completed/'.$item->id)}}">
                    <button class="btn btn-primary">@if($item->completed) Incomplete @else Completed @endif</button>
                </a></th>
            <th><a href="{{asset('/edit/'.$item->id)}}">
                    <button class="btn btn-dark">Edit</button>
                </a>
            </th>
            <th><a href="{{asset('/delete/'.$item->id)}}">
                    <button class="btn btn-danger">Delete</button>
                </a></th>
        </tr>


    @endforeach
</table>

{{--        <li>--}}
{{--            @if($item->completed)--}}
{{--                <span style="text-decoration: line-through">{{$item->title}}</span>--}}
{{--            @else--}}

{{--            @endif--}}
{{--            <a href="{{asset('/completed/'.$item->id)}}"><button>Completed</button></a>--}}
{{--            <a href="{{asset('/delete/'.$item->id)}}"><button>Delete</button></a>--}}
{{--        </li>--}}


</body>
</html>
