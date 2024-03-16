<?php

namespace ACES\Utils;

trait HttpOptionsTrait
{
    protected array $option = [];

    public function option($option, $value): void
    {
        $this->option[$option] = $value;
    }

    public function getOption($option): mixed
    {
        return $this->option[$option] ?? null;
    }

    public function options(): array
    {
        return $this->option;
    }
}
