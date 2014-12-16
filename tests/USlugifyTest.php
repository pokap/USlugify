<?php

use USlugify\USlugify;

class USlugifyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \USlugify\USlugifyInterface
     */
    private $uslugify;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        $this->uslugify = new USlugify();
    }

    /**
     * @dataProvider getSlugs
     *
     * @param string $expected
     * @param string $text
     */
    public function testSlugify($expected, $text)
    {
        $this->assertEquals($expected, $this->uslugify->slugify($text));
    }

    /**
     * @return array
     */
    public function getSlugs()
    {
        return array(
            array('xx-x-x', 'xx x - "#$@ x'),
            array('bäng-bang', 'Bän...g (bang)'),
            array('a', ' a '),
            array('tags', 'tags/'),
            array('holy_wars', 'holy_wars'),
            array('x', 'x𘍿'),
            array('ϧ', 'ϧ΃𘒬𘓣'),
            array('¿x', '¿x')
        );
    }
}
