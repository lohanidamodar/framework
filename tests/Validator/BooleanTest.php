<?php
/**
 * Utopia PHP Framework
 *
 * @package Framework
 * @subpackage Tests
 *
 * @link https://github.com/utopia-php/framework
 * @author Eldad Fux <eldad@appwrite.io>
 * @version 1.0 RC4
 * @license The MIT License (MIT) <http://www.opensource.org/licenses/mit-license.php>
 */

namespace Utopia\Validator;

use PHPUnit\Framework\TestCase;

class BooleanTest extends TestCase
{
    /**
     * @var Boolean
     */
    protected $boolean = null;

    public function setUp()
    {
    }

    public function tearDown()
    {
        $this->boolean = null;
    }

    public function testIsValid()
    {
        $this->boolean = new Boolean();
        
        $this->assertEquals(true, $this->boolean->isValid(true));
        $this->assertEquals(true, $this->boolean->isValid(false));
        $this->assertEquals(false, $this->boolean->isValid('false'));
        $this->assertEquals(false, $this->boolean->isValid('true'));
        $this->assertEquals(false, $this->boolean->isValid(['string', 'string']));
        $this->assertEquals(false, $this->boolean->isValid('string'));
        $this->assertEquals(false, $this->boolean->isValid(1));
        $this->assertEquals(false, $this->boolean->isValid(1.2));

        $this->boolean = new Boolean(true);

        $this->assertEquals(true, $this->boolean->isValid(true));
        $this->assertEquals(true, $this->boolean->isValid(false));
        $this->assertEquals(true, $this->boolean->isValid('false'));
        $this->assertEquals(true, $this->boolean->isValid('true'));
        $this->assertEquals(false, $this->boolean->isValid(['string', 'string']));
        $this->assertEquals(false, $this->boolean->isValid('string'));
        $this->assertEquals(false, $this->boolean->isValid(1));
        $this->assertEquals(false, $this->boolean->isValid(1.2));
    }
}