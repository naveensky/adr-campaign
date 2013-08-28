<?php


class ErrorController extends BaseController
{

    public function getIndex()
    {
        $message = Session::get('message');
        if (empty($message))
            $message = Lang::get('Resource Not found');
        return View::make('errors.appErrors')->with('message', $message);
    }
}