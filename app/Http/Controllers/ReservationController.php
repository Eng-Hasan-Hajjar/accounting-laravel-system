<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\CampGround;


class ReservationController extends Controller
{


   // الوظيفة لعرض جميع الحجوزات
   public function index()
   {   $campgrounds = CampGround::all();
       $reservations = Reservation::all();
       return view('reservations.all', compact('reservations', 'campgrounds'));
   }

    // عرض النموذج لإنشاء حجز جديد
    public function create()
    {
         $campgrounds = CampGround::all();
        return view('reservations.create',compact('campgrounds'));
    }


     // حفظ الحجز الجديد في قاعدة البيانات
public function store(Request $request)
{
    $messages = [
        'user_id.required' => 'حقل رقم المستخدم مطلوب',
        'user_id.exists' => 'رقم المستخدم غير صالح',
        'camp_ground_id.required' => 'حقل رقم المكان مطلوب',
        'camp_ground_id.exists' => 'رقم المكان غير صالح',
        'start_date.required' => 'حقل تاريخ البداية مطلوب',
        'start_date.date' => 'تاريخ البداية غير صالح',
        'end_date.required' => 'حقل تاريخ الانتهاء مطلوب',
        'end_date.date' => 'تاريخ الانتهاء غير صالح',
        'end_date.after_or_equal' => 'يجب أن يكون تاريخ الانتهاء بعد تاريخ البداية',
    ];
   // dd($request->all());
    $request->validate([

        'camp_ground_id' => 'required|exists:camp_grounds,id',
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
    ], $messages);


    // إنشاء الحجز فقط في حالة صحة البيانات
    Reservation::create([
        'user_id' => Auth::id(), // استخدام معرف المستخدم الحالي
        'camp_ground_id' => $request->camp_ground_id,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
    ]);

    //Reservation::create($request->all());

    return redirect('/adminpanel/reservations')->with('success', 'Data Added successfully.');

    //return redirect()->route('reservations.index')->with('success', 'تم إنشاء الحجز بنجاح.');
}

     // عرض التفاصيل لحجز معين
     public function show(Reservation $reservation)
     {
         return view('reservations.show', compact('reservation'));
     }


     // عرض النموذج لتعديل حجز معين
     public function edit(Reservation $reservation)
     {
        $campgrounds = CampGround::all();
         return view('reservations.edit', compact('reservation','campgrounds'));
     }

     // تحديث بيانات الحجز في قاعدة البيانات
     public function update(Request $request, Reservation $reservation)
     {
        $messages = [
            'user_id.required' => 'حقل رقم المستخدم مطلوب',
            'user_id.exists' => 'رقم المستخدم غير صالح',
            'camp_ground_id.required' => 'حقل رقم المكان مطلوب',
            'camp_ground_id.exists' => 'رقم المكان غير صالح',
            'start_date.required' => 'حقل تاريخ البداية مطلوب',
            'start_date.date' => 'تاريخ البداية غير صالح',
            'end_date.required' => 'حقل تاريخ الانتهاء مطلوب',
            'end_date.date' => 'تاريخ الانتهاء غير صالح',
            'end_date.after_or_equal' => 'يجب أن يكون تاريخ الانتهاء بعد تاريخ البداية',
        ];

        $request->validate([
            'user_id' => 'required|exists:users,id',
            'camp_ground_id' => 'required|exists:camp_grounds,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',


        ], $messages);


         $reservation->update([
             'user_id' => $request->user_id,
             'camp_ground_id' => $request->camp_ground_id,
             'start_date' => $request->start_date,
             'end_date' => $request->end_date,
         ]);

         return redirect()->route('reservations.index')->with('success', 'تم تحديث الحجز بنجاح.');
     }

     // حذف حجز معين من قاعدة البيانات
     public function destroy(Reservation $reservation)
     {
         $reservation->delete();
         return redirect()->route('reservations.index')->with('success', 'تم حذف الحجز بنجاح.');
     }

}
