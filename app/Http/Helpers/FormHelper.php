<?php

namespace App\Http\Helpers;

use Igorwanbarros\BaseLaravel\Http\Controllers\Support\BaseSupport;
use Igorwanbarros\Php2Html\Panel\PanelView;

class FormHelper extends BaseSupport
{
    public function logic()
    {
        $this->controller->resourceView = 'form-default';

        $view   = $this->controller->view;
        $model  = $this->controller->model;
        $id     = !is_array($this->parameters) ? $this->parameters : null;

        $view->model = $model->findOrNew($id);

        $title = sprintf($this->controller->title, $id ? 'Editar' : 'Adicionar');
        $form  = $this->controller->form->fill($view->model);
        $old   = $this->controller->request->old();
        if (count($old) > 0) {
            $form = $this->controller->form->fill($old);
        }

        if ($view->btnAddAjax) {
            $form->getField('btn_salvar')->addAttributes('data-widget', 'reload');
        }

        $view->widget = new PanelView($title);
        $view->widget->setBody($form);

        if ($view->isAjax)
            $view->widget = $form;

        $this->execCallable();

        return $this->controller->render($this->controller->resourceView);
    }
}
