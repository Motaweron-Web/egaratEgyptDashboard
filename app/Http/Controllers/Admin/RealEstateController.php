<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\FeaturesRealEstate;
use App\Models\Point;
use App\Models\RealEstate;
use App\Models\RealEstateImage;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RealEstateController extends Controller
{

    public function index(Request $request)
    {
        if($request->ajax()) {
            $realEstates = RealEstate::latest()->get();
            return Datatables::of($realEstates)
                ->addColumn('action', function ($realEstates) {
                    return '
                            <button type="button" data-id="' . $realEstates->id . '" class="btn btn-pill btn-info-light editBtn"><i class="fa fa-edit"></i></button>
                            <button class="btn btn-pill btn-danger-light" data-toggle="modal" data-target="#delete_modal"
                                    data-id="' . $realEstates->id . '" data-title="' . $realEstates->name . '">
                                    <i class="fas fa-trash"></i>
                            </button>
                       ';
                })
                ->escapeColumns([])
                ->make(true);
        }else{
            return view('Admin/realState/index');
        }
    }


    public function create(){
        return view('Admin/realState.parts.create');
    }


    public function store(Request $request)
    {


     //   return $request;

        $data = $request->validate([
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'name'=>'required',
            'description'=>'required',
            'position_url'=>'required',
            'owner'=>'required',
            'rooms'=>'required',
            'video'=>'required',
            'insurance'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'discount'=>'required',
            'beds'=>'required',
            'toilet'=>'required',
            'numperofperson'=>'required',
            'images'=>'required',
            'category_id'=>'required',
            'type_id'=>'required',
            'features'=>'required',
            'rules'=>'required',
        ],[
            'price.required'  => 'يرجي ادخال السعر' ,
            'price.regex'  => 'يرجي ادخال سعر صحيح' ,
            'name.required'=>'يرجي ادخال الاسم ',
            'description.required'=>'يرجي ادخال الاسم ',
            'position_url.required'=>'يرجي ادخال رابط الموقع',
            'rooms.required'=>'يرجي ادخال عدد الغرف',
            'owner.required'=>'يرجي ادخال اسم المالك  ',
            'video.required'=>'يرجي ادخال  رابط الفديو  ',
            'insurance.required'=>'يرجي ادخال  رابط الفديو  ',
            'discount.required'=>'يرجي ادخال الخصم',
            'beds.required'=>'يرجي ادخال عدد السراير',
            'toilet.required'=>'يرجي ادخال عدد الحمامات',
            'numperofperson.required'=>'يرجي ادخال عدد الاشخاص',
            'images.required'=>'يرجي ادخال صور العقار',
            'category_id.required'=>'يرجي ادخال منطقة العقار',
            'type_id.required'=>'يرجي ادخال نوع العقار',
            'rules.required'=>'يرجي ادخال قواعد العقارات ',
        ]);


     $real=   RealEstate::create([
            'price'=>$request->price,
            'name'=>$request->name,
            'description'=>$request->description,
            'position_url'=>$request->position_url,
            'owner'=>$request->owner,
            'rooms'=>$request->rooms,
            'video'=>$request->video,
            'insurance'=>$request->insurance,
            'discount'=>$request->discount,
            'beds'=>$request->beds,
            'toilet'=>$request->toilet,
            'numperofperson'=>$request->numperofperson,
            'category_id'=>$request->category_id,
            'type_id'=>$request->type_id,
            'rules'=>$request->rules,

        ]);


        if($request->images){
            for ($i = 0; $i < count($request->images); $i++) {

                $image = $request->images[$i];
                $imagename = 'assets/admin/images/realEstate/' . time() . $image->getclientOriginalName();
                $img = \Image::make($image->getRealPath());
                $img->resize(350, 350);
                $img->save(public_path($imagename));





              RealEstateImage::create(
                  [
                      'image'=>$imagename,
                      'real_estate_id'=>$real->id,
                  ]
              );
            }
        }

        if($request->features) {
            for ($i = 0; $i < count($request->features); $i++) {
     FeaturesRealEstate::updateOrCreate(
         [
                'real_estate_id'=>$real->id,
                'feature_id'=>$request->features[$i],
          ]
     );

            }
        }
else
{
    FeaturesRealEstate::where('real_estate_id',$real->id)->delete();
}

        if($real!=null)
            return response()->json(['status'=>200]);
        else
            return response()->json(['status'=>405]);
    }


    public function show($id)
    {
        //
    }


    public function edit(RealEstate $realEstate)
    {
        return view('Admin/realState.parts.edit',compact('realEstate'));

    }


    public function update(Request $request, $id)
    {
        //



        $data = $request->validate([
            'price' => 'required|regex:/^\d+(\.\d{1,2})?$/',
            'name'=>'required',
            'description'=>'required',
            'position_url'=>'required',
            'owner'=>'required',
            'rooms'=>'required',
            'video'=>'required',
            'insurance'=>'required|regex:/^\d+(\.\d{1,2})?$/',
            'discount'=>'required',
            'beds'=>'required',
            'toilet'=>'required',
            'numperofperson'=>'required',
            'images'=>'required',
            'category_id'=>'required',
            'type_id'=>'required',
            'features'=>'required',
            'rules'=>'required',
        ],[
            'price.required'  => 'يرجي ادخال السعر' ,
            'price.regex'  => 'يرجي ادخال سعر صحيح' ,
            'name.required'=>'يرجي ادخال الاسم ',
            'description.required'=>'يرجي ادخال الاسم ',
            'position_url.required'=>'يرجي ادخال رابط الموقع',
            'rooms.required'=>'يرجي ادخال عدد الغرف',
            'owner.required'=>'يرجي ادخال اسم المالك  ',
            'video.required'=>'يرجي ادخال  رابط الفديو  ',
            'insurance.required'=>'يرجي ادخال  رابط الفديو  ',
            'discount.required'=>'يرجي ادخال الخصم',
            'beds.required'=>'يرجي ادخال عدد السراير',
            'toilet.required'=>'يرجي ادخال عدد الحمامات',
            'numperofperson.required'=>'يرجي ادخال عدد الاشخاص',
            'images.required'=>'يرجي ادخال صور العقار',
            'category_id.required'=>'يرجي ادخال منطقة العقار',
            'type_id.required'=>'يرجي ادخال نوع العقار',
            'rules.required'=>'يرجي ادخال قواعد العقارات ',
        ]);
      $real=RealEstate::findOrFail($id);

        $real->update( [
            'price'=>$request->price,
            'name'=>$request->name,
            'description'=>$request->description,
            'position_url'=>$request->position_url,
            'owner'=>$request->owner,
            'rooms'=>$request->rooms,
            'video'=>$request->video,
            'insurance'=>$request->insurance,
            'discount'=>$request->discount,
            'beds'=>$request->beds,
            'toilet'=>$request->toilet,
            'numperofperson'=>$request->numperofperson,
            'category_id'=>$request->category_id,
            'type_id'=>$request->type_id,
            'rules'=>$request->rules,

        ]);


        if($request->images){
            RealEstateImage::where('real_estate_id',$real->id)->delete();
            for ($i = 0; $i < count($request->images); $i++) {

                $image = $request->images[$i];
                $imagename = 'assets/admin/images/realEstate/' . time() . $image->getclientOriginalName();
                $img = \Image::make($image->getRealPath());
                $img->resize(350, 350);
                $img->save(public_path($imagename));





                RealEstateImage::updateOrCreate(
                    [
                        'image'=>$imagename,
                        'real_estate_id'=>$real->id,
                    ]
                );
            }
        }

        if($request->features) {
            FeaturesRealEstate::where('real_estate_id',$real->id)->delete();

            for ($i = 0; $i < count($request->features); $i++) {
                FeaturesRealEstate::updateOrCreate(
                    [
                        'real_estate_id'=>$real->id,
                        'feature_id'=>$request->features[$i],
                    ]
                );

            }
        }
        else
        {
            FeaturesRealEstate::where('real_estate_id',$real->id)->delete();
        }

        if($real!=null)
            return response()->json(['status'=>200]);
        else
            return response()->json(['status'=>405]);



    }


    public function destroy($id)
    {
        //
    }




    public function delete(Request $request)
    {
        $real = RealEstate::where('id', $request->id)->first();

//            if (file_exists($real->image)) {
//                unlink($real->image);
//            }

            RealEstateImage::where('real_estate_id',$real->id)->delete();
            FeaturesRealEstate::where('real_estate_id',$real->id)->delete();

            $real->delete();

            return response(['message'=>'تم الحذف بنجاح','status'=>200],200);

    }







}
