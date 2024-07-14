
var line = document.getElementById('nav');
var wrap = document.getElementById('wrap');
var left = document.getElementById('left');
var right = document.getElementById('right');
// var count = document.querySelectorAll('#count').length;
var count = 1;
var width = 18;

if(right.addEventListener('click', function(){
    count++;
    line.style.transform = 'translate(-' + width + '%)';
    wrap.style.overflow = 'hidden';
}));
if(left.addEventListener('click', function(){
    count--;
    line.style.transform = 'translate(0.3%)';
    wrap.style.overflow = 'hidden';
}));
/////////////////////////////////////////////////////////////////////////////////////

var show1 = document.querySelector("#btn_1");
var subCat1 = document.querySelector("#mobSub1");
var btn_up1 = document.querySelector("#btn_up1");
show1.addEventListener('click',function(){subCat1.classList.toggle("show");
btn_up1.classList.toggle('rotate');});

var show2 = document.querySelector("#btn_2");
var subCat2 = document.querySelector("#mobSub2");
var btn_up2 = document.querySelector("#btn_up2");
show2.addEventListener('click',function(){subCat2.classList.toggle("show");
btn_up2.classList.toggle('rotate');});

var show3 = document.querySelector("#btn_3");
var subCat3 = document.querySelector("#mobSub3");
var btn_up3 = document.querySelector("#btn_up3");
show3.addEventListener('click',function(){subCat3.classList.toggle("show");
btn_up3.classList.toggle('rotate');});

var show4 = document.querySelector("#btn_4");
var subCat4 = document.querySelector("#mobSub4");
var btn_up4 = document.querySelector("#btn_up4");
show4.addEventListener('click',function(){subCat4.classList.toggle("show");
btn_up4.classList.toggle('rotate');});

var show5 = document.querySelector("#btn_5");
var subCat5 = document.querySelector("#mobSub5");
var btn_up5 = document.querySelector("#btn_up5");
show5.addEventListener('click',function(){subCat5.classList.toggle("show");
btn_up5.classList.toggle('rotate');});