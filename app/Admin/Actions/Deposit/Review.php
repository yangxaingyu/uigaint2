<?php

namespace App\Admin\Actions\Deposit;

use App\Enums\DepositStatus;
use App\Services\DepositService;
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
            case DepositStatus::SUCCEEDED:

                $depositService = new DepositService();
                $depositService->deposit($model->user_id, $model->coin_id, $model->amount, $model->id);

                $model->status = DepositStatus::SUCCEEDED;
                $model->remarks = $remarks;
                $model->save();

                break;

            case DepositStatus::FAILED:
                $model->status = DepositStatus::FAILED;
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
        $this->select('status', '状态')->options(DepositStatus::display())->required();
        $this->textarea('remarks', '原因');
    }
}