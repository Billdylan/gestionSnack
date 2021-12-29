let link=document.getElementById('link')
let burger=document.getElementById('burger')
let div=document.getElementById('demo')

link.addEventListener('click',function(e){
    e.preventDefault()

    burger.classList.toggle('open')
    div.classList.toggle('open')
})