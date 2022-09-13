<?php
class JsonLogger implements ILogger {
    public function log($message) {
        return json_encode($message);
    }
}