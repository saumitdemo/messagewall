@extends('templates.layout')

@section('pagecss')
    <style>
        h1 {
            text-align: center;
        }
        .usermessage {
            border: #cccccc 1px solid;
            margin-top: 2em;
            margin-bottom: 2em;
            padding: 5px;
        }

        .usermessage p {
            text-indent: 2em;
        }
    </style>
@endsection

@section('title')
    The Message Wall !
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>
                Welcome to the Message Wall !
            </h1>
        </div>
    </div>

    <div class="col-md-2 offset-md-5">
        <button id="btnAddMsg" type="button" class="btn btn-primary">Add Message</button>
    </div>
    <hr/>
    {{ $messages->render() }}
    @foreach($messages as $message)
        <div class="row usermessage">
            <div class="col-lg-6">
                <h4>
                    {{ $message->username }} - {{ $message->email }}
                </h4>
            </div>
            <div class="col-lg-4">
                <small>
                    {{ $message->created_at }}
                </small>
            </div>
            <div class="col-lg-2">
                <button type="button" class="btn btn-danger" data-msg-del-id="{{ $message->id }}">Delete</button>
            </div>
            <p>
                {{ $message->content }}
            </p>
        </div>
    @endforeach
    {{ $messages->render() }}
@endsection


@section('pagejs')
    <script type="application/javascript">
        $(document).ready(function () {
            $("#btnAddMsg").click(function() {
                window.location='{{ route('addMessage') }}';
            });

            $("button[data-msg-del-id]").click(function () {
                window.location = 'message_delete/' + $(this).attr("data-msg-del-id");
            });
        });
    </script>
@endsection
