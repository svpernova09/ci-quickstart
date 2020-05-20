<?php namespace App\Controllers;

class WidgetController extends BaseController
{
    public function view($id)
    {
        $widgetModel = model('App\Models\WidgetModel');
        $widget = $widgetModel->find($id); // will be an object
        return view('widgets/view', ['widget' => $widget]); // pass in as array
    }
}
