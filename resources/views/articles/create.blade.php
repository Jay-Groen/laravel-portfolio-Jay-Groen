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
