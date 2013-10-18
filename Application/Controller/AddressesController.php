<?php
/**
 * Created by JetBrains PhpStorm.
 * User: julia
 * Date: 21.03.13
 * Time: 16:26
 * To change this template use File | Settings | File Templates.
 */


require_once('../Model/Addresses.php');


$model = new Application_Model_Addresses();
$id = '';
$name = '';
$prename = '';
if (isset($_POST['action']))
{
    $action = $_POST['action'];
    if (isset($_POST['id']))
    {
        $id = $_POST['id'];
    }
    if (isset($_POST['name']))
    {
        $name = $_POST['name'];
    }
    if (isset($_POST['prename']))
    {
        $prename = $_POST['prename'];
    }
}
if (isset($_GET['action']))
{
    $action = $_GET['action'];
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
    }
}
else
{
    $action = 'back';
    echo '<p class="error message">Es ist ein Fehler aufgetreten. Bitte versuche es noch einmal.</p>';
}

switch($action)
{
    case 'new':
        break;
    case 'list';
        $model->setListData()
        ->sortListData('name');
        $action = 'adressbuch';
        break;
    case 'edit';
        $model->setData($_POST)
            ->setAddressData($model->getId(), $model->getName(), $model->getPrename());
        $action = 'new';
        break;
    case 'delete';
        $model->setData($_POST)
            ->deleteAdress($model->getId(), $model->getName(), $model->getPrename());
        $action = 'back';
        break;
    case 'save';
        $model->setData($_POST)
            ->changeDate2MySql()
            ->save();
        $action = 'back';
        break;
    case 'update';
        print_r($_POST);
        $model->setData($_POST)
            ->changeDate2MySql()
            ->update($model->getData(), $id);
        $action = '#';
        break;
    case 'detail';
        $model->setAddressData($id, $name , $prename);
        break;
    case 'sort';
        $model->setListData()
        ->sortListData($_GET['sort']);
        $action = 'list';
        break;
}
if ($action == 'back')
{
    require('../design/home.php');
} else if ($action == '#') {
    require_once('AddressesController.php?action=list');
} else {
    require_once('../design/' . $action . '.php');

}
