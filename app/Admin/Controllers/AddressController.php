<?php

namespace App\Admin\Controllers;

use App\Models\Address;
use App\Models\Coin;
use App\Models\Network;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class AddressController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '收款地址';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Address());

        $grid->column('id', __('Id'));
        $grid->column('coin.name', __('Coin id'));
        $grid->column('network.name', __('Network id'));
        $grid->column('address', __('Address'));
        $grid->column('enabled', __('Enabled'))->using([
            0 => '禁用',
            1 => '启用'
        ])->label([
            0 => 'danger',
            1 => 'success'
        ]);
        $grid->column('remarks', __('Remarks'));
        $grid->column('created_at', __('Created at'));

        $grid->model()->orderBy('id', 'desc');

        $grid->filter(function ($filter) {

            $filter->disableIdFilter();

            $filter->equal('coin_id', __('Coin id'))->select(Coin::pluck('name', 'id'));
            $filter->equal('enabled', __('Enabled'))->select([0 => '禁用', 1 => '启用']);
            $filter->like('address', __('Address'));
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
        $show = new Show(Address::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('coin_id', __('Coin id'));
        $show->field('network_id', __('Network id'));
        $show->field('address', __('Address'));
        $show->field('enabled', __('Enabled'));
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
        $form = new Form(new Address());

        $coins = Coin::pluck('name', 'id');
        $networks = Network::pluck('name', 'id');
        $form->select('coin_id', __('Coin'))->options($coins)->required();
        $form->select('network_id', __('Network'))->options($networks)->required();
        $form->text('address', __('Address'))->required();
        $form->switch('enabled', __('Enabled'))->default(1);
        $form->textarea('remarks', __('Remarks'));

        return $form;
    }
}
