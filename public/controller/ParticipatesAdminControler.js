import FetchModel from '../../model/FetchModel.js';
import '../../view/ParticipatesAdminView.js';

class ParticipatesAdminControler {
    constructor() {
        const token = $('meta[name="csrf-token"]').attr("content");
        fetchModel = new FetchModel(token);
    }
}

export default ParticipatesAdminControler;