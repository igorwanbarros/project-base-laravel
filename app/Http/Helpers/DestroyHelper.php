<?php

namespace App\Http\Helpers;

use Igorwanbarros\BaseLaravel\Http\Controllers\Support\BaseSupport;

class DestroyHelper extends BaseSupport
{

    public function logic()
    {
        $id = !is_array($this->parameters) ? $this->parameters : null;

        $this->controller->model->destroy($id);

        if ($this->controller->request->ajax())
            return ['status' => true];

        return redirect($this->controller->view->urlBase);
    }

}