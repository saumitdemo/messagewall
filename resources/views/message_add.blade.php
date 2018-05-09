@extends('templates.layout')

@section('title')
    Add a message to the wall
@endsection

@section('content')
    <form method="post" action="{{ route('postAddMessage') }}">
        @csrf
        <div class="form-group">
            <label for="inputUser">Username:</label>
            <input type="text" class="form-control" id="inputUser" name="inputUser" placeholder="Enter username" required>
        </div>
        <div class="form-group">
            <label for="inputEmail">Email address:</label>
            <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Enter email" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="inputContent">Message:</label>
            <textarea class="form-control" id="inputContent" name="inputContent" rows="5" placeholder="Type message here." required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

