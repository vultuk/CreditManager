<?php

namespace Vultuk\CreditManager;

use Carbon\Carbon as Carbon;

/**
 * Class CreditLog
 * @package Vultuk\CreditManager
 * @author Simon Skinner <s.skinner@clix.co.uk>
 * @since ${DATE}
 */
class CreditLog
{

    /**
     * @var array
     */
    protected $logs = [];

    /**
     * @param $user_id
     * @param $value
     * @return $this
     * @author Simon Skinner <s.skinner@clix.co.uk>
     */
    public function addLog($user_id, $value)
    {
        $this->logs[] = [
            'user_id' => $user_id,
            'value' => $value,
        ];

        return $this;
    }

    /**
     * @param Carbon $startDate
     * @param Carbon $endDate
     * @return array
     * @author Simon Skinner <s.skinner@clix.co.uk>
     */
    public function getLogs(Carbon $startDate = null, Carbon $endDate = null)
    {
        return $this->logs;
    }
}
