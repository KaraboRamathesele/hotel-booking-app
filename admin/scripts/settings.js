let general_data;

let general_s_form = document.getElementById("general_s_form");
let site_title_input = document.getElementById("site_title_input");
let site_about_input = document.getElementById("site_about_input");

function get_general() {
  let site_title = document.getElementById("site_title");
  let site_about = document.getElementById("site_about");

  let shutdown_toggle = document.getElementById("shutdown_toggle");

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    general_data = JSON.parse(this.responseText);
    // console.log(general_data);

    site_title.innerText = general_data.site_title;
    site_about.innerText = general_data.site_about;

    site_title_input.value = general_data.site_title;
    site_about_input.value = general_data.site_about;

    if ((general_data.shutdown = 0)) {
      shutdown_toggle.checked = false;
      shutdown_toggle.value = 0;
    } else {
      shutdown_toggle.checked = true;
      shutdown_toggle.value = 0;
    }
  };

  xhr.send("get_general");
}

general_s_form.addEventListener("submit", function (e) {
  e.preventDefault();
  upd_general(site_title_input.value, site_about_input.value);
});

function upd_general(site_title_val, site_about_val) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    const myModal = document.getElementById("general_settings");
    const modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();

    if ((this.responseText = 1)) {
      console.log("data updated");
      get_general();
    } else {
      console.log();
    }
  };

  xhr.send(
    "site_title=" +
      site_title_val +
      "&site_about" +
      site_about_val +
      "&upd_general"
  );
}

function upd_shutdown(val) {
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/settings_crud.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

  xhr.onload = function () {
    if ((this.responseText = 1 && general_data.shutdown == 0)) {
      alert("success", "Site has been shutdown!");
      get_general();
    } else {
      alert("success", "Shutdown mode off!");
    }
    get_general();
  };
  xhr.send("upd_shutdown=" + val);
}

window.onload = function () {
  get_general();
};
