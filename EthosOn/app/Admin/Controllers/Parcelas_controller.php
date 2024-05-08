<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Parcelas_model;

class Parcelas_controller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Parcelas_model';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Parcelas_model());

        $grid->column('id', __('Id'));
        $grid->column('nome', __('Nome'));
        $grid->column('quantidade', __('Quantidade'));
        $grid->column('juros', __('Juros'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Parcelas_model::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nome', __('Nome'));
        $show->field('quantidade', __('Quantidade'));
        $show->field('juros', __('Juros'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Parcelas_model());

        $form->text('nome', __('Nome'));
        $form->text('quantidade', __('Quantidade'));
        $form->text('juros', __('Juros'));

        return $form;
    }
}
