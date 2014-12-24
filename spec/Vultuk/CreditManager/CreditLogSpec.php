<?php

    namespace spec\Vultuk\CreditManager;

    use PhpSpec\ObjectBehavior;
    use Prophecy\Argument;

    class CreditLogSpec extends ObjectBehavior
    {

        function it_is_initializable()
        {
            $this->shouldHaveType('Vultuk\CreditManager\CreditLog');
        }

        function it_should_be_able_to_add_a_log()
        {
            $this->addLog(1, 292);
            $this->getLogs()->shouldHaveCount(1);
        }
    }
