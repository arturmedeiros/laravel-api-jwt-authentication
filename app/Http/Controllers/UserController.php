<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private Request $request;
    private User $user;

    public function __construct(Request $request, User $user)
    {
        $this->request = $request;
        $this->user = $user;
    }

    public function index(): JsonResponse
    {
        $users = $this->user
            ->orderBy('id', 'DESC')
            ->paginate(10);

        return response()->json($users);
    }

    public function store(): JsonResponse
    {
        $user = new $this->user;
        $user->fill($this->request->all());

        if ($this->request->has('password')) {
            $user->password = bcrypt($this->request->password);
        }

        $user->save();

        return response()->json($user, 201);
    }

    public function show($id): JsonResponse
    {
        $user = $this->user
                ->findOrFail($id);

        return response()->json($user);
    }

    public function update($id): JsonResponse
    {
        $user = $this->user->find($id);
        $user->fill($this->request->all());

        if ($this->request->has('password')) {
            $user->password = bcrypt($this->request->password);
        }

        $user->save();

        return response()->json($user);
    }

    public function destroy($id): JsonResponse
    {
        $this->user->findOrFail($id)->delete();

        return response()->json(null, 204);
    }
}
