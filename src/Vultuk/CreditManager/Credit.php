<?php

    namespace Vultuk\CreditManager;

    /**
     * Class Credit
     * @package Clix\CreditManager
     * @author Simon Skinner <s.skinner@clix.co.uk>
     */
    class Credit
    {

        /**
         * @var
         */
        protected $userDetails;

        /**
         * @var int
         */
        protected $credit = 0;

        /**
         * @param $credit
         * @return $this
         * @author Simon Skinner <s.skinner@clix.co.uk>
         */
        public function addCredit($credit)
        {
            $this->credit = $this->credit + $credit;
            return $this;
        }

        /**
         * @return int
         * @author Simon Skinner <s.skinner@clix.co.uk>
         */
        public function getCredit()
        {
            return $this->credit;
        }

        /**
         * @param $newCredit
         * @author Simon Skinner <s.skinner@clix.co.uk>
         */
        public function setCredit($newCredit)
        {
            $this->credit = $newCredit;
        }

        /**
         * @param $userDetails
         * @return Credit
         * @author Simon Skinner <s.skinner@clix.co.uk>
         */
        public function setUser($userDetails)
        {
            $this->userDetails = $userDetails;
            return $this->importUser();
        }

        /**
         * @return $this
         * @author Simon Skinner <s.skinner@clix.co.uk>
         */
        protected function importUser()
        {
            $this->setCredit($this->userDetails->credit());
            return $this;
        }
    }
