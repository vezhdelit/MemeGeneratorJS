let file = document.getElementById('file')

const canvas = new fabric.Canvas('canvas', {
    width: 520,
    height: 520 ,
    backgroundColor: '#0f0f0f'
})

file.addEventListener('change', function(){
    let img = file.files[0]
    if(!img){
        return
    }
    let reader = new FileReader()
    reader.onload = function(e){
        let data = reader.result
        fabric.Image.fromURL(data, function(img){
            img.scaleToHeight(500);
            let scaleFactor = 500/img.height;

            width = img.width * scaleFactor;
            height = 500;

            canvas.clear();
            canvas.setDimensions({ width, height });
            canvas.setBackgroundImage(img);

        })
    }
    reader.readAsDataURL(img)
})

let addTextBtn = document.getElementById('addText')
let text = document.getElementById('text')
let fontFamily = document.getElementById('fontFamily')
let color = document.getElementById('color')
let opacity = document.getElementById('opacity')
let strokeCheckbox = document.getElementById('strokeCheckbox')

addTextBtn.addEventListener('click', function(){

    let _text = new fabric.IText(text.value, {
        editable: true,
        left: 100,
        top: 100,
        fontSize: 82,
        fontFamily: fontFamily.options[fontFamily.selectedIndex].value,
        opacity: opacity.value,
        fill: color.value,
    })
    if(strokeCheckbox.checked){
        _text.stroke = '#000';
        _text.strokeWidth = 5;
        _text.paintFirst = 'stroke';
    }
    canvas.add(_text)
})

window.addEventListener('keydown', function(e){
    if(e.key == "Delete"){
        canvas.remove(canvas.getActiveObject())
    }
})

let saveBtn = document.getElementById('save')
saveBtn.addEventListener('click', function(){
    let data = canvas.toDataURL()
    let link = document.createElement('a')
    link.href = data
    link.download = 'image.png'
    link.click()
})

