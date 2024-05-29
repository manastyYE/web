<?php

use App\Enums\ParcelStatus;

return [
    ParcelStatus::PICKUP_ASSIGN => 'تم تعيين الاستلام',
    ParcelStatus::PICKUP_RE_SCHEDULE => 'إعادة جدولة استلام الطرد',
    ParcelStatus::RECEIVED_BY_PICKUP_MAN => 'تم استلام الطرد بواسطة رجل الاستلام',
    ParcelStatus::RECEIVED_WAREHOUSE => 'تم استلام الطرد في المستودع',
    ParcelStatus::TRANSFER_TO_HUB => 'تم نقل الطرد إلى المركز',
    ParcelStatus::RECEIVED_BY_HUB => 'تم الاستلام بواسطة المركز',
    ParcelStatus::DELIVERY_MAN_ASSIGN => 'تم تعيين رجل التوصيل',
    ParcelStatus::DELIVERY_RE_SCHEDULE => 'تمت إعادة جدولة التوصيل',

    ParcelStatus::DELIVER => 'تسليم',
    ParcelStatus::RETURN_TO_COURIER => 'إعادة إلى شركة الشحن',
    ParcelStatus::RETURN_ASSIGN_TO_MERCHANT => 'إعادة تعيين إلى التاجر',
    ParcelStatus::RETURN_MERCHANT_RE_SCHEDULE => 'إعادة جدولة إعادة التعيين إلى التاجر',

    ParcelStatus::DELIVERED => 'تم التوصيل',
    ParcelStatus::PARTIAL_DELIVERED => 'تم التسليم الجزئي',
    ParcelStatus::RETURN_WAREHOUSE => 'إرجاع إلى المستودع',
    ParcelStatus::ASSIGN_MERCHANT => 'تعيين التاجر',
    ParcelStatus::RETURNED_MERCHANT => 'إعادة التاجر',
    ParcelStatus::RETURN_RECEIVED_BY_MERCHANT => 'تم استلام الإرجاع بواسطة التاجر',

    'hub_name' => 'اسم المركز',
    'hub_phone' => 'هاتف المركز',
    'delivery_man' => 'رجل التوصيل',
    'delivery_man_phone' => 'هاتف رجل التوصيل'
];
