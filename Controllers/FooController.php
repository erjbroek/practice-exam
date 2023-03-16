<?php

namespace App\Http\Controllers;

use App\Models\Foo;
use App\Http\Requests\StoreFooRequest;
use App\Http\Requests\UpdateFooRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FooController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $articles = Foo::paginate(15);
        $foo = new Foo();
        $boo = $foo->getKazaam();

        return view('foos.index', [
            'articles' => $articles,
            'boo' => $boo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('foos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFooRequest  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        Foo::create($this->validateFoo($request));

        return redirect(route('foo.index'));
    }

    /**
     * @param Request $request
     * @return array
     */
    public function validateFoo(Request $request)
    {
        return $request->validate([
            'name' => 'required',
            'thud' => 'required',
            'wombat' => 'required',
            'skwal' => 'required'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(string $id)
    {
        return view('foos.show', [
            'article' => Foo::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        $foo = Foo::find($id);
        return view('foos.edit', ['foo' => $foo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFooRequest  $request
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id)
    {
        $foo = Foo::find($id);

        $foo->name = request('name');
        $foo->thud = request('thud');
        $foo->wombat = request('wombat');

        $foo->save();
        return redirect(route('foo.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Foo  $foo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Foo $foo)
    {
        $foo->delete();

        return redirect(route('foo.index'));
    }
}
