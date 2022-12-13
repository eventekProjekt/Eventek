import FetchModel from '../../model/FetchModel.js';
import '../../view/EventsPublicView.js';

class EventsPublicController {
    constructor() {
        const token = $('meta[name="csrf-token"]').attr("content");
        fetchModel = new FetchModel(token);
    }
}

export default EventsPublicController;