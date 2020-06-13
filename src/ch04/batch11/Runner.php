<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch11;

class Runner
{
    /**
     * @return void
     */
    public static function run(): void
    {
        self::init();

        echo PHP_EOL;

        self::init2();
    }

    public static function init()
    {
        try {
            $fh = fopen(__DIR__ . '/log.txt', 'a');

            fputs($fh, "Начало\n");

            $conf = new Conf(__DIR__ . '/conf.broken.xml');

            print 'user: ' . $conf->get('user') . "\n";
            print 'host: ' . $conf->get('host') . "\n";

            $conf->set('pass', 'newpass');
            $conf->write();

            fputs($fh, "Конец\n");
            fclose($fh);
        } catch (FileException $e) {
            // Файл не существует или недоступен
            fputs($fh, "Проблемы с файлом\n");
            throw $e;
        } catch (XmlException $e) {
            // Поврежденный XML-файл
            fputs($fh, "Проблемы с XM\n");
        } catch (ConfException $e) {
            // Неверный формат XML-файла
            fputs($fh, "Проблемы с конфигурацие\n");
        } catch (\Exception $e) {
            // Ловушка: этот код не должен вызываться
            fputs($fh, "Непредвиденные проблем\n");
        }
    }

    public static function init2()
    {
        $fh = fopen(__DIR__ . '/log.txt', "w");

        try {
            fputs($fh, "Начало\n");

            $conf = new Conf(dirname(__FILE__) . '/conf.not-there.xml');

            print 'user: ' . $conf->get('user') . "\n";
            print 'host: ' . $conf->get('host') . "\n";

            $conf->set('pass', 'newpass');
            $conf->write();
        } catch (FileException $e) {
            // Файл не существует или недоступен
            fputs($fh, "Проблемы с файлом\n");
            //throw $e;
        } catch (XmlException $e) {
            // Поврежденный XML-файл
            fputs($fh, "Проблемы с XM\n");
        } catch (ConfException $e) {
            // Неверный формат XML-файла
            fputs($fh, "Проблемы с конфигурацие\n");
        } catch (Exception $e) {
            // Ловушка: этот код не должен вызываться
            fputs($fh, "Непредвиденные проблем\n");
        } finally {
            fputs($fh, "Конец\n");
            fclose($fh);
        }
    }

    public static function init3()
    {
        try {
            eval("illegal code");
        } catch (\Error $e) {
            print get_class($e) . "\n";
        } catch (\Exception $e) {
            // do something with an Exception
        }
    }
}
