function readAnnouncments() {
  firebase
    .database()
    .ref("announcements")
    .once("value", (snap) => {
      renderAnnouncments(snap.val());
    });
}

function renderAnnouncments(value) {
  value = Object.values(value).reverse();
  console.log(value);
  let j = 0;
  for (var i in value) {
    if (j == 5) break;
    addAnnouncments(value[i]);
    j++;
  }
}

function getWeeksBetweenDates(startDate, endDate) {
  const millisecondsPerWeek = 1000 * 60 * 60 * 24 * 7;
  const start = new Date(startDate);
  const end = endDate;
  const timeDifference = end.getTime() - start.getTime();
  const weeks = Math.floor(timeDifference / millisecondsPerWeek);
  return weeks;
}

function addAnnouncments(content) {
  let date = new Date();
  let date2 = content.timestamp.slice(0, 11);
  let newTag = getWeeksBetweenDates(date2, date) < 1 ? "visible" : "hidden";
  const htmlCode = `
    <li class="list-group-item" onclick="location.href = '${content["documentLink"]}';">
    ${content["title"]}
    <sup><span class="label" style="visibility: ${newTag};">New</span></sup>
  </li>
    `;
  document.getElementById("a-list").innerHTML += htmlCode;
}

readAnnouncments();
