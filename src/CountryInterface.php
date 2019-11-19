<?php

namespace DateTi\Country;

use DateTi\Holidays\HolidaysInterface;
use DateTi\Localization\LocalizationInterface;

interface CountryInterface
{
    public function getHolidays(): HolidaysInterface;

    public function getLocalization(): LocalizationInterface;
}
