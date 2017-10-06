<?php

declare(strict_types=1);

/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2014-2017 Spomky-Labs
 *
 * This software may be modified and distributed under the terms
 * of the MIT license.  See the LICENSE file for details.
 */

namespace Jose\Component\Encryption\Algorithm\KeyEncryption;

use AESKW\A256KW as Wrapper;

/**
 * Class A256KW.
 */
final class A256KW extends AESKW
{
    /**
     * {@inheritdoc}
     */
    protected function getWrapper()
    {
        return new Wrapper();
    }

    /**
     * {@inheritdoc}
     */
    public function name(): string
    {
        return 'A256KW';
    }

    /**
     * {@inheritdoc}
     */
    protected function getKeySize(): int
    {
        return 32;
    }
}
