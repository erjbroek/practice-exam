@extends('common.master')

@section('content')
    <div>
        <h1>Hello there, edit a post here!!</h1>
    </div>

    <form method="POST" action="{{route('foo.show', $foo)}}">
        @csrf
        @method('PUT')
        <div class="field">
            <label class="label" for="name">Update Faq</label>

            <div class="control">
                <input class="input" type="text" name="name" id="name" value="{{$foo->name}}"></input>
            </div>
        </div>

        <div class="field">
            <label class="label" for="thud">thud</label>

            <div class="control">
                <textarea class="textarea" name="thud" id="thud">{{$foo->thud}}</textarea>
            </div>
        </div>

        <div class="field">
            <label class="label" for="wombat">wombat</label>

            <div class="control">
                <textarea class="textarea" name="wombat" id="wombat">{{$foo->wombat}}</textarea>
            </div>
        </div>


        <div>
            <div>
                <button id="blogbutton" type="submit">Edit</button>
            </div>
        </div>
    </form>

    <form method="POST" action="{{ route('foo.destroy', $foo) }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
