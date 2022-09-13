<?php

class EchoLogger implements ILogger {
    public function log($message) {
        echo $message . '</br>';
    }
}