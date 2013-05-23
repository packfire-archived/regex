<?php
namespace Packfire\Text\Regex;

/**
 * Test class for Match.
 * Generated by PHPUnit on 2012-09-19 at 12:54:58.
 */
class MatchTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var \Packfire\Text\Regex\Match
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = new Match(new \stdClass(), 'test');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {

    }

    /**
     * @covers \Packfire\Text\Regex\Match::regex
     */
    public function testRegex() {
        $this->assertInternalType('object', $this->object->regex());
    }

    /**
     * @covers \Packfire\Text\Regex\Match::match
     */
    public function testMatch() {
        $this->assertEquals('test', $this->object->match());
    }

}
