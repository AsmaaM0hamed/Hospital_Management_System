<?php

namespace App\Traits;


use App\Models\Doctor\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

trait ImageUpload{


    public function StoreImage(Request $request, $inputname , $foldername , $disk, $imageable_id, $imageable_type)
    {

        if( $request->hasFile( $inputname ) ) {

            $photo = $request->file($inputname);
            $name = Str::slug($request->input('name'));
            $filename = $name. '.' . $photo->getClientOriginalExtension();

            // insert Image
            $Image = new Image();
            $Image->imagename = $filename;
            $Image->imageable_id = $imageable_id;
            $Image->imageable_type = $imageable_type;
            $Image->save();
            return $request->file($inputname)->storeAs($foldername, $filename, $disk);
        }

        return null;

    }

    public function DeletImage($disk,$path,$id)
    {
        storage::disk($disk)->delete($path);
        Image::where('imageable_id',$id)->delete();
    }
}
