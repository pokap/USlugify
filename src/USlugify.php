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
    public function slugify($text)
    {
        $reservedChars = $this->getReservedChars();

        $text = str_replace($reservedChars, '-', $text);
        $text = trim(preg_replace('/[-\s]+/', '-', $text), '-');

        return mb_strtolower($text, mb_detect_encoding($text));
    }

    /**
     * Returns list of char reserved.
     * http://en.wikipedia.org/wiki/Percent-encoding#Percent-encoding_reserved_characters
     *
     * @return array
     */
    protected function getReservedChars()
    {
        return array('!', '#', '$', '&', '\'', '"', '(', ')', '*', '+', ',', '/', ':', ';', '=', '?', '@', '[', ']');
    }
}
