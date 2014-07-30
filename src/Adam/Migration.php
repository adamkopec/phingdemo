<?php
/**
 * Created by PhpStorm.
 * User: adamkopec
 * Date: 30.07.2014
 * Time: 23:24
 */

namespace Adam;

class Migration {

    public function execute() {
        if (rand(0,3) == 1) {
            echo 'fail';
        } else {
            echo 'ok';
        }
    }
} 