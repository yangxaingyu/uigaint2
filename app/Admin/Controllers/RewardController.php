<?php

namespace App\Admin\Controllers;

use App\Models\Reward;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class RewardController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '收益';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Reward());

        $grid->column('id', __('Id'));
        $grid->column('user.email', __('User id'));
        // $grid->column('stake_id', __('Stake id'));
        $grid->column('coin.name', __('Coin id'));
        $grid->column('amount', __('Amount'));
        $grid->column('rate', __('Rate'));
        $grid->column('reward_date', __('Reward date'));
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
        $show = new Show(Reward::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('stake_id', __('Stake id'));
        $show->field('coin_id', __('Coin id'));
        $show->field('amount', __('Amount'));
        $show->field('rate', __('Rate'));
        $show->field('reward_date', __('Reward date'));
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
        $form = new Form(new Reward());

        $form->number('user_id', __('User id'));
        $form->number('stake_id', __('Stake id'));
        $form->number('coin_id', __('Coin id'));
        $form->decimal('amount', __('Amount'))->default(0.00000000);
        $form->decimal('rate', __('Rate'))->default(0.00);
        $form->datetime('reward_date', __('Reward date'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
