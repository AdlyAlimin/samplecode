<?php

namespace App\Http\Controllers;

use App\Interfaces\UserInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userInterface;

    public function __construct(
        UserInterface $userInterface
    ) {
        $this->userInterface = $userInterface;
    }

    public function index()
    {
        $data = $this->userInterface->index();

        return $data;
    }

    public function create(Request $request)
    {
        $data = $this->userInterface->create($request);

        return $data;
    }

    public function show($id)
    {
        $data = $this->userInterface->show($id);

        return $data;
    }

    public function update($id, Request $request)
    {
        $data = $this->userInterface->update($id, $request);

        return $data;
    }

    public function delete($id)
    {
        $data = $this->userInterface->delete($id);

        return $data;
    }
}
