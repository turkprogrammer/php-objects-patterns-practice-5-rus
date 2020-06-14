<?php
declare(strict_types=1);

namespace vitaliyviznyuk\popp5rus\ch12\batch01;

/* Листинг 12.01 */

class ApplicationHelper
{
    public function getOptions(): array
    {
        $optionfile = __DIR__ . "/data/woo_options.xml";

        if (!file_exists($optionfile)) {
            throw new AppException("Could not find options file");
        }

        $options = simplexml_load_file($optionfile);
        $dsn = (string)$options->dsn;
        // what do we do with this now?
        // ...
        /* /Листинг 12.01 */
        return [$dsn];
        /* Листинг 12.01 */
    }
}
/* /Листинг 12.01 */
