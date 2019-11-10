<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            // $bookingStatuses = DB::table('bookings')
            // ->join('post_infos', 'bookings.post_id', '=', 'post_infos.id')
            // ->join('party_center_booking_users', 'bookings.customer_id', '=', 'party_center_booking_users.id')
            // ->join('categories', 'post_infos.category_id', '=', 'categories.id')
            // ->select('bookings.*',
            //     'categories.category_name',
            //     'post_infos.name',
            //     'party_center_booking_users.first_name',
            //     'party_center_booking_users.last_name',
            //     'party_center_booking_users.phone_no',
            //     'party_center_booking_users.email_address')
            // ->where('bookings.status','Waiting')
            // ->get();

$totalWaiting=Booking::where('status','Waiting')->count('id');
$totalAccept=Booking::where('status','Accept')->count('id');
$totalReject=Booking::where('status','Reject')->count('id');
$totalCheckout=Booking::where('status','Checkout')->count('id');



        return view('admin.home.home',[
            'totalWaiting'=>$totalWaiting,
            'totalAccept'=>$totalAccept,
            'totalReject'=>$totalReject,
            'totalCheckout'=>$totalCheckout,
        ]);
    }
}
