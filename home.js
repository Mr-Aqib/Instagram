let images=document.querySelectorAll('.imgs')
let num=0
setInterval(()=>
{
    images.forEach(imgs=>
        {
            imgs.style.opacity='0'
        })
    images[num].style.opacity='1'
    num++
    if(num>images.length-1)
    {
        num=0
    }
},2000)