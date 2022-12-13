import AgencyAdminController from './controller/AgencyAdminController.js';
import EventsAdminController from './controller/EventsAdminController.js';
import EventsPublicController from './controller/EventsPublicController.js';
import ParticipatesAdminControler from './controller/ParticipatesAdminControler.js';

const SZULO=document.querySelector("article");

document.querySelector(".eventAdmin").addEventListener("click", ()=>{
    SZULO.innerHTML=""
    const admE = new EventsAdminController();
    
})
document.querySelector(".participants").addEventListener("click", ()=>{
    SZULO.innerHTML=""
    //const admP = new ParticipatesAdminControler();
    SZULO.innerText="participants admin oldal"
    
})
document.querySelector(".event").addEventListener("click", ()=>{
    const szuloelem=document.querySelector("article");
    szuloelem.innerHTML=""
    const usrE = new EventsPublicController();
    
})

document.querySelector(".agencyAdmin").addEventListener("click", ()=>{
    SZULO.innerHTML=""
    const agn = new AgencyAdminController()
})
