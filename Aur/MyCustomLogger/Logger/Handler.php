<?php
namespace Aur\MyCustomLogger\Logger;

use Monolog\Logger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{

    protected $loggerType = Logger::NOTICE;

    protected $fileName = '/var/log/my_custom_log.log';
}
