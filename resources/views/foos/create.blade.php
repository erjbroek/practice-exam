@extends('common.master')

@section('content')
    <div>
        <h1>Hello there, create a post here!!</h1>
    </div>

    <form method="POST" action="{{route('foo.index')}}">
        @csrf
        <div class="field">
            <label class="label" for="name">name</label>

            <div class="control">
                <input class="input" type="text" name="name" id="name" value="{{ old('name') }}">

                @if ($errors->has('name'))
                    <p class="error">{{ $errors->first('name') }}</p>
                @endif

            </div>
        </div>

        <div class="field">
            <label class="label" for="thud">thud</label>

            <div class="control">
                <input class="textarea" name="thud" id="thud" value="{{ old('thud') }}">

                @if ($errors->has('thud'))
                    <p class="error">{{ $errors->first('thud') }}</p>
                @endif

            </div>
        </div>

        <div class="field">
            <label class="label" for="wombat">wombat</label>

            <div class="control">
                <input class="wombat" name="wombat" id="wombat" value="{{ old('wombat') }}">

                @if ($errors->has('wombat'))
                    <p class="error">{{ $errors->first('wombat') }}</p>
                @endif

            </div>
        </div>

        <div class="field">
            <label class="label">Skwal</label>
            <div class="control">
                <textarea name="skwal" class="textarea @error('skwal') is-danger @enderror"
                 rows="15" placeholder="A random ID number...">{{ old('skwal') }}</textarea>
            </div>
            @error('skwal')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <div>
                <button id="blogbutton" type="submit">Submit</button>
            </div>
        </div>
    </form>
@endsection



