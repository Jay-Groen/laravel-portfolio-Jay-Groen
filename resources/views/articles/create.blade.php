{{--@extends('layout')--}}

{{--@section('content')--}}
{{--            <h1 class="header-blog">New Article</h1>--}}

{{--            <div class="studiekeuze">--}}
{{--            <form method="POST" action="/articles">--}}
{{--                @csrf--}}
{{--               <div class="field">--}}
{{--                   <label class="label" for="title" style="margin-top: 3.0vh;">Title</label>--}}

{{--                   <div class="control">--}}
{{--                       <input--}}
{{--                           class="input @error('title') is-danger @enderror"--}}
{{--                           type="text"--}}
{{--                           style="width: 100%; margin-top: 1.5vh;"--}}
{{--                           name="title"--}}
{{--                           id="title"--}}
{{--                           value="{{ old('title') }}"--}}
{{--                           >--}}

{{--                       @error('title')--}}
{{--                       <p class="help is-danger">{{ $errors->first('title') }}</p>--}}
{{--                       @enderror--}}
{{--                   </div>--}}
{{--               </div>--}}

{{--                <div class="field">--}}
{{--                    <label class="label" for="excerpt" style="margin-top: 3.0vh;">Excerpt</label>--}}

{{--                    <div class="control">--}}
{{--                        <textarea--}}
{{--                            class="textarea @error('excerpt') is-danger @enderror"--}}
{{--                            name="excerpt"--}}
{{--                            style="width: 100%; margin-top: 1.5vh;"--}}
{{--                            id="excerpt"--}}
{{--                            value="{{ old('excerpt') }}"--}}
{{--                            >--}}
{{--                        </textarea>--}}

{{--                        @error('excerpt')--}}
{{--                        <p class="help is-danger">{{ $errors->first('excerpt') }}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="field">--}}
{{--                    <label class="label" for="body" style="margin-top: 3.0vh;">Body</label>--}}

{{--                    <div class="control">--}}
{{--                        <textarea--}}
{{--                            class="textarea @error('body') is-danger @enderror"--}}
{{--                            name="body"--}}
{{--                            style="width: 100%; margin-top: 1.5vh;"--}}
{{--                            id="body"--}}
{{--                            value="{{ old('body') }}"--}}
{{--                            >--}}
{{--                        </textarea>--}}

{{--                        @error('body')--}}
{{--                        <p class="help is-danger">{{ $errors->first('body') }}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="field-is-grouped">--}}
{{--                    <div class="control">--}}
{{--                        <button class="button is-link" type="submit">Submit</button>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </form>--}}
{{--    </div>--}}
{{--@endsection--}}

@extends ('layout')

@section ('content')
    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>

            <form method="POST" action="/articles">
                @csrf

                <div class="field">
                    <label class="label" for="">Title</label>

                    <div class="control">
                        <input class="input" type="text" name="question" id="question" required>
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="answer">Body</label>

                    <div class="control">
                        <textarea class="textarea" name="Body" id="Body" required></textarea>
                    </div>
                </div>

                <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Submit</button>
                </div>
        </div>

        </form>
    </div>
    </div>
@endsection
