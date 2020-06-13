<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch10;

class Conf
{
    private $file;
    private $xml;
    private $lastmatch;

    public function __construct(string $file)
    {
        $this->file = $file;

        if (!file_exists($file)) {
            throw new \Exception("Файл '$file' не найде");
        }

        $this->xml = simplexml_load_file($file);
    }

    public function write()
    {
        if (!is_writeable($this->file)) {
            throw new \Exception("Файл '{$this->file}' недоступен по запис");
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
        if (!is_null($this->get($key))) {
            $this->lastmatch[0] = $value;
            return;
        }

        $conf = $this->xml->conf;

        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }
}
