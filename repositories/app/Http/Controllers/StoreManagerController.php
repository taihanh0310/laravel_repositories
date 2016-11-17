<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\StoreMusicService;
use App\Http\Controllers\AdminController;
use App\Http\Requests\StoreAlbumRequest;
use App\Conditions\AdminAlbumCondition;

class StoreManagerController extends AdminController
{
    private $storeSev;

    public function __construct(StoreMusicService $storeSev)
    {
        parent::__construct();
        $this->storeSev = $storeSev;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $condition = new AdminAlbumCondition();
        $condition->setAttributes($request->all());
        
        $albums = $this->storeSev->fetchListAlbum($condition);
        return view('manager.index', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datas = $this->storeSev->createAlbum();
        
        return view('manager.create', compact('datas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAlbumRequest $request)
    {
        $data = $request->except(['btn_submit', '_token']);
        $result = $this->storeSev->storeAlbum($data);
        if($result){
            return redirect()->route('manager.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = $this->storeSev->editAlbum($id);
        return view('manager.show', compact('datas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $datas = $this->storeSev->editAlbum($id);
        return view('manager.edit', compact('datas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except(['btn_submit', '_token']);
        $result = $this->storeSev->updateAlbum($id, $data);
        if($result){
            return redirect()->route('manager.show', ['id' => $id]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datas = $this->storeSev->deleteAlbum($id);
        return redirect()->route('manager.index');
    }
}
