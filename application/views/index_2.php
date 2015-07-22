<!DOCTYPE html>
<html>
<head>
    <title>Radio Image</title>
    <style>
        .form-group {
            height: 25px;
        }

        .form-group > input {
            opacity: 0;
            position: absolute;
        }

        .form-group > input + label {
            background-image: url('/assets/colors/1.jpg');
            background-repeat: no-repeat;
            background-position: 0 0;
            padding: 0 0 0 33px;
            display:block;
            height: 21px;
            vertical-align: middle;
            line-height:21px;
        }
        .form-group > input[type=radio]:checked + label {
            background-position: 0 -21px;
        }
    </style>
</head>
<body>
    <form name="quiz-1">
        <div>
            <input id="radio1" type="radio" name="radio-choice" value="choice1"/>
            <label for="radio1"> I like choice 1</label>
        </div>
        <div>
            <input id="radio2" type="radio" name="radio-choice" value="choice2"/>
            <label for="radio2"> I like choice 2</label>
        </div>
        <div>
            <input id="radio3" type="radio" name="radio-choice" value="choice3"/>
            <label for="radio3"> I like choice 3</label>
        </div>
    </form>
</body>
</html>