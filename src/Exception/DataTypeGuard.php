<?php
declare(strict_types=1);
/**
 * @author Nicholas English <nenglish0820@outlook.com>.
 *
 * @link    <https://github.com/Nenglish7/Lovell> Github Repository.
 * @license <https://github.com/Nenglish7/Lovell/blob/master/LICENSE> New BSD License.
 *
 * @package Laxove\Security.
 */
 
namespace LaxovePHP\Security\Guard;
 
/**
 * DataTypeGuardTrait.
 */
trait DataTypeGuardTrait
{
    
    /**
     * Verify the data type.
     *
     * @param mixed $Test    The data to verify.
     * @param mixed $allowed The allowed data types.
     *
     * @return string.
     */
    public function xssProtect($data, string $encoding): string
    {
        $data = \strval($data);
        return htmlspecialchars($data, \ENT_QUOTES, $encoding);
    }
  
}
