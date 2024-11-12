<?php

namespace App\Admin\Controllers;

use App\Models\Stake;
use App\Models\Coin;
use App\Enums\StakeStatus;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class StakeController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '质押';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Stake());

        $grid->column('id', __('Id'));
        $grid->column('user.email', __('User id'));
        $grid->column('miningPool.name', __('Mining pool id'));
        $grid->column('coin.name', __('Coin id'));
        $grid->column('amount', __('Amount'));
        $grid->column('start_date', __('Start date'));
        $grid->column('end_date', __('End date'));
        $grid->column('status', __('Status'));
        $grid->column('created_at', __('Created at'));

        $grid->model()->orderBy('id', 'desc');

        $grid->filter(function ($filter) {

            $filter->equal('coin_id', __('Coin id'))->select(Coin::pluck('name', 'id'));
            $filter->equal('status', __('Status'))->select(StakeStatus::display());
            $filter->expand();
        });

        // $grid->disableActions();
        // $grid->disableCreateButton();
        $grid->disableRowSelector();
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
        $show = new Show(Stake::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('mining_pool_id', __('Mining pool id'));
        $show->field('coin_id', __('Coin id'));
        $show->field('amount', __('Amount'));
        $show->field('start_date', __('Start date'));
        $show->field('end_date', __('End date'));
        $show->field('status', __('Status'));
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
        $form = new Form(new Stake());

        $form->number('user_id', __('User id'));
        $form->number('mining_pool_id', __('Mining pool id'));
        $form->number('coin_id', __('Coin id'));
        $form->decimal('amount', __('Amount'));
        $form->datetime('start_date', __('Start date'))->default(date('Y-m-d H:i:s'));
        $form->datetime('end_date', __('End date'))->default(date('Y-m-d H:i:s'));
        $form->text('status', __('Status'))->default('active');

        return $form;
    }
}
