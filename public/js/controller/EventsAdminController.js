import FetchModel from '../model/FetchModel.js';
import '../view/EventsAdminView.js';

class EventsAdminController {
    constructor() {
        const token = $('meta[name="csrf-token"]').attr("content");
        fetchModel = new FetchModel(token);
    }
}

export default EventsAdminController;