<?php
class MilesToKmConverter implements IConverter {
    public function convert($miles) {
        $km = $miles / 0.62137119;
        return $km;
    }
}