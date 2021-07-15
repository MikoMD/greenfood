document.getElementById('ad').onmousemove = function (event) {
    var x = event.offsetX; //относительно родителя
    console.log(x);
    document.getElementById('two').style.width ='0px';
}

document.getElementById('ad').onmouseleave = function (event) {
    document.getElementById('two').style.width = '395px';
}

