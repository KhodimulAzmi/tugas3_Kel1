<?php
// app/controllers/organizer_controller.php
require_once '../app/models/organizers_model.php';

class OrganizersController {
    private $OrganizersModel;

    public function __construct() {
        $this->OrganizersModel = new OrganizersModel();
    }

    public function index() {
        $organizer = $this->OrganizersModel->getAllOrganizers();
        require_once '../app/views/organizers/index.php';

    }

    public function create() {
        require_once '../app/views/organizers/create.php';
    }

    public function store() {
        $name = $_POST['nama'];
        $kontak = $_POST['kontak'];
        $email = $_POST['email'];
        $jabatan = $_POST['jabatan'];

        $this->OrganizersModel->add($name, $email, $kontak, $jabatan);
        header('Location: /organizers/index');
    }
    // Show the edit form with the organzers data
    public function edit($id_org) {
        $organizers = $this->OrganizersModel->find($id_org); // Assume find() gets organizers by ID
        require_once __DIR__ . '/../views/organizers/edit.php';
    }

    // Process the update request
    public function update($id_org, $data) {
        $updated = $this->OrganizersModel->update($id_org, $data);
        if ($updated) {
            header("Location: /organizers/index"); // Redirect to organizers list
        } else {
            echo "Failed to update organizers.";
        }
    }

    // Process delete request
    public function delete($id_org) {
        $deleted = $this->OrganizersModel->delete($id_org);
        if ($deleted) {
            header("Location: /organizers/index"); // Redirect to organizers list
        } else {
            echo "Failed to delete organizers.";
        }
    }
}
