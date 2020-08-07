<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Get Items
     *
     * @return Todo[]|Collection
     */
    public function get(): Collection
    {
        return Todo::all();
    }

    /**
     * Store Item
     *
     * @param Request $request
     * @return Todo[]|Collection
     */
    public function store(Request $request): Collection
    {
        $todo = new Todo([
            'title' => $request->todo_title,
            'content' => $request->todo_content,
            'status' => $request->todo_status
        ]);
        $todo->save();

        return Todo::all();
    }

    /**
     * Edit Item
     *
     * @param Request $request
     * @return Todo[]|Collection
     */
    public function edit(Request $request): Collection
    {
        $todo = Todo::find($request->todo_id);
        $todo->status = $request->todo_status;
        $todo->save();

        return Todo::all();
    }

    /**
     * Delete Item
     *
     * @param Request $request
     * @return Todo[]|Collection
     */
    public function delete(Request $request): Collection
    {
        Todo::destroy($request->todo_id);

        return Todo::all();
    }
}
