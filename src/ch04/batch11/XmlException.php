<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch11;

class XmlException extends \Exception
{
    private $error;

    public function __construct(\LibXmlError $error)
    {
        $shortfile = basename($error->file);
        $msg = "[{$shortfile}, line {$error->line}, col {$error->column}] {$error->message}";
        $this->error = $error;

        parent::__construct($msg, $error->code);
    }

    public function getLibXmlError()
    {
        return $this->error;
    }
}
