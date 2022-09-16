<?php

namespace MyApp\Http\HttpResponse;

enum ResponseStatus: int
{
    case OK           = 200;
    case CLIENT_ERROR = 400;
    case SERVER_ERROR = 500;
}