<?php
use App\Enums\ParcelStatus;

return [
    ParcelStatus::PICKUP_ASSIGN              => 'تعيين الاستلام',
    ParcelStatus::PICKUP_RE_SCHEDULE         => 'إعادة جدولة الاستلام',
    ParcelStatus::RECEIVED_BY_PICKUP_MAN     => 'تم الاستلام بواسطة رجل الاستلام',
    ParcelStatus::RECEIVED_WAREHOUSE         => 'تم الاستلام في المستودع',
    ParcelStatus::TRANSFER_TO_HUB            => 'نقل إلى المركز',
    ParcelStatus::RECEIVED_BY_HUB            => 'تم الاستلام بواسطة المركز',
    ParcelStatus::DELIVERY_MAN_ASSIGN        => 'تعيين رجل التوصيل',
    ParcelStatus::DELIVERY_RE_SCHEDULE       => 'إعادة جدولة التوصيل',
    ParcelStatus::RETURN_TO_COURIER          => 'إعادة إلى شركة الشحن',
    ParcelStatus::PARTIAL_DELIVERED          => 'تم التسليم الجزئي',
    ParcelStatus::DELIVERED                  => 'تم التوصيل',
    ParcelStatus::RETURN_ASSIGN_TO_MERCHANT  => 'إعادة التعيين إلى التاجر',
    ParcelStatus::RETURN_MERCHANT_RE_SCHEDULE => 'إعادة جدولة إعادة التعيين إلى التاجر',
    ParcelStatus::RETURN_RECEIVED_BY_MERCHANT => 'تم استلام الإرجاع بواسطة التاجر',
    ParcelStatus::RETURN_WAREHOUSE           => 'إرجاع إلى المستودع',
    ParcelStatus::ASSIGN_MERCHANT            => 'تعيين التاجر',
    ParcelStatus::RETURNED_MERCHANT          => 'التاجر العائد',
];
