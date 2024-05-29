<?php

use App\Enums\ApprovalStatus;

return [
    ApprovalStatus::REJECT    =>'رفض',
    ApprovalStatus::APPROVED  =>'موافقة',
    ApprovalStatus::PENDING   =>'قيد الانتظار',
    ApprovalStatus::PROCESSED =>'معالجتها',

];
