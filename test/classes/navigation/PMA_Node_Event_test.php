<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Tests for Node_Event class
 *
 * @package PhpMyAdmin-test
 */

use PMA\libraries\Theme;

require_once 'libraries/navigation/NodeFactory.class.php';
require_once 'libraries/Util.php';
require_once 'libraries/Theme.php';

/**
 * Tests for Node_Event class
 *
 * @package PhpMyAdmin-test
 */
class Node_Event_Test extends PHPUnit_Framework_TestCase
{
    /**
     * SetUp for test cases
     *
     * @return void
     */
    public function setup()
    {
        $GLOBALS['server'] = 0;
        $_SESSION['PMA_Theme'] = Theme::load('./themes/pmahomme');
    }

    /**
     * Test for __construct
     *
     * @return void
     */
    public function testConstructor()
    {
        $parent = PMA_NodeFactory::getInstance('Node_Event');
        $this->assertArrayHasKey(
            'text',
            $parent->links
        );
        $this->assertContains(
            'db_events.php',
            $parent->links['text']
        );
    }
}
