<?php
declare(strict_types=1);
/**
 * @author Nicholas English <nenglish0820@outlook.com>.
 *
 * @link    <https://github.com/Nenglish7/Lovell> Github Repository.
 * @license <https://github.com/Nenglish7/Lovell/blob/master/LICENSE> New BSD License.
 */
 
namespace Nenglish7\Lovell\Exception;
 
/**
 * KeyCreationFailed.
 */
class KeyCreationFailedException extends RuntimeException implements ExceptionInterface
{
  
    use XSSGuardExceptionTrait;
  
    /**
     * Constuct a custom key creation exception.
     *
     * @param string $message The message for the occurring error.
     * @param int $code       The error code so the error can be looked up.
     *
     * @return void.
     */
    function __construct(string $message, int $code)
    {
        $message = $this->xssProtect($message);   
        $code = $this->xssProtect($code);
        parent::__construct(\sprintf('`%s` - `%s`', $message, $code));
    }
 
}
