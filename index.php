<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico" rel="stylesheet" type='text/css'>
    <title>Meme Generator</title>
</head>
<body>
<h1>Memes Generator</h1>
<div class="container shadow p-4 bg-body rounded">
    <canvas id="canvas"></canvas>
    <div class="sidebar">
        <input type="file" id="file" class="form-control">

        <div class="group">
            <textarea class="form-control" placeholder="Type something" id="text"></textarea>

            <label for="fontFamily">Font family</label>
            <p><select id="fontFamily" class="form-select">
                    <option value="Montserrat">Montserrat</option>
                    <option value="Roboto">Roboto</option>
                    <option value="Times New Roman">Times New Roman</option>
                    <option value="Impact">Impact</option>
                    <option value="Pacifico">Pacifico</option>
                    <option value="Arial">Arial</option>
                </select>
            </p>

            <label for="color">Color</label>
            <input type="color" id="color">

            <label for="opacity">Opacity</label>
            <input type="range" value="1"  step="0.05" id="opacity" min="0" max="1">

            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="strokeCheckbox">
                <label class="form-check-label" for="strokeCheckbox">Enable text stroke</label>
            </div>

            <button class="btn btn-primary" id="addText">Add new text</button>
        </div>

        <button class="btn btn-success" id="save">Save result</button>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/fabric.js/460/fabric.js" integrity="sha512-d5yqsvICrC8y0ivNsNizSCHXjzireXYU6LmzAvcrL97GMwEn0VKx1vclEwvtsh/yPD2EcATnUG1oEtJuFcTE3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="main.js"></script>
</body>
</html>