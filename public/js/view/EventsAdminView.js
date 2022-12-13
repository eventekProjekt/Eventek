import DeleteButton from "../utils/DeleteButton.js";
import FetchModel from "../model/FetchModel.js";

class EventAdminView {
    constructor(szuloElem, data) {
        let txt = `<table class="table table-striped">
        <thead class="text-break">
        <tr>
          <th scope="col">event_id</th>
          <th scope="col">név</th>
          <th scope="col">agency_id</th>
          <th scope="col">limit</th>
          <th scope="col">date</th>
          <th scope="col">location</th>
          <th scope="col">státusz</th>
          <th scope="col">Művelet</th>
        </tr>
        </thead> <tbody>`;

        data.forEach((adat) => {
            const dlticon = new DeleteButton(
                adat.event_id,
                new FetchModel().delData,
                "http://localhost:8000/api/events"
            );
            txt += `<tr>
                <td scope="col">${adat.event_id}</td>
                <td scope="col">${adat.name}</td>
                <td scope="col">${adat.agency_id}</td>
                <td scope="col">${adat.limit}</td>
                <td scope="col">${adat.date}</td>
                <td scope="col">${adat.location}</td>
                <td scope="col">${adat.status}</td>
                <td scope="col">${dlticon.iconHozzaAdas()}</td>
            </tr>`;
        });

        txt += "</tbody></table>";
        szuloElem.innerHTML = txt;
    }
}

export default EventAdminView;
