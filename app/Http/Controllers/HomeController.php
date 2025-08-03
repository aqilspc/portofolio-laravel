<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use Session;
use DB;
class HomeController extends Controller
{
	public function index(Request $request) 
	{
		$data = [];

		$data['left'] = json_decode(json_encode(DB::table('data')->where('section','left')->get()),true);
		$data['center'] = json_decode(json_encode(DB::table('data')->where('section','center')->get()),true);
		$data['right'] = json_decode(json_encode(DB::table('data')->where('section','right')->get()),true);
		return view('home',compact('data'));
	}

	public function update(Request $request)
	{
		$payload = $request->all();
		$files = ['image_url_slide_1','image_url_slide_2','image_url_slide_3','image_url_slide_4'];
		$types = ['center','left','right'];
		foreach ($types as $key => $value) {
			foreach ($payload[$value] as $payloadKey => $payloadValue) {
				if(in_array($payloadKey, $files)) {
					$uploadedFile = $payloadValue;
						//dd($payloadValue);
					if($uploadedFile != null){

						$imageFileName =
			                time() .
			                "_" .
			                strtolower(
			                    str_replace(
			                        " ",
			                        "_",
			                        $uploadedFile->getClientOriginalName()
			                    )
			                ); // Tambah timestamp di nama file
			            $zipPath = Storage::disk("public")->path(
			                "uploads/{$imageFileName}"
			            );
			            $uploadedFile->move(
			                storage_path("app/public/uploads/images"),
			                $imageFileName
			            );
			            $image = url("storage/uploads/images") . "/" . $imageFileName;

			            DB::table('data')->where('section',$value)->where('label',$payloadKey)->update(['text' => $image]);
					}
				}else{
					DB::table('data')->where('section',$value)->where('label',$payloadKey)->update(['text' => $payloadValue]);
				}
			}
		}

		return redirect()->back()->with('success','Berhasil update data!');
	}

}