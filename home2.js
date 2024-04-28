let images=document.querySelectorAll('.imgs')
let pass=document.querySelector('.passin')
let show=document.querySelector('.eyeicon')
show.addEventListener('click',()=>
{
    if(pass.type =='password')
    {
        pass.type ='text'
    }
    else
    {
        pass.type ='password'
    }
})
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
    
},1000)

