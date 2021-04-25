const { upperCase } = require('lodash');

require('./bootstrap');


const menuButton= document.querySelector('#menu-btn');
const menuButtonClose= document.querySelector('#menu-btn-close');
const menu= document.querySelector('#menu');
const main= document.querySelector('#main');
const main2= document.querySelector('#main2');
const message= document.querySelector('#message');
const times= document.querySelectorAll('.times');
const completeBtn= document.querySelector("#completeBtn");
const modal= document.querySelector('#modal');
const cancelBtn= document.querySelector('#cancel-btn');
const isError= document.querySelector('#isError');
const completeBtnForm= document.querySelector('#complete-btn');
let price;




if(message!=null){
    setTimeout(()=>{
        main.removeChild(message);
    }, 1300)
}

if(menuButton !== null){
    menuButton.addEventListener('click', ()=>{
        if(menu.classList.contains('hidden')){
            menu.classList.remove('hidden');
            menu.classList.remove('drawer-close');
            menu.classList.add('drawer-open');
            // menu.style.width= "12%";
        }
    })
}

main.addEventListener('click', ()=>{
    if(!menu.classList.contains('hidden')){
        menu.classList.add('drawer-close');
        setTimeout(()=>{
            menu.classList.add('hidden');
        }, 200)
        menu.classList.remove('drawer-open');
        // menu.style.width= "12%";
    }
})

if(message!=null){
    setTimeout(()=>{
        main.removeChild(message);
    }, 1500)
}

const checkSelectedTime=()=>{
    for(let i=0; i< times.length; i++){
        times[i].classList.remove('selected');
    }
}

if(times!=null){
    for(let i=0; i< times.length; i++){
        times[i].addEventListener('click', ()=>{
            let time;
            checkSelectedTime()
            times[i].classList.add('selected');
            time= times[i].children.item(0).innerHTML;
            completeBtn.classList.remove('hidden');
            completeBtn.classList.add('flex');
            completeBtn.classList.add('btn-animation');
            if(time == upperCase('am')){
                price= 10.50;
            }else if(time == upperCase('pm')){
                price= 15.50
            }
            completeBtn.children.item(0).children.item(0).innerHTML= "$" + price;
        })
    }
 
}

if(completeBtn!=null){
    completeBtn.addEventListener('click', ()=>{
        if(matchMedia('(min-width:300px) and (max-width:600px)').matches){
            window.scrollTo({
                top:170,
                behavior:'smooth'
            });
            modal.classList.remove('modal');
        }
        localStorage.setItem('price', price);
        main2.style.opacity= 0.02;
        modal.setAttribute('open', 'true');
        modal.classList.remove('close-modal');
        modal.classList.add('open-modal');
        modal.children.item(0).children.item(6).setAttribute('value', "$" + price);
    })

    cancelBtn.addEventListener('click', ()=>{
        modal.classList.remove('open-modal');
        modal.classList.add('close-modal');
        localStorage.removeItem('price');
        setTimeout(()=>{
            main2.style.opacity= 1;
            modal.removeAttribute('open');
        }, 800)
        if(matchMedia('(min-width:300px) and (max-width:600px)').matches){
            window.scrollTo({
                top:700,
                behavior:'smooth'
            });
        }
    })
}

if(isError!=null){
    setTimeout(()=>{
        main2.style.opacity= 0.02;
        modal.setAttribute('open', 'true');
        modal.classList.remove('close-modal');
        modal.classList.add('open-modal');
        modal.children.item(0).children.item(6).setAttribute('value', "$" + localStorage.getItem('price'));
    },100)
    
}

if(completeBtnForm != null){
    completeBtnForm.addEventListener('click', ()=>{
        localStorage.removeItem('price');
    })
}