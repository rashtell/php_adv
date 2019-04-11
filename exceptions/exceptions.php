<?php
class InvalidCCNumberException extends InvalidArgumentException
{
    public function __construct($message = "No CC Number From Class \n", $code = 0, $previous = null)
    {
        return parent::__construct($message, $code, $previous);
    }
}

try {
    processCC(1);
} catch (Exception $e) {
    echo $e->getMessage();
    echo get_class($e);
    echo "\n";
    echo $e->getPrevious()->getMessage();
    echo get_class($e->getPrevious());
} finally {
    echo "\nfinally \n";
}

function processCC($numb = null, $zipCode = null)
{
    try {
        validate($numb, $zipCode);
    } catch (Exception $e) {
        throw new BadFunctionCallException("Invalid Inputs\n", null, $e);

    }
    echo "processed\n";
}

function validate($numb, $zipCode)
{
    if (is_null($numb)) {
        throw new InvalidCCNumberException();
    }
}
