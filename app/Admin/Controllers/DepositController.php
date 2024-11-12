<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Deposit\Review;
use App\Enums\DepositStatus;
use App\Models\Deposit;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class DepositController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '充值';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Deposit());

        $grid->column('id', __('Id'));
        $grid->column('user.email', __('User id'));
        $grid->column('coin.name', __('Coin id'));
        $grid->column('address.network.name', __('Network id'))->display(function () {
            return $this->address->network->name;
        });

        $grid->column('address.address', __('Network id'))->copyable();
        $grid->column('amount', __('Amount'));
        $grid->column('hash', __('Hash'));
        $grid->column('status', __('Status'))->using(DepositStatus::display())->label(DepositStatus::labels());
        $grid->column('remarks', __('Remarks'));
        $grid->column('created_at', __('Created at'));

        $grid->actions(function ($actions) {
            $actions->disableDelete();
            $actions->disableEdit();
            $actions->disableView();

            if ($actions->row->status == DepositStatus::PENDING) {
                $actions->add(new Review);
            }
        });

        $grid->filter(function ($filter) {

            $filter->equal('status', __('Status'))->select(DepositStatus::display());
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
        $show = new Show(Deposit::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('order_number', __('Order number'));
        $show->field('user_id', __('User id'));
        $show->field('coin_id', __('Coin id'));
        $show->field('address_id', __('Address id'));
        $show->field('amount', __('Amount'));
        $show->field('hash', __('Hash'));
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
        $form = new Form(new Deposit());

        $form->text('order_number', __('Order number'));
        $form->number('user_id', __('User id'));
        $form->number('coin_id', __('Coin id'));
        $form->number('address_id', __('Address id'));
        $form->decimal('amount', __('Amount'))->default(0.000000);
        $form->text('hash', __('Hash'));
        $form->switch('status', __('Status'));
        $form->textarea('remarks', __('Remarks'));

        return $form;
    }
}
