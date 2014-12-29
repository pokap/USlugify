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
    public function slugify($text, $separator = '-', $lower = false)
    {
        $reservedChars = $this->getReservedChars();

        $text = str_replace($reservedChars, $separator, $text);
        $text = preg_replace('/[\p{M}\p{Z}\p{C}]+/u', '', $text);
        $text = trim(preg_replace('/[' . $separator . '\s]+/u', $separator, $text), $separator);

        if ($lower) {
            return mb_strtolower($text, mb_detect_encoding($text));
        }

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
