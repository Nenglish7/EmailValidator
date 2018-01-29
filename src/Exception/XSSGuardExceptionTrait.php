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
 * XSSGuardTrait.
 */
trait XSSGuardTrait
{
    
    /**
     * Protect against xss attacks.
     *
     * @param mixed $data      The data to convert.
     * @param string $encoding The type of encoding to use.
     *
     * @return string.
     */
    public function xssProtect($data, string $encoding): string
    {
        $data = \strval($data);
        return htmlspecialchars($data, \ENT_QUOTES, $encoding);
    }
  
}
