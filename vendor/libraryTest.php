<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Test</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <p id="para1">Para 1</p>
    <p id="para2">Para 2</p>

    <input type="checkbox" class="toggleVisibility" data-check-fadein="#para1" data-uncheck-fadein="#para2">

    <br>
    <input type="file" name="" id="" data-error-msg="#errorMsg" data-error-time="10" class="validateImage" data-previewon=".imgPreview" accept="image/*" data-allowed-ext="png,jpg">
    <img src="" alt="" class="imgPreview"><br>
    <img src="" alt="" class="imgPreview"><br>
    <img src="" alt="" class="imgPreview"><br>
    <div id="errorMsg" style="display: none;">
        Invalid Image
    </div>

    <div style="border: 1px solid black; margin-top: 3rem;" id="dataBlock">
        <div id="appendable" style="display: none;">
            <div style="margin: 2rem; padding: 2rem; border: 1px solid black;">
                Appended Text
                <button class="removeMe" data-parent-level="1">Remove</button>
            </div>
        </div>

        <div style="margin: 2rem; padding: 2rem; border: 1px solid red;">
            <div>
                Default Text
                <button class="appendData" data-append-to="#dataBlock" data-append-block="#appendable">Add</button>
            </div>
        </div>
    </div>


    <div>
        <div style="margin: 1rem; padding: 2rem; border: 1px solid pink;">
            <span id="displayDataBlock">
                <span id="outputField">Vikas</span> <i class="fa fa-pencil toggleVisibility" data-onclick-hide="#displayDataBlock" data-onclick-show="#inputNameBlock"></i>
            </span>
            <span id="inputNameBlock" style="display: none;">
                <input type="text" value="Vikas" id="inputField"> <i class="fa fa-check toggleVisibility saveInputData" 
                data-source="#inputField" data-target="#outputField" data-onclick-hide="#inputNameBlock" 
                data-onclick-show="#displayDataBlock"></i>
            </span>
        </div>

        <!-- <span id="displayDataBlock1">
            <span id="outputField1">Aditya</span> <i class="fa fa-pencil toggleVisibility" data-onclick-hide="#displayDataBlock1" data-onclick-show="#inputNameBlock1"></i>
        </span>
        <span id="inputNameBlock1" style="display: none;">
                <input type="text" value="Aditya" id="inputField1"> <i class="fa fa-check toggleVisibility saveInputData" 
                data-source="#inputField1" data-target="#outputField1" data-onclick-hide="#inputNameBlock1" 
                data-onclick-show="#displayDataBlock1"></i>
            </span> -->
    </div>

    <script src="https://cdn.jsdelivr.net/gh/vkg001/scripts/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/vkg001/library/shortcuts.js"></script>
</body>

</html>