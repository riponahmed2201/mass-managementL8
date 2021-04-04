<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Member;
use Illuminate\Http\Request;
use Image;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('backend.member.index', compact('members'));
    }
    public function create()
    {
        return view('backend.member.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'nid' => 'required',
            'photo' => 'required',
            'address' => 'required',
        ]);

        //Image Upload
        $singleFile = $request->file('photo');

        $photo = '';

        if ($singleFile) {
            $i = 0;
            $fileEx = $singleFile->getClientOriginalExtension();
            $fileName = date('Ymdhis_').$i. '.'.$fileEx;
            Image::make($singleFile)
                ->resize(400,400)
                ->save(public_path('uploads/member/').$fileName );
            $photo = $fileName;
        }

        try {
            $members  = new Member();
            $members->name = $request->name;
            $members->email = $request->email;
            $members->phone = $request->phone;
            $members->nid = $request->nid;
            $members->photo = $photo;
            $members->address = $request->address;

            if ($members->save())
            {
                return back()->with('success', 'Member successfully create');
            }
        }catch (\Exception $exception){
            return back()->with('error', 'Something Error Found, Please try again.');
        }
    }

    public function edit($id)
    {
        $member = Member::findOrFail($id);
        return view('backend.member.edit', compact('member'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'nid' => 'required',
            'address' => 'required',
        ]);

        try {
            $members  = Member::findOrFail($id);

            //Image Upload
            $imageFile = $request->file('photo');

            if ($imageFile)
            {
                $i = 0;
                $singleFileEx = $imageFile->getClientOriginalExtension();
                $fileName = date('Ymdhis_').$i. '.'.$singleFileEx;

                Image::make($imageFile)
                    ->resize(500,500)
                    ->save(public_path('uploads/member/').$fileName );

                if ($members->photo)
                {
                    if(file_exists('uploads/member/'.$members->photo) AND !empty($members->photo))
                    {
                        unlink('uploads/member/'.$members->photo);
                    }
                }
                $members->photo = $fileName;
            }
            else{
                $members->photo = $members->photo;
            }

            $members->name = $request->name;
            $members->email = $request->email;
            $members->phone = $request->phone;
            $members->nid = $request->nid;
            $members->address = $request->address;

            if ($members->save())
            {
                return back()->with('success', 'Member successfully updated');
            }
        }catch (\Exception $exception){
            return back()->with('error', 'Something Error Found, Please try again.');
        }
    }

    public function destroy($id){
        $member = Member::findOrFail($id);
        if($member){
            if(file_exists('uploads/member/'.$member->photo) AND !empty($member->photo)){
                unlink('uploads/member/'.$member->photo);
            }
            $member->delete();
            return redirect()->back()->with('success','Member information successfully deleted.');
        }else{
            return redirect()->back()->with('failed','Something Error Found !, Please try again.');
        }
    }
}
