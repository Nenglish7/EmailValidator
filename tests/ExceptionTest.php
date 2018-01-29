<?php
/**
 * @author Nicholas English <nenglish0820@outlook.com>.
 *
 * @link    <https://github.com/Nenglish7/Lovell> Github Repository.
 * @license <https://github.com/Nenglish7/Lovell/blob/master/LICENSE> New BSD License.
 */
 
namespace Nenglish7\Lovell;

use PHPUnit\Framework\TestCase;

/**
 * ExceptionTest.
 */
final class ExceptionTest extends TestCase
{

    use XSSGuardExceptionTrait;
    
    public function testError()
    {
        $this->expectException(Exception\Error::class);
        throw new Exception\Error();
    }
    
    public function testXSSProtectGuard()
    {
        $badData = '<body style="color:#fff;"></body>'
        $goodData = $this->xssProtect($badData);
        $this->assertTrue($goodData !== $badData);
    }
    
}
