import EventsAdminController from './controller/EventsAdminController.js';
import EventsPublicController from './controller/EventsPublicController.js';
import ParticipatesAdminControler from './controller/ParticipatesAdminControler.js';

document.querySelector(".eventAdmin").addEventListener("click", ()=>{
    const szuloelem=document.querySelector("article");
    szuloelem.innerHTML=""
    const admE = new EventsAdminController();
    
})
document.querySelector(".participants").addEventListener("click", ()=>{
    const szuloelem=document.querySelector("article");
    szuloelem.innerHTML=""
    //const admP = new ParticipatesAdminControler();
    szuloelem.innerText="participants admin oldal"
    
})
document.querySelector(".event").addEventListener("click", ()=>{
    const szuloelem=document.querySelector("article");
    szuloelem.innerHTML=""
    //const usrE = new EventsPublicController();
    szuloelem.innerText="events public oldal"
    
})
