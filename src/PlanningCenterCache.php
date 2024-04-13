<?php

/*
 * Encore Digital Group - Laravel Planning Center
 * Copyright (c) 2023-2024. Encore Digital Group
 */

namespace EncoreDigitalGroup\Laravel\PlanningCenter;

use Illuminate\Support\Facades\Cache;

trait PlanningCenterCache
{
    protected bool $shallUseCache = false;
    protected int $cacheTtl = 60 * 60 * 24 * 7; // 1 week
    protected string $cacheKey;
    protected mixed $value;

    public function shallUseCache(bool $shallUseCache = true): self
    {
        $this->shallUseCache = $shallUseCache;

        return $this;
    }

    public function bypassCache(): self
    {
        $this->shallUseCache(shallUseCache: false);

        return $this;
    }

    public function cacheValue(): self
    {
        Cache::remember('planningcenter.' . $this->cacheKey, $this->cacheTtl, function () {
            return $this->value;
        });

        return $this;
    }
}
