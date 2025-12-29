<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Auth</title>
</head>
<body>

    @auth
    <p>congrats youre logged in!</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Log out</button>
        </form>
    <div style="border: 3px solid black; padding:6px; margin-bottom: 20px;">
        <h2>Create a new post</h2>
    <form action="/create-post" method="POST">
    @csrf
    @if ($errors->has('title') || $errors->has('body'))
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <input type="text" name="title" placeholder="post title">
    <textarea name="body" placeholder="type here..."></textarea>
    <button>Save post</button>
    </form>
    </div>
    

<div style="border: 3px solid black; padding:6px; margin-top: 20px;">
    <h2>All Posts</h2>
    @isset($posts)
        @foreach($posts as $post)
            <div style="background-color: #9c9c9c4d; padding: 10px; margin-bottom: 10px;">
                <h3>{{$post->title}}</h3>
                <p>{{$post->body}}</p>
                <small>Posted by: {{$post->user->name ?? 'Unknown'}}</small>
                <p><a href="/edit-post/{{$post->id}}">Edit</a></p>
                <form action="/delete-post/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete</button>
                </form>
            </div>
        @endforeach
    @else
        <p>No posts to show yet.</p>
    @endisset
</div>

    @else
    <div style="border: 3px solid black; padding:6px; margin-bottom: 20px;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" value="{{ old('name') }}" placeholder="name">
            <input name="email" type="text" value="{{ old('email')}}" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>

    <div style="border: 3px solid black; padding:6px;">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            @error('login')
                <p style="color: red;">{{ $message }}</p>
            @enderror
            <input name="loginname" type="text" value="{{ old('loginname') }}" placeholder="name">
            <input name="loginpassword" type="password" placeholder="password">
            <button>Log in</button>
        </form>
    </div>
    @endauth
    
</body>
</html>