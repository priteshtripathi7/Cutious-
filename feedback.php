<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@300&family=Gotu&display=swap" rel="stylesheet">
    <title>Feedback</title>
</head>
<body>
    <div class="backGround">
        <img src="./img/feedback.jpg">
    </div>

    <h1 class="display-1 text-center">Feedback</h1>
    <br><br><br>
    <form class="container">
        <div class="form-group row">
            <label for="inputEmail3" class="col-sm-8 col-form-label " style="font-family: 'Comic Neue', cursive; color: whitesmoke; font-size: 20px;">Rate your journey interms of safety.</label>
            <div class="col-sm-4 ">
                <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" style="width: 20%;">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5" selected>5</option>
                  </select>
            </div>
        </div>
        <div class="col-sm-5"></div>
        <button type="button" class="text-center btn btn-primary text-center col-sm-2" onclick="backToMain()">Submit</button>
        <div class="col-sm-5"></div>
    </form>
    <script src="./js/index.js"></script>
</body>
</html>