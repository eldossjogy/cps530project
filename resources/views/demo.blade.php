@extends('layout.app')

@section('content')
    <header>
        <h1 class="has-text-centered has-text-weight-bold is-size-1	">Forum Demo</h1>
    </header>
    <div class="box mx-6">
    @if ($messages->count())
                @foreach($messages as $message)
                <div>
                    <div class="box m-4">
                        <p>{{$message->msg}}</p>
                        <p class="is-size-7" >from {{$message->username}} on {{$message->time}}</p>
                    </div>
                </div>
                @endforeach
            @else
                <p>No Post</p>
            @endif
    </div>
<div class="box mx-6" >
    <form action="/demo" method="post">
            @csrf
            {{ csrf_field() }}
            <h1 class="has-text-weight-bold is-size-5">Create Post:<h1><br>
            <div class="mb-4">
                <input type="text" name="username" id="username" placeholder="Your Username" class="p-4 rounded-lg @error('username') border border-danger @enderror" value="{{ old('username') }}">

                @error('username')
                    <div style="color:red">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <input type="text" name="message" id="message" placeholder="Enter Message" class="bg-gray-100  w-full p-4 rounded-lg  @error('message') border border-danger @enderror" value="{{ old('message') }}">

                @error('message')
                    <div style="color:red">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="button is-success">Post Message</button>
            </div>
        </form>
</div>
@endsection