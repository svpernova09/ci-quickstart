<?php namespace App\Controllers;

class WidgetController extends BaseController
{

public function view($id)
{
    $widgetModel = model('App\Models\WidgetModel');
    $widget = $widgetModel->find($id); // will be an object

    return $this->twig->render('widgets/view.html.twig', ['widget' => $widget]);
}
}
