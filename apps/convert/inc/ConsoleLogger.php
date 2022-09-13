<?php

class ConsoleLogger implements ILogger {
    public function log($message) {
        echo "<script type='text/javascript'>console.log($message);</script>";
    }
}