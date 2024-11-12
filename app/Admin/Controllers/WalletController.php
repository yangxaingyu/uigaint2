<?php

namespace App\Admin\Controllers;

use App\Models\Wallet;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WalletController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '钱包';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Wallet());

        $grid->column('id', __('Id'));
        $grid->column('user.email', __('User id'));
        $grid->column('coin.name', __('Coin id'));
        $grid->column('balance', __('Balance'))->editable();;
        $grid->column('staked_balance', __('Staked balance'))->editable();;
        $grid->column('created_at', __('Created at'));

        $grid->model()->orderBy('id', 'desc');

        $grid->filter(function ($filter) {
            $filter->where(function ($query) {
                $query->whereHas('user', function ($query) {
                    $query->where('email', 'like', "%{$this->input}%");
                });
            }, __('Email'));
            $filter->expand();
        });
        $grid->disableActions();
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
        $show = new Show(Wallet::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('coin_id', __('Coin id'));
        $show->field('balance', __('Balance'));
        $show->field('staked_balance', __('Staked balance'));
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
        $form = new Form(new Wallet());

        $form->number('user_id', __('User id'));
        $form->number('coin_id', __('Coin id'));
        $form->decimal('balance', __('Balance'))->default(0.000000);
        $form->decimal('staked_balance', __('Staked balance'))->default(0.000000);

        return $form;
    }
}
