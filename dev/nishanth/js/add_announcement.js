function getExtension(filename) {
  return filename.split(".").pop();
}

function getTimeStamp() {
  var now = new Date();
  var date = [now.getDate(), now.getMonth() + 1, now.getFullYear()];
  date[0] = date[0] < 10 ? "0" + date[0] : date[0];
  date[1] = date[1] < 10 ? "0" + date[1] : date[1];
  var time = [now.getHours(), now.getMinutes(), now.getSeconds()];

  var suffix = time[0] < 12 ? "AM" : "PM";
  time[0] = time[0] < 12 ? time[0] : time[0] - 12;

  time[0] = time[0] || 12;

  for (var i = 1; i < 3; i++) {
    if (time[i] < 10) {
      time[i] = "0" + time[i];
    }
  }

  return date.reverse().join("-") + " " + time.join(":") + " " + suffix;
}

var addBtn = document.getElementById("add-btn");
var spinner = document.getElementById("spinner");

addBtn.addEventListener("click", addAnnouncement);

function addAnnouncement() {
  var title = document.getElementById("title").value;
  var file = document.getElementById("file").files[0];
  if (title != null && file != null) {
    spinner.style.visibility = "visible";
    var database = firebase.database();
    var ref = database.ref("announcements");
    var storage = firebase.storage();
    var storageRef = storage.ref("announcements");
    var announcement = {
        timestamp: getTimeStamp(),
      title: title,
      documentLink: "",
    };
    var newRef = ref.push(announcement);
    console.log(newRef.key);

    var filename = newRef.key + "." + getExtension(file.name);

    console.log(filename);
    ref = database.ref("announcements/" + newRef.key);

    var fileRef = storageRef.child(filename);
    try {
      var uploadTask = fileRef.put(file);
    } catch (error) {
      showError("File Upload Error! Retry!!");
    }

    var result = document.getElementById("result");

    uploadTask.on(
      "state_changed",
      function (snapshot) {
        // Show upload progress, if needed
        var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
        console.log("Upload progress:", progress + "%");
      },
      function (error) {
        // Handle upload error, if any
        console.error("Upload error:", error);
        showError(error);
      },
      function () {
        // Upload complete, generate download URL
        uploadTask.snapshot.ref.getDownloadURL().then(function (downloadUrl) {
          // Use the download URL for the uploaded image
          showSuccess();
          ref.update({
            documentLink: downloadUrl,
          });
        });
      }
    );
  } else {
    showError("Please Add required fields.");
  }
}

function showSuccess() {
  var result = document.getElementById("result");
  result.innerText = "Announcement added successfully";
  result.style.color = "green";
  result.style.display = "block";
  spinner.style.visibility = "hidden";
}

function showError(error) {
  var result = document.getElementById("result");
  result.innerText = "Error: " + error;
  result.style.color = "red";
  result.style.display = "block";
  spinner.style.visibility = "hidden";
}
