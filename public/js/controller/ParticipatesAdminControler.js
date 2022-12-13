import FetchModel from '../model/FetchModel.js';
import '../view/ParticipatesAdminView.js';

class ParticipatesAdminControler {
    #fetchModel

    constructor() {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        this.#fetchModel = new FetchModel(token);
    }
}

export default ParticipatesAdminControler;