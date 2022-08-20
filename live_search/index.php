<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="main" style="text-align: center; padding: 0 2em;">
        <h1>PHP MySQL live search</h1>

        <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" id="search-key">

        <div id="matched-search-result">
            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        var inputBox = document.getElementById("search-key");
        inputBox.addEventListener('keyup', function(){
            var val = this.value;
            if(val != ""){
                $.ajax({
                    url: "livesearch.php",
                    method: "POST",
                    data: {
                        value: val
                    },
                    success: function(response) {
                        $("#matched-search-result").show();
                        document.getElementById("matched-search-result").innerHTML = response
                    }
                })
            }

            else{
                $("#matched-search-result").hide();
            }
        })
    </script>
</body>

</html>