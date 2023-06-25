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
    <style>
        .error {color: #FF0000;}
    </style>

    <?php
    $titleErr = $bodyErr = "";
    $title = $body = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["title"])) {
            $titleErr = "Title is required";
        } else {
            $title = test_input($_POST["title"]);
        }

        if (empty($_POST["body"])) {
            $bodyErr = "Body is required";
        } else {
            $body = test_input($_POST["body"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <div id="wrapper">
        <div id="page" class="container">
            <h1>New Article</h1>
            <p><span class="error">* required field</span></p>
            <form method="POST" action="/articles">
            @csrf

                <div class="field">
                    <label class="label" for="">Title</label>
                    <span class="error">* <?php echo $titleErr;?></span>
                    <div class="control">
                        <input class="input" type="text" name="title" id="title">
                        @error('title')
                        <div class="error">{{ $message }}</div>
                        @enderror`
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="">ID</label>
                    <div class="control">
                        <input class="input" name="excerpt" id="excerpt">
                    </div>
                </div>

                <div class="field">
                    <label class="label" for="answer">Body</label>
                    <span class="error">* <?php echo $bodyErr;?></span>
                    <div class="control">
                        <textarea class="textarea" name="body" id="body"></textarea>
                        @error('body')
                        <div class="error">{{ $message }}</div>
                        @enderror`
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
