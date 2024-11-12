<?php

namespace App\Admin\Controllers;

use App\Models\MoneyLog;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MoneyLogController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'MoneyLog';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MoneyLog());

        $grid->column('id', __('Id'));
        $grid->column('source_id', __('Source id'));
        $grid->column('type', __('Type'));
        $grid->column('user_id', __('User id'));
        $grid->column('coin_id', __('Coin id'));
        $grid->column('amount', __('Amount'));
        $grid->column('balance_after', __('Balance after'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        $grid->model()->orderBy('id', 'desc');
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
        $show = new Show(MoneyLog::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('source_id', __('Source id'));
        $show->field('type', __('Type'));
        $show->field('user_id', __('User id'));
        $show->field('coin_id', __('Coin id'));
        $show->field('amount', __('Amount'));
        $show->field('balance_after', __('Balance after'));
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
        $form = new Form(new MoneyLog());

        $form->number('source_id', __('Source id'));
        $form->text('type', __('Type'));
        $form->number('user_id', __('User id'));
        $form->number('coin_id', __('Coin id'));
        $form->decimal('amount', __('Amount'))->default(0.000000);
        $form->decimal('balance_after', __('Balance after'))->default(0.000000);

        return $form;
    }
}
