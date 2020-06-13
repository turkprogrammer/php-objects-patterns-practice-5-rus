<?php declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch04\batch12;

class Runner
{
    public static function run()
    {
        Runner::init();
    }

    public static function init()
    {
        try {
            $conf = new Conf(__DIR__ . '/conf.broken.xml');

            print 'user: ' . $conf->get('user') . "\n";
            print 'host: ' . $conf->get('host') . "\n";

            $conf->set('pass', 'newpass');
            $conf->write();
        } catch (FileException $e) {
            // Файл не существует или недоступен
            throw $e;
        } catch (XmlException $e) {
            // Поврежденный XML-файл
        } catch (ConfException $e) {
            // Неверный формат XML-файла
        } catch (\Exception $e) {
            // Ловушка: этот код не должен вызываться
        }
    }
}
