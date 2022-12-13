import FetchModel from '../model/FetchModel.js';
import EventsPublicView from '../view/EventsPublicView.js';

class EventsPublicController {
    #fetchModel

    constructor() {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        this.#fetchModel = new FetchModel(token);
        this.#fetchModel.getData("http://localhost:8000/api/events_with_names", this.Mycallback);
    }

    Mycallback(tomb){
        let szuloelem=document.querySelector("article");
        new EventsPublicView(szuloelem, tomb);
    }

    participate(event_id) {
        this.#fetchModel.getData(`http://localhost:8000/api/participate_event/${event_id}`, this.Mycallback);
    }
}

export default EventsPublicController;