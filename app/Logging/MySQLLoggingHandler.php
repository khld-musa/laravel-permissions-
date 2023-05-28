<?php

namespace App\Logging;

use App\Models\Logs;
use Monolog\Logger;
use Monolog\Handler\AbstractProcessingHandler;

class MySQLLoggingHandler extends AbstractProcessingHandler
{
    /**
    * Create a custom Monolog instance.
    *
    * @param  array  $config
    * @return \Monolog\Logger
    */
    public function __construct($level = Logger::DEBUG, $bubble = true) 
    {
       parent::__construct($level, $bubble);
    }


    protected function write(array $record): void

    { 
       $logs = new Logs();  
       $logs->message = $record['message'];
       $logs->context = json_encode($record['context']);
       $logs->level = $record['level'];
       $logs->level_name = $record['level_name'];
       $logs->channel = $record['channel'];
       $logs->record_datetime = $record['datetime']->format('Y-m-d H:i:s');
       $logs->extra = json_encode($record['extra']);
       $logs->formatted = $record['formatted'];
       $logs->remote_addr = $_SERVER['REMOTE_ADDR'];
       $logs->user_agent = $_SERVER['HTTP_USER_AGENT'];
       $logs->save();   
}
};