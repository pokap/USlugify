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
     * @param string $separator Default -
     * @param bool   $lower     Default FALSE
     *
     * @return string
     */
    public function slugify($text, $separator = '-', $lower = false);
}
