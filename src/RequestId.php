<?php
/**
 * Created by PhpStorm.
 * User: steve
 * Date: 28/04/2017
 * Time: 11:00 AM
 */

namespace Cmzz\RequestId;

use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use Ramsey\Uuid\Uuid;

final class RequestId
{
    public function create()
    {
        try {
            $id = Uuid::uuid4()->toString();
            return $id;
        } catch (UnsatisfiedDependencyException $e) {
            echo 'Caught exception: ' . $e->getMessage() . "\n";
        }
    }
}