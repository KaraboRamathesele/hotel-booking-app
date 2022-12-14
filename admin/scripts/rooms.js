let add_room_form = document.getElementById("add_room_form");

add_room_form.addEventListener("submit", function (e) {
  e.preventDefault();
  add_room();
});

function add_room() {
  let data = new FormData();
  data.append("add_room", "");
  data.append("name", add_room_form.elements["name"].value);
  data.append("price", add_room_form.elements["price"].value);
  data.append("area", add_room_form.elements["area"].value);
  data.append("quantity", add_room_form.elements["quantity"].value);
  data.append("adult", add_room_form.elements["adult"].value);
  data.append("children", add_room_form.elements["children"].value);
  data.append("desc", add_room_form.elements["desc"].value);
}

let features = [];

add_room_form.elements["features"].forEach((el) => {
  if (el.checked) {
    features.push(el.value);
  }
});

let facilities = [];
edit_room_form.elements["facilities"].forEach((el) => {
  if (el.checked) {
    facilities.push(el.value);
  }
});

data.append("features", JSON.stringify(features));
data.append("facilities", JSON.stringify(facilities));

let xhr = new XMLHttpRequest();
xhr.open("POST", "ajax/rooms.php", true);

xhr.onload = function () {
  let myModal = document.getElementById("edit-room");
  let modal = bootstrap.Modal.getInstance(myModal);
  modal.hide();

  if (this.responseText == 1) {
    alert("success", "Room data edited!");
    edit_room_form.reset();
    get_all_rooms();
  } else {
    alert("error", "Server Down");
  }

  xhr.send(data);
};

function toggle_status(id, val) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/rooms.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlecncoded");

  xhr.onload = function () {
    if (this.responseText == 1) {
      alert("success", "Status toggles");
      get_all_rooms();
    } else {
      alert("success", "Server Down!");
    }
  };

  xhr.send("toggle_status" + id + "&value=" + val);
}

let add_image_form = document.getElementById("add_image_form");

add_image_form.addEventListener("submit", function (e) {
  e.preventDefault();
  add_image();
});

function add_image() {
  let data = new FormData();
  data.append("image", add_image_form.elements["image"].files[0]);
  data.append("room_id", add_image_form.elements["room_id"].value);
  data.append("add_image", "");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/rooms.php", true);

  xhr.onload = function () {
    if (this.responseText == "inv_img") {
      alert("error", "Only JPG, PNG are allowed", "image-alert");
    } else if (this.responseText == "inv_size") {
      alert("error", "Image shoudl be small...", "image-alert");
    } else if (this.responseText == "upd_failed") {
      alert("error", "Image failed", "image-alert");
    } else {
      alert("success", "New image uploaded", "image-alert");
      room_image(
        add_image_form.element["room_id"].value,
        document.querySelector("#room-images .modal")
      );
      add_image_form.reset();
    }
  };

  xhr.send(data);
}

function room_images(id, rname) {
  document.querySelector("#room-images .modal-title").innerText = rname;
  add_image_form.elements["room_id"].value = id;
  add_image_form.elements["image"].value = "";

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/rooms.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-ww-form-urlencoded");

  xhr.onload = function () {
    document.getElementById("room-image-data").innerHTML = this.responseText;
  };

  xhr.send("get_room_images=" + id);
}

function rem_image(img_id, room_id) {
  let data = new FormData();
  data.append("image_id", img_id);
  data.append("room_id", room_id);
  data.append("rem_image", "");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/rooms.php", true);

  xhr.onload = function () {
    if (this.responseText == 1) {
      alert("success", "Image Removed", "image-alert");
      room_images(
        room_id,
        document.querySelector("#room-images .modal-title").innerText
      );
    } else {
      alert("error", "Removal failed", "image-alert");
    }
  };
  xhr.send(data);
}

function thumb_image(img_id, room_id) {
  let data = new FormData();
  data.append("image_id", img_id);
  data.append("room_id", room_id);
  data.append("thumb_image", "");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/rooms.php", true);

  xhr.onload = function () {
    if (this.responseText == 1) {
      alert("success", "Image changed", "inage-alert");
      room_images(
        room_id,
        document.querySelector("#room-images .modal-title").innerText
      );
    } else {
      alert("error", "Update failed", "image-alert");
    }
  };
  xhr.send(data);
}

function remove_room(room_id) {
  if (confirm("Are you sure?")) {
    let data = new FormData();
    data.append("room_id", room_id);
    data.append("remove_room", "");

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/rooms.php", true);

    xhr.onload = function () {
      if (this.responseText == 1) {
        alert("success", "Room removed");
        get_all_rooms();
      } else {
        alert("error", "Room removal denied");
      }
    };
    xhr.send(data);
  }
}

window.onload = function () {
  get_all_rooms();
};
