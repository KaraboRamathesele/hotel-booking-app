let add_room_form = document.getElementById("add_room_form");

function add_room() {
  let data = FormData();
  data.append("name", add_room_form.elements["name"].value);
  data.append("price", add_room_form.elements["price"].value);
  data.append("adult", add_room_form.elements["adult"].value);
}
