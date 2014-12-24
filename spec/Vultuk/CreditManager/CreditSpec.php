<?php

    namespace spec\Vultuk\CreditManager;

    use PhpSpec\ObjectBehavior;
    use Prophecy\Argument;

    class CreditSpec extends ObjectBehavior
    {

        function it_is_initializable()
        {
            $this->shouldHaveType('Vultuk\CreditManager\Credit');
        }

        function it_should_set_the_user_and_correct_credit()
        {
            $this->setUser(new MockUser());
            $this->getCredit()->shouldReturn(25);
        }

        function it_should_return_the_amount_of_credit()
        {
            $this->setCredit(1);
            $this->getCredit()->shouldReturn(1);
        }

        function it_should_be_able_to_increase_the_credit()
        {
            $this->setCredit(1);
            $this->addCredit(5);
            $this->getCredit()->shouldReturn(6);
        }

    }


    class MockUser
    {

        public $user_id;

        public function credit()
        {
            return 25;
        }
    }
