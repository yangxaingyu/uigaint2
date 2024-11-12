<?php

namespace App\Admin\Actions\Withdraw;

use App\Enums\WithdrawStatus;
use App\Services\WithdrawalService;
use Encore\Admin\Actions\RowAction;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Review extends RowAction
{
    public $name = '审核';

    public function handle(Model $model, Request $request)
    {
        $status = $request->get('status');
        $remarks = $request->get('remarks');

        switch ($status) {
            case WithdrawStatus::SUCCEEDED:

                $withdrawalService = new WithdrawalService();
                $withdrawalService->withdraw($model->user_id, $model->coin_id, $model->amount, $model->id);

                $model->status = WithdrawStatus::SUCCEEDED;
                $model->remarks = $remarks;
                $model->save();

                break;

            case WithdrawStatus::FAILED:
                $model->status = WithdrawStatus::FAILED;
                $model->remarks = $remarks;
                $model->save();
                break;

            default:
                break;
        }

        return $this->response()->success('Success')->refresh();
    }

    public function form()
    {
        $this->select('status', '状态')->options(WithdrawStatus::display())->required();
        $this->textarea('remarks', '原因');
    }
}