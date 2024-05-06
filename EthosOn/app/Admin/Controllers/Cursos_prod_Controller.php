<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Cursos_prod;
use Illuminate\Support\Facades\URL;
use OpenAdmin\Admin\Controllers\AdminController;

class Cursos_prod_Controller extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Cursos_prod';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Cursos_prod());

        $grid->filter(function($filter){
            $filter->like('nome', __('Nome'));
            $filter->equal('area')->select(["engenharia" => "engenharia", "psicologia" => "psicologia", "educacao" => "educacao", "direito" => "direito", "tecnologia" => "tecnologia", "gestao-e-negocios" => "gestao-e-negocios", "saude" => "saude"]);
            $filter->equal('cl', __('CL'))->radio([
                1 => 'Sim',
                0 => 'Não'
            ])->default(null);
        });
        $grid->column('id', __('Id'));
        $grid->column('nome', __('Nome'));
        $grid->column('area', __('Area'));
        $grid->column('cl', __('CL'))->bool();
        // $grid->column('apresentacao', __('Apresentacao'));
        // $grid->column('objetivo', __('Objetivo'));
        $grid->column('total', __('Total(hrs)'));
        $grid->column('duracao', __('Duracao'));
        $grid->column('preco', __('Preco'));
        $grid->column('image', __('Image'));
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
        $show = new Show(Cursos_prod::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('nome', __('Nome'));
        $show->field('area', __('Area'));
        $show->field('cl', __('CL'));
        $show->field('apresentacao', __('Apresentacao'));
        $show->field('objetivo', __('Objetivo'));
        $show->field('conteudo', __('Conteúdo'));
        $show->field('total', __('Total(hrs)'));
        $show->field('duracao', __('Duracao'));
        $show->field('preco', __('Preco'));
        $show->field('image', __('Image'));
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
        $form = new Form(new Cursos_prod());

        $form->text('nome', __('Nome'))->defaultOnEmpty('teste');
        $form->select('area', __('Area'))->options(["engenharia" => "engenharia", "psicologia" => "psicologia", "educacao" => "educacao", "direito" => "direito", "tecnologia" => "tecnologia", "gestao-e-negocios" => "gestao-e-negocios", "saude" => "saude"]);
        $form->switch('cl', __('CL'))->defaultOnEmpty(0);
        $form->textarea('apresentacao', __('Apresentacao'));
        $form->textarea('objetivo', __('Objetivo'));
        $form->ckeditor('conteudo', __('Conteúdo'));
        $form->number('duracao', __('Duracao'))->pattern('[0-9]');
        $form->number('total', __('Duracao Total (hrs)'))->pattern('[0-9]');
        $form->number('preco', __('Preco'));
        $form->image('image', __('Image'));
        
        return $form;
    }
}
