<?php

/*
 * Encore Digital Group - Laravel Planning Center
 * Copyright (c) 2023-2024. Encore Digital Group
 */

it('will not use debugging functions')
    ->expect(['dd', 'dump', 'ray'])
    ->each->not->toBeUsed();
