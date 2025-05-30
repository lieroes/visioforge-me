<?php

namespace App\Enums;

use Illuminate\Support\Arr;

enum DepositStatus: string
{
    case PENDING = 'pending';
    case APPROVED = 'approved';
    case DECLINED = 'declined';

    case ERROR = 'error';
    case FILTERED = 'filtered';
    case PROCESSING = 'processing';
    case CHAIN_DECLINED = 'chain_declined';
}
