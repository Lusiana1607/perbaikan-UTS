<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function dashboard()
    {
        $total = Task::count();
        $selesai = Task::where('selesai', true)->count();
        $belum = Task::where('selesai', false)->count();

        return view('tasks.dashboard', compact(
            'total',
            'selesai',
            'belum'
        ));
    }

    public function index()
    {
        $tasks = Task::orderBy('tanggal_selesai')->get();

        return view('tasks.index', compact('tasks'));
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul'=>'required',
            'tanggal_selesai'=>'required|date'
        ]);

        Task::create($request->all());

        return redirect('/');
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->all());

        return redirect('/');
    }

    public function destroy(Task $task)
    {
        if(!$task->selesai){
            $task->delete();
        }

        return redirect('/');
    }

    public function selesai(Task $task)
    {
        $task->update([
            'selesai'=>true,
            'selesai_pada'=>now()
        ]);

        return redirect('/');
    }

    public function report(Request $request)
    {
        $mulai = $request->mulai;
        $akhir = $request->akhir;

        $tasks = Task::where('selesai', true)
            ->when($mulai,function($q) use ($mulai){
                $q->whereDate('selesai_pada','>=',$mulai);
            })
            ->when($akhir,function($q) use ($akhir){
                $q->whereDate('selesai_pada','<=',$akhir);
            })
            ->get();

        return view('tasks.report', compact(
            'tasks',
            'mulai',
            'akhir'
        ));
    }
}