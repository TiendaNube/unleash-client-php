<?php

namespace Unleash\Client\Event;

use Unleash\Client\Configuration\Context;
use Unleash\Client\DTO\Feature;

final class FeatureToggleDisabledEvent extends AbstractEvent
{
    /**
     * @internal
     */
    public function __construct(
        private readonly Feature $feature,
        private readonly Context $context,
    ) {
    }

    /**
     * @codeCoverageIgnore
     */
    public function getFeature(): Feature
    {
        return $this->feature;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getContext(): Context
    {
        return $this->context;
    }
}
