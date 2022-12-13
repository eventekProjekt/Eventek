import FetchModel from '../model/FetchModel.js';
import '../view/EventsPublicView.js';

class EventsPublicController {
    #fetchModel

    constructor() {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        this.#fetchModel = new FetchModel(token);
    }
}

export default EventsPublicController;