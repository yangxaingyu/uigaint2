<?php

namespace App\Admin\Controllers;

use App\Models\Coin;
use App\Models\Network;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CoinController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '币种';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Coin());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('icon', __('Icon'));

        $grid->column('networks', __('Network id'))->display(function ($networks) {

            $networks = array_map(function ($network) {
                return "<span class='label label-success'>{$network['name']}</span>";
            }, $networks);
        
            return join('&nbsp;', $networks);
        });

        $grid->model()->orderBy('id', 'desc');

        $grid->filter(function ($filter) {

            $filter->like('name', __('Name'));
            $filter->expand();
        });
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
        $show = new Show(Coin::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('icon', __('Icon'));
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
        $form = new Form(new Coin());

        $form->text('name', __('Name'))->creationRules(['required', "unique:coins"]);
        $form->image('icon', __('Icon'))->uniqueName();;

        $form->multipleSelect('networks', __('Network id'))->options(Network::pluck('name', 'id'));
        return $form;
    }
}
