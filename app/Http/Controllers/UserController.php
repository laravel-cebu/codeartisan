<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    protected $userService;

    public function __construct(UserService $userService)
    {
        // assignments here
    }

}

class AuthController {
    protected $registrationService;

    public function __construct(RegistrationService $registrationService)
    {
        $this->registrationService = $registrationService;
    }
}

class UserService {
    protected $userRepository;
    protected $userEventRepository;

    public function __construct(UserRepository $userRepository, UserEventRepository $userEventRepository)
    {
        $this->userRepository = $userRepository;
        $this->userEventRepository = $userEventRepository;

    }
}
