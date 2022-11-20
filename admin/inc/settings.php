<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel - Settings</title>
</head>

<body>
    <?php require('inc/header.php') ?>

    <!-- general Settings -->

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="">SETTINGS</h3>

                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <div class="d-flex align-items-center justofy-content-between">
                            <h5 class="card-title m-0">General Settings</h5>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#general-settings">
                                EDIT
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-2 fw-bold">Card subtitle</h6>
                        <p class="card-text " id="site_title">content</p>
                        <h6 class="card-subtitle mb-2 fw-bold">About Us</h6>
                        <p class="card-text" id="site_about">content</p>
                    </div>
                </div>
                <!-- General Settings Modal / ShutDown Section -->

                <div class="modal fade" id="general-settings" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">General Settings</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class=" mb-3">
                                        <label class="form-label">Site Title</label>
                                        <textarea name="site_about" id="site_title_input" class="form-control shadow-none" name="site_title" rows="1"></textarea>
                                    </div>
                                    <div class=" mb-3">
                                        <label class="form-label">About Us</label>
                                        <textarea id="site_about_input" class="form-control shadow-none" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn btn-secondary" data-bs-dismiss="modal">cancel</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Shutdown section -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-content justify-content-between mb-3">
                            <h5 class="card-title m-0">Shutdown Website</h5>
                            <div class="form-check form-switch">
                                <form>
                                    <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" role="switch" id="shutdown-toggle">
                                </form>
                                <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                            </div>
                        </div>
                        <p class="card-text">
                            No customer will be allowed to book hotel room, when shutdown mode is turned on
                        </p>

                    </div>
                </div>




            </div>
        </div>
    </div>

    <?php require('inc/scripts.php') ?>

    <script src="/admin/scripts/settings.js"></script>
</body>

</html>