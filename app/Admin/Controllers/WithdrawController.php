<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Withdraw\Review;
use App\Enums\WithdrawStatus;
use App\Models\Withdraw;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WithdrawController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '提现';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Withdraw());

        $grid->column('id', __('Id'));
        $grid->column('user.email', __('User id'));
        $grid->column('coin.name', __('Coin id'));
        $grid->column('network.name', __('Network id'));
        $grid->column('address', __('Address'))->copyable();
        $grid->column('amount', __('Amount'));
        $grid->column('status', __('Status'))->using(WithdrawStatus::display())->label(WithdrawStatus::labels());
        $grid->column('remarks', __('Remarks'));
        $grid->column('created_at', __('Created at'));

        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableEdit();
            $actions->disableView();

            if ($actions->row->status != WithdrawStatus::SUCCEEDED) {
                $actions->add(new Review);
            }
        });

        $grid->filter(function ($filter) {

            $filter->equal('status', __('Status'))->select(WithdrawStatus::display());
            $filter->expand();
        });

        $grid->disableRowSelector();
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
        $show = new Show(Withdraw::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('coin_id', __('Coin id'));
        $show->field('network_id', __('Network id'));
        $show->field('address', __('Address'));
        $show->field('amount', __('Amount'));
        $show->field('status', __('Status'));
        $show->field('remarks', __('Remarks'));
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
        $form = new Form(new Withdraw());

        $form->number('user_id', __('User id'));
        $form->number('coin_id', __('Coin id'));
        $form->number('network_id', __('Network id'));
        $form->text('address', __('Address'));
        $form->decimal('amount', __('Amount'));
        $form->switch('status', __('Status'));
        $form->textarea('remarks', __('Remarks'));

        return $form;
    }
}
