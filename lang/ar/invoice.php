<?php

use App\Enums\InvoiceStatus;
use App\Models\Backend\Merchantpanel\Invoice;

return [
    'id'                              => 'بطاقة تعريف',
    InvoiceStatus::PAID                => 'مدفوعة',
    InvoiceStatus::UNPAID              => 'غير مدفوعة',
    InvoiceStatus::PROCESSING          => 'قيد المعالجة',
    'paid_out'                        => 'مدفوعة',
    'invoice'                         => 'الفاتورة',
    'status_updated'                  => 'تم تحديث حالة الفاتورة بنجاح',
    'status_update'                   => 'تحديث الحالة',
    'paid_invoice'                    => 'فاتورة مدفوعة',
    'invoice_generated_successfully'  => 'تم إنشاء الفاتورة بنجاح',
    'invoice_generate_manually'       => 'إنشاء الفاتورة يدوياً',
    'generate'                        => 'إنشاء',
    'invoice_description'             => 'عند النقر فوق الزر "إنشاء"، سيتم إنشاء الفاتورة استنادًا إلى فترة الدفع الخاصة بالتاجر.'
];
