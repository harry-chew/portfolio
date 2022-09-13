<?php
class KmToMilesConverter implements IConverter {
    public function convert($km) {
        $miles = $km * 0.62137119;
        return $miles;
    }
}