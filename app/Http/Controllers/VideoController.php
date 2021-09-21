<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Group;
use Illuminate\Support\Facades\DB;


class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function lectureLive($id)
    {
        $file = Video::all();
        global $group;
        $group = Group::find($id);

        // $videoId = DB::table('group_videos')
        //     ->join('videos', 'group_videos.video_id', '=', 'videos.id')
        //     ->join('groups', 'group_videos.group_id', '=', 'groups.id')
        //     ->where('groups.id' , '=' , $id)
        //     ->select('videos.id')
        //     ->first();
        // dd($videoId);
        // DB::insert('insert into group_videos (group_id, video_id)
        //  values (?, ?)', [$id, $videoId]);


        return view('lecture-live', compact('file'), ["data" => $group]);
    }

    // public function upload()
    // {

    //     return view('upload');
    // }


    // public function index()
    // {
    //     $file = Video::all();
    //     return view('lecture-live', compact('file'));
    // }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = new Video;

        $data->title = $request->title;
        $data->description = $request->description;

        if ($request->file('file')) {
            // file => video
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $result = $request->file->move('storage/', $fileName);
            $data->file = $fileName;
        }
        $data->save();
        DB::table('group_videos')->insert([
            'video_id' => $data->id,
            'group_id' => $request->group,
        ]);

        // DB::insert('insert into group_videos (group_id, video_id)
        //  values (?, ?)', [6, 6]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Video::find($id);
        return view('lecture-preview', compact('data'));
    }

    public function download($file)
    {
        return response()->download('storage/' . $file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = new Video;
        $file = $file->findorfail($id);
        $file->delete();
        return redirect()->route('lecture-live');
    }

    public function groupVideo($id)
    {
        // $group = Group::find($id);

        // return redirect()->route('', 'lecture-live', ["group" => $group]);

        // $video = new Video;

        // $video  = $video->all();

        // return view('lecture-live', ["video" => $video]);
    }
}
