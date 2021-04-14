<?php

chdir('..');
include_once 'services/ClassesService.php';
extract($_POST);

$ds = new ClassesService();

if ($op != '') {
    if ($op == 'add') {
        $ds->create(new Classes(0, $nom, $filiere));
    } elseif ($op == 'update') {
        $ds->update(new Classes($id, $nom, $filiere));
    } elseif ($op == 'delete') {
        $ds->delete($ds->delete($id));
    }
}

header('Content-type: application/json');
echo json_encode($ds->findAll());
