<?php

use App\Enums\ParcelStatus;

return [
    ParcelStatus::RETURN_TO_COURIER  => 'العودة إلى المندوب',
    ParcelStatus::PARTIAL_DELIVERED  => 'تم التسليم الجزئي',
    ParcelStatus::DELIVERED          => 'تم التوصيل'
];

