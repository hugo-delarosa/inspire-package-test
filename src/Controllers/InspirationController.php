<?php

namespace Hugo\Inspire\Controllers;

use Hugo\Inspire\Inspire;

class InspirationController
{

    public function __invoke(Inspire $inspire) {
        $quote = $inspire->justDoIt();

        return $quote;
    }
}
