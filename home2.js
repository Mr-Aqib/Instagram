let images=document.querySelectorAll('.imgs')
let pass=document.querySelector('.passin')
let show=document.querySelector('.eyeicon')
let num=0

// passwording hidding
show.addEventListener('click',()=>
{
    if(pass.type =='password')
    {
        pass.type ='text'
        show.classList.remove('bi-eye-fill')
        show.classList.add('bi-eye-slash-fill')

    }
    else
    {
        show.classList.add('bi-eye-fill')
        show.classList.remove('bi-eye-slash-fill')
        pass.type ='password'
    }
})
// eyeicon
pass.addEventListener('keyup',()=>
{
    if(pass.value.length>0)
    {
        show.style.display='block'
    }
    else
    {
        show.style.display='none'
    }
})
// Iamges Interval
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
    
},3000)

