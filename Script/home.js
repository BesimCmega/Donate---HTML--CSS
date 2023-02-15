// var today = new Date();
// var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
// var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
// var dateTime = date + ' ' + time;
// document.getElementById("p1").innerHTML = dateTime;

var vargu =[
    'Fotot/children.jpg',
    'Fotot/children2.jpg',
    'Fotot/children3.jpg',
    
];

var index = 0;
var koha = 2000;

function krijoSlider(){
    document.getElementById('SliderImages').src = vargu[index];
    index++;

    if(index == vargu.length){
        index = 0;
    }

    setTimeout("krijoSlider()", koha);
}

krijoSlider();