<?php

namespace App\Admin\Controllers;

use App\Models\User;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class UserController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = '用户';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new User());

        $grid->column('id', __('Id'));
        $grid->column('email', __('Email'));
        $grid->column('first_name', __('First name'));
        $grid->column('last_name', __('Last name'));
        $grid->column('kyc_status', __('Kyc status'))->switch();;
        $grid->column('kyc_type', __('Kyc type'));
        $grid->column('created_at', __('Created at'));


        $grid->model()->orderBy('id', 'desc');

        $grid->filter(function ($filter) {

            $filter->disableIdFilter();

            $filter->equal('email', __('Email'));
            $filter->equal('kyc_status', __('Kyc status'))->select([0=>'未通过', 1=>'已通过']);
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
        $show = new Show(User::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('first_name', __('First name'));
        $show->field('last_name', __('Last name'));
        $show->field('post_code', __('Post code'));
        $show->field('address_1', __('Address 1'));
        $show->field('address_2', __('Address 2'));
        $show->field('city', __('City'));
        $show->field('state', __('State'));
        $show->field('country', __('Country'));
        $show->field('kyc_status', __('Kyc status'));
        $show->field('kyc_type', __('Kyc type'));
        $show->field('front', __('Front'));
        $show->field('back', __('Back'));
        $show->field('felfie', __('Felfie'));
        $show->field('email', __('Email'));
        $show->field('email_verified_at', __('Email verified at'));
        $show->field('password', __('Password'));
        $show->field('remember_token', __('Remember token'));
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
        $form = new Form(new User());

        $form->text('first_name', __('First name'));
        $form->text('last_name', __('Last name'));
        $form->text('post_code', __('Post code'));
        $form->text('address_1', __('Address 1'));
        $form->text('address_2', __('Address 2'));
        $form->text('city', __('City'));
        $form->text('state', __('State'));
        $form->text('country', __('Country'));
        $form->switch('kyc_status', __('Kyc status'));
        $form->text('kyc_type', __('Kyc type'));
        $form->text('front', __('Front'));
        $form->text('back', __('Back'));
        $form->text('felfie', __('Felfie'));
        $form->email('email', __('Email'));
        $form->datetime('email_verified_at', __('Email verified at'))->default(date('Y-m-d H:i:s'));
        $form->password('password', __('Password'));
        $form->text('remember_token', __('Remember token'));

        return $form;
    }
}
