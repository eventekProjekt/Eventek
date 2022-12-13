import FetchModel from '../model/FetchModel.js';
import AgencyAdminView from '../view/AgencyAdminView.js';

class AgencyAdminController {
    #fetchModel

    constructor() {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        this.#fetchModel = new FetchModel(token);
        this.#fetchModel.getData("http://localhost:8000/api/agencies", this.agenciesBetolt);
    }

    agenciesBetolt(tomb){
        let szuloelem=document.querySelector("article");
        new AgencyAdminView(szuloelem, tomb);
    }
}

export default AgencyAdminController;