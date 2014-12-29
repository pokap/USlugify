<?php

namespace USlugify;

/**
 * USlugify
 *
 * @author Florent Denis <dflorent.pokap@gmail.com>
 */
class USlugify implements USlugifyInterface
{
    /**
     * {@inheritdoc}
     */
    public function slugify($text, $separator = '-')
    {
        $reservedChars = $this->getReservedChars();

        $text = str_replace($reservedChars, '-', $text);
        $text = preg_replace('/[\p{M}\p{Z}\p{C}]+/u', '', $text);
        $text = trim(preg_replace('/[-\s]+/u', '-', $text), '-');

        return $text;
    }

    /**
     * Returns list of char reserved.
     * http://en.wikipedia.org/wiki/Percent-encoding#Percent-encoding_reserved_characters
     *
     * @return array
     */
    protected function getReservedChars()
    {
        return array(' ', '!', '#', '$', '&', '\'', '"', '(', ')', '*', '+', ',', '/', ':', ';', '=', '?', '@', '[', ']');
    }
}
