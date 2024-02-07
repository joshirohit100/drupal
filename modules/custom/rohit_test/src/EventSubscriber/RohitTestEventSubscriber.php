<?php

namespace Drupal\rohit_test\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class RohitTestEventSubscriber implements EventSubscriberInterface {

    public static function getSubscribedEvents() {
        return [];
    }

    private function someTestFunction($some_arg) {
        if ($some_arg) {
            $i = 1;
        }
        else {
            $i = 0;
        }
    }

}
