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
     /**
      * Constuct a custom key creation exception.
      *
      * @param mixed ...$params The list of parameters used during execution.
      *
      * @throws RuntimeException.
      *
      * @return void.
      */
     function __construct(...$params)
     {
     }
 }
