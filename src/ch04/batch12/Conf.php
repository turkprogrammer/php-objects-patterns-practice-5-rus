<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch12;

class Conf
{
    private $file;
    private $xml;
    private $lastmatch;

    // Класс class...

    public function __construct(string $file)
    {
        $this->file = $file;

        if (! file_exists($file)) {
            throw new FileException("Файл '$file' не найден");
        }

        $this->xml = simplexml_load_file($file, null, LIBXML_NOERROR);

        if (! is_object($this->xml)) {
            throw new XmlException(libxml_get_last_error());
        }

        $matches = $this->xml->xpath('/conf');

        if (! count($matches)) {
            throw new ConfException('Не найден корневой элемент: conf');
        }
    }

    public function write()
    {
        if (! is_writeable($this->file)) {
            throw new FileException("file '{$this->file}' is not writeable");
        }
        file_put_contents($this->file, $this->xml->asXML());
    }

    public function get(string $str): string
    {
        $matches = $this->xml->xpath("/conf/item[@name=\"$str\"]");

        if (count($matches)) {
            $this->lastmatch = $matches[0];
            return (string)$matches[0];
        }

        return null;
    }

    public function set(string $key, string $value)
    {
        if (! is_null($this->get($key))) {
            $this->lastmatch[0]=$value;
            return;
        }

        $conf = $this->xml->conf;

        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }
}
