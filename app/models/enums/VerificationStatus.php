<?php

namespace app\models\enums;

enum VerificationStatus: string
{
    case Success = "success";
    case Failure = "failure";
}
