<?php

namespace USlugify;

/**
 * Interface of USlugify
 *
 * @author Florent Denis <dflorent.pokap@gmail.com>
 */
interface USlugifyInterface
{
    /**
     * Return a slug of a string.
     *
     * @param string $text
     *
     * @return string
     */
    public function slugify($text);
}
