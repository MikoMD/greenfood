

    var photo = document.getElementById("ad2"); 
    var image; 
    function getChildren(elem)  { 

    for(var i in elem.childNodes)   { 

    if(elem.childNodes[i].nodeType===1) { 

    getChildren(elem.childNodes[i]); 
    if(elem.childNodes[i].tagName == "IMG") { 
    image = elem.childNodes[i]; 
                } 
            } 
        } 
    } 
    getChildren(photo); 
    var photoList = ["img/ad2.jpg","img/ad3.jpg","img/ad4.jpg"]; 
    var index = 0; 
    function updatePhoto()  { 
    image.setAttribute("src",photoList[index]); 
    index++; 
    if(index == 3)  { 
    index = 0; 
        } 
    } 
    setInterval(updatePhoto, 1500); 
