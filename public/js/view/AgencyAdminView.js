class AgencyAdminView {
    constructor(szuloElem, data) {
        let txt = `<table class="table table-striped">
        <thead>
        <tr>
          <th scope="col">agency_id</th>
          <th scope="col">név</th>
          <th scope="col">ország</th>
          <th scope="col">típus</th>
        </tr>
        </thead> <tbody>`;

        data.forEach((adat) => {
            txt += `<tr>
                <td scope="col">${adat.agency_id}</td>
                <td scope="col">${adat.name}</td>
                <td scope="col">${adat.country}</td>
                <td scope="col">${adat.type}</td>
            </tr>`;
        });

        txt += "</tbody></table>";
        szuloElem.innerHTML = txt;
    }
}

export default AgencyAdminView;