<?php
interface TableInterface
{
    public function save(array $data);
}

interface LogInterface
{
    public function log($message);
}

class Table implements TableInterface, LogInterface, Countable
{
    public function save(array $data)
    {
        return "foo \n";
    }

    public function log($message)
    {
        return $message;
    }

    public function count()
    {
        return 70;
    }
}

echo (new Table())->save([]);
echo (new Table())->log("interfaces are awesome \n");
echo (new Table())->count();

/**
 * PHP Standard PHP Library
 * Interfaces
 *
 * Countable
 * OuterIterator
 * RecursiveIterator
 * SeekableIterator
 * SplObserver
 * SplSubject
 */
