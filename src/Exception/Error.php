<?php
/**
 * @author Nicholas English <nenglish0820@outlook.com>.
 *
 * @link    <https://github.com/Nenglish7/Lovell> Github Repository.
 * @license <https://github.com/Nenglish7/Lovell/blob/master/LICENSE> New BSD License.
 */
 
namespace Nenglish7\Lovell\Exception;
 
/**
 * Error.
 */
class Error extends RuntimeException implements ExceptionInterface
{
  
    /**
     * Constuct a custom error exception.
     *
     * @return void.
     */
    function __construct()
    {
        parent::__construct('`An unknown error occured` - `100`');
    }
 
}
