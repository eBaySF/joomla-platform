<?php
/**
 * @package     Joomla.UnitTest
 *
 * @copyright   Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE
 */

include_once JPATH_PLATFORM . '/joomla/session/storage.php';

/**
 * Test class for JSessionStorageNone.
 * Generated by PHPUnit on 2011-10-26 at 19:36:08.
 */
class JSessionStorageNoneTest extends PHPUnit_Framework_TestCase {

    /**
     * @var JSessionStorageNone
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
		$this->object = JSessionStorage::getInstance('None');
    }

    /**
     * Test JSessionStorageNone::Register().
     */
    public function testRegister() {
    	$this->assertThat(
    		$this->object->register(),
    		$this->equalTo(null)
    	);
    }

    /**
     * Test JSessionStorageNone::open().
     */
    public function testOpen() {
    	$this->assertTrue(
    		$this->object->open(null, null)
    	);
    }

    /**
     * Test JSessionStorageNone::close().
     */
    public function testClose() {
    	$this->assertTrue(
    		$this->object->close()
    	);
    }

    /**
     * Test JSessionStorageNone::read().
     */
    public function testRead() {
    	$this->assertTrue(
    		$this->object->read(null)
    	);
    }

    /**
     * Test JSessionStorageNone::write().
     */
    public function testWrite() {
    	$this->assertTrue(
    		$this->object->write(null, null)
    	);
    }

    /**
     * Test JSessionStorageNone::destroy().
     */
    public function testDestroy() {
    	$this->assertTrue(
    		$this->object->destroy(null)
    	);
    }

    /**
     * Test JSessionStorageNone::gc().
     */
    public function testGc() {
    	$this->assertTrue(
    		$this->object->gc()
    	);
    }

    /**
     * Test JSessionStorageNone::test().
     */
    public function testTest() {
    	$this->assertTrue(
    		JSessionStorageNone::test()
    	);
    }
}

?>
