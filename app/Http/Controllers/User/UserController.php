<?php


namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use App\Services\User\UserService;
use Illuminate\View\View;

class UserController extends Controller
{

    private $service;

    /**
     * UserController constructor.
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->service = $userService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function list() : View
    {
        $users = $this->service
            ->findAll();
        return view('user.all')->with([
            'users' => $users
        ]);
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index() : View
    {
        return view('user.index');
    }

}
