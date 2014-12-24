<?php

namespace Vultuk\CreditManager;

use Carbon\Carbon as Carbon;

class CreditLog
{

    protected $logs = [];

    public function addLog($user_id, $value)
    {
        $this->logs[] = [
            'user_id' => $user_id,
            'value' => $value,
        ];

        return $this;
    }

    public function getLogs(Carbon $startDate = null, Carbon $endDate = null)
    {
        return $this->logs;
    }
}
