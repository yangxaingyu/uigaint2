<?php

namespace App\Admin\Controllers;

use App\Enums\MiningPoolStatus;
use App\Models\Coin;
use App\Models\MiningPool;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MiningPoolController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '矿池';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MiningPool());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'));
        $grid->column('rewardCoin.name', __('Reward coin id'));
        $grid->column('total_stake_limit', __('Total stake limit'));
        $grid->column('lock_period_days', __('Lock period days'));
        $grid->column('status', __('Status'));
        $grid->column('end_date', __('End date'));

        $grid->model()->orderBy('id', 'desc');

        $grid->filter(function ($filter) {

            $filter->like('name', __('Name'));
            $filter->equal('status', __('Status'))->select(MiningPoolStatus::display());
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
        $show = new Show(MiningPool::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('reward_coin_id', __('Reward coin id'));
        $show->field('total_stake_limit', __('Total stake limit'));
        $show->field('lock_period_days', __('Lock period days'));
        $show->field('status', __('Status'));
        $show->field('end_date', __('End date'));
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
        $form = new Form(new MiningPool());

        $coins = Coin::pluck('name', 'id');

        $form->text('name', __('Name'))->required();
        $form->textarea('description', __('Description'));
        $form->select('reward_coin_id', __('Reward coin id'))->options($coins)->required();
        $form->decimal('total_stake_limit', __('Total stake limit'))->default(100000);
        $form->number('lock_period_days', __('Lock period days'))->default(7);
        $form->select('status', __('Status'))->options(MiningPoolStatus::display())->default(MiningPoolStatus::ACTIVE);
        $form->datetime('end_date', __('End date'))->default(date('Y-m-d 00:00:00', strtotime('+7 days')));

        $form->hasMany('supportedCoins', 'Coins', function (Form\NestedForm $form) use($coins){
            $form->select('coin_id', __('Coin'))->options($coins)->required();
            $form->decimal('annual_yield', __('Annual yield'))->default(5.0)->required();
            $form->decimal('min_stake_amount', __('Min stake amount'))->required();
            $form->decimal('max_stake_amount', __('Max stake amount'))->required();
        });

        return $form;
    }
}
