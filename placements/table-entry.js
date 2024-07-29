async function getPlacements(dep) {
    let response = await fetch('/placements/2024.json');
    let data = await response.json();
    return data[dep];
}
async function renderPlacements(dep) {
    console.log("Rendering placements for " + dep);
    let tableBody = document.querySelector(`.placed-table.${dep} tbody `);
    let table_data = "";
    let placements = await getPlacements(dep);
    placements.forEach((placement) => {
        table_data += `
<tr>
  <td>${placement.name}</td>
  <td>2024</td>
  <td>${placement.company}</td>
  ${placement.ctc ? `<td>${placement.ctc}</td>` : ''}
</tr>
`;
    });
    tableBody.innerHTML = table_data;
    console.log(table_data);
    console.log(tableBody);
}

