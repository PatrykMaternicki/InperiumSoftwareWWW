
document.getElementById("anim_square0").addEventListener('mouseout',removeFill,false)
document.getElementById("anim_square1").addEventListener('mouseout',removeFill,false)
document.getElementById("anim_square2").addEventListener('mouseout',removeFill,false)
document.getElementById("anim_square3").addEventListener('mouseout',removeFill,false)







function removeFill()
{


this.classList.add ("remove_fill");
var whatThis = this;
var whatStyle = "remove_fill";
setTimeout(function()
{
    removeClass(whatThis, whatStyle);
}, 300);
}

function removeClass (whatThis,whatStyle)
{
console.log ("and this you see?")
whatThis.classList.remove (whatStyle);
}
