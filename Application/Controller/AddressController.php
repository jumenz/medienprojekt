<?php
$model = new Application_Model_Addresses();
$action = '';
$actionId = '';
$actionName = '';
$actionPrename = '';
$dataArray;
if (isset($_GET['id'])) {
    $actionId = $_GET['id'];
}
if (isset($_POST['action'])) {
    $action = $_POST['action'];
    if ($actionId === '' && isset($_POST['id'])) {
        $actionId = $_POST['id'];
    }
    if (isset($_POST['name'])) {
        $actionName = $_POST['name'];
    }
    if (isset($_POST['prename'])) {
        $actionPrename = $_POST['prename'];
    }
}
print_r($_GET);
print_r($_POST);

switch($action) {
    case 'delete';
        $model->setData($_POST)
        ->deleteAddress($model->getId(), $model->getName(), $model->getPrename());
        break;
    case 'save';
        $model->setData($_POST)
        ->changeDate2MySql()
        ->save();
        break;
    case 'update';
        $model->setData($_POST)
        ->changeDate2MySql()
        ->update($model->getData(), $actionId);
    break;
}
$model = new Application_Model_Addresses();
$model->setListData()
->sortListData('name');
$dataArray = $model->getListData();