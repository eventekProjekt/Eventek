class EventsPublicView {
    constructor(szuloElem, data) {
        let txt = `<table class="table table-striped">
        <thead>
        <tr>
          <th scope="col">név</th>
          <th scope="col">agency</th>
          <th scope="col">limit</th>
          <th scope="col">date</th>
          <th scope="col">location</th>
          <th scope="col">státusz</th>
        </tr>
        </thead> <tbody>`;

        data.forEach((adat) => {
            if (adat.status != 2) {
                txt += `<tr>
                    <td scope="col">${adat.name}</td>
                    <td scope="col">${adat.agency}</td>
                    <td scope="col">${adat.limit}</td>
                    <td scope="col">${adat.date}</td>
                    <td scope="col">${adat.location}</td>
                    <td scope="col">${(adat.status == 0 ? "aktív" : "eltörölt")}</td>
                </tr>`;
            }
        });

        txt += "</tbody></table>";
        szuloElem.innerHTML = txt;
    }
}

export default EventsPublicView;
