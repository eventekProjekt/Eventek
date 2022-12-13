import FetchModel from '../model/FetchModel.js';
import '../view/EventsAdminView.js';

class EventsAdminController {
    #fetchModel

    constructor() {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        this.#fetchModel = new FetchModel(token);
    }
}

export default EventsAdminController;