import FetchModel from '../model/FetchModel.js';
import '../view/EventsAdminView.js';
import EventAdminView from '../view/EventsAdminView.js';

class EventsAdminController {
    #fetchModel

    constructor() {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        this.#fetchModel = new FetchModel(token);
        this.#fetchModel.getData("http://localhost:8000/api/events", this.Mycallback);
    }

    Mycallback(tomb){
        let szuloelem=document.querySelector("article");
        new EventAdminView(szuloelem, tomb);
    }
}

export default EventsAdminController;