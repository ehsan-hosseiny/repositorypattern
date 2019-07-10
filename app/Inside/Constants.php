<?php

namespace App\Inside;

class Constants
{

    const AGENT_IOS = "ios";
    const AGENT_ANDROID = "android";
    const AGENT_WEB = "web";

    const NULL_VALUE = null;

    const PHOTO_TYPE = ["image/gif", "image/jpeg", "image/jpg", "image/png", "image/PNG", "image/GIF", 'image/*'];


    //==================== DataBase table list ===========================
    const POST_DB ='posts';


    //================ Response Static Error and Message =================
    const RESPONSE_ERROR_SUCCESS = 0;
    const RESPONSE_ERROR_FAIL = 1;


}
