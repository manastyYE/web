<?php

use App\Enums\ParcelStatus;

return [
    ParcelStatus::PENDING => 'قيد الانتظار',
    ParcelStatus::PICKUP_ASSIGN => 'تعيين الالتقاط',
    ParcelStatus::RECEIVED_WAREHOUSE => 'مستلم في المستودع',
    ParcelStatus::DELIVERY_MAN_ASSIGN => 'تعيين موزع',
    ParcelStatus::PARTIAL_DELIVERED => 'تم التسليم الجزئي',
    ParcelStatus::DELIVERED => 'تم التوصيل',
    ParcelStatus::RETURN_ASSIGN_TO_MERCHANT => 'عودة إلى التاجر',
];

