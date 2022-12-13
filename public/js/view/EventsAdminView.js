class EventAdminView {
    constructor(szuloElem, data) {
        txt = `<table class="table table-striped">
        <thead>
        <tr>
          <th scope="col">event_id</th>
          <th scope="col">név</th>
          <th scope="col">agency_id</th>
          <th scope="col">limit</th>
          <th scope="col">date</th>
          <th scope="col">location</th>
          <th scope="col">státusz</th>
        </tr>
        </thead>> <tbody>`;

        data.forEach((adat) => {
            txt += `<tr>
                <td scope="col">${adat.event_id}</td>
                <td scope="col">${adat.name}</td>
                <td scope="col">${adat.agency_id}</td>
                <td scope="col">${adat.limit}</td>
                <td scope="col">${adat.date}</td>
                <td scope="col">${adat.location}</td>
                <td scope="col">${adat.status}</td>
            </tr>`;
        });

        txt += "</tbody></table>";
        szuloElem.innerHTML = txt;
    }
}

export default EventAdminView;
