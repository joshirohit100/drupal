<?php

declare(strict_types=1);

namespace Drupal\Tests\Component\Annotation\Doctrine\Fixtures;

use Drupal\Tests\Component\Annotation\Doctrine\Fixtures\AnnotationTargetClass;

/**
 * @AnnotationTargetClass("Some data")
 */
class ClassWithInvalidAnnotationTargetAtMethod
{

    /**
     * @AnnotationTargetClass("functionName")
     */
    public function functionName($param)
    {

    }
}
