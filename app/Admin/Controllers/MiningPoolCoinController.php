<?php

namespace App\Admin\Controllers;

use App\Models\MiningPoolCoin;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MiningPoolCoinController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'MiningPoolCoin';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new MiningPoolCoin());

        $grid->column('id', __('Id'));
        $grid->column('mining_pool_id', __('Mining pool id'));
        $grid->column('coin_id', __('Coin id'));
        $grid->column('annual_yield', __('Annual yield'));
        $grid->column('min_stake_amount', __('Min stake amount'));
        $grid->column('max_stake_amount', __('Max stake amount'));
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
        $show = new Show(MiningPoolCoin::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('mining_pool_id', __('Mining pool id'));
        $show->field('coin_id', __('Coin id'));
        $show->field('annual_yield', __('Annual yield'));
        $show->field('min_stake_amount', __('Min stake amount'));
        $show->field('max_stake_amount', __('Max stake amount'));
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
        $form = new Form(new MiningPoolCoin());

        $form->number('mining_pool_id', __('Mining pool id'));
        $form->number('coin_id', __('Coin id'));
        $form->decimal('annual_yield', __('Annual yield'));
        $form->decimal('min_stake_amount', __('Min stake amount'));
        $form->decimal('max_stake_amount', __('Max stake amount'));

        return $form;
    }
}
