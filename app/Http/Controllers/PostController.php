<?php

namespace App\Http\Controllers;

use App\Booking;
use App\CustomizeBooking;
use App\PartyCenterBookingUser;
use App\PostComment;
use App\PostInfo;
use Illuminate\Http\Request;
use DB;
use PDF;

use Image;
use Session;
use Carbon\Carbon;
use DateTime;

class PostController extends Controller
{
    public function postDetails($id)
    {
        $post = DB::table('post_infos')
            ->where('post_infos.id', $id)
            ->first();
        
        $postComments = PostComment::where('post_id', $id)->get();

        $relatedPosts = PostInfo:: where('publication_status', 1)
            ->where("location", "LIKE", "%$post->location%")
            ->orderBy('id', 'DESC')
            ->paginate(8);

        return view('front-end.post.postDetails', [
            'post' => $post,
            'postComments' => $postComments,
            'relatedPosts' => $relatedPosts,
        ]);
    }

    public function postComment(Request $request)
    {
        $post_id = $request->post_id;
        $postComment = new PostComment();
        $postComment->comment = $request->comment;
        $postComment->post_id = $request->post_id;
        $postComment->save();

        return redirect()->route('post-details', $post_id);

    }
    public function typePost($typeName)
    {
        $categoryPosts = PostInfo::where('type', $typeName)->get();
        //        return $categoryPosts;

        return view('front-end.category-post.category-post', [
            'categoryPosts' => $categoryPosts,
        ]);
    }

    public function bookingRequest($id)
    {
//        return $id;
        $userId = Session::get('userId');
        if ($userId) {
            $userInfo = PartyCenterBookingUser::find($userId);
            return view('front-end.post.booking', [
                'postId' => $id,
                'userInfo' => $userInfo,
            ]);
        } else {
            return redirect()->back()->with('msg', 'Please login for booking');
        }

    }

    public function bookingRequestSend(Request $request)
    {
        $this->validate($request, [
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        $postData= $request;
        $post_id = $request->post_id;
        $userId = Session::get('userId');

        if ($userId) {
   
                $start = Carbon::parse($request->start_date);
                $end = Carbon::parse($request->end_date);
                $hours = $end->diffInHours($start);

                $postDetails=PostInfo::find($request->post_id);
                $totalPayable= $postDetails->rent* $hours;
                $bookingAmount= (30/100)* $totalPayable;

                return view('front-end.post.checkout',[
                    'postData'=>$postData,
                    'totalPayable'=>$totalPayable,
                    'bookingAmount'=>$bookingAmount,
                    'hours'=>$hours,
                ]);

        } else {
            return redirect()->back()->with('msg', 'Please login for booking');
        }

    }
    public function bookingRequestTransection_id(Request $request){
        $postData = $request;
        return view('admin.app-post.saveTransectionId',['postData'=> $postData]);
    }
    public function saveTransactionId(Request $request){
        // return $request;
        $this->validate($request, [
            'transection_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'total_amount' => 'required',
            'booking_amount' => 'required',
        ]);
        $newbookin = new Booking();
        $newbookin->customer_id = Session::get('userId');
        $newbookin->post_id = $request->post_id;
        $newbookin->start_date = $request->start_date;
        $newbookin->end_date = $request->end_date;
        $newbookin->total_amount = $request->total_amount;
        $newbookin->booking_amount = $request->booking_amount;
        $newbookin->status = 'Waiting';
        $newbookin->transection_id=$request->transection_id;
        $newbookin->save();
        return redirect('/');
    }

    public function checkoutBookingRequest(Request $request){
//        return $request;
        $this->validate($request, [
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        $post_id=$request->post_id;
        $newbookin = new Booking();
        $newbookin->customer_id = $request->customer_id;
        $newbookin->post_id = $request->post_id;
        $newbookin->start_date = $request->start_date;
        $newbookin->end_date = $request->end_date;
        $newbookin->no_of_room = $request->no_of_room;
        $newbookin->status = $request->status;
        $newbookin->total_amount = $request->total_amount;
        if( $request->transection_idDBBL != null){
            $newbookin->transection_id = $request->transection_idDBBL;
        }
        if( $request->transection_idBkash != null){
            $newbookin->transection_id = $request->transection_idBkash;
        }

        $newbookin->save();
        return redirect()->route('post-details', $post_id)->with('msg', 'Your request send to admin');

    }
    public function bookingRequestStatusByUser()
    {
        $userId = Session::get('userId');


        $bookingStatuses = DB::table('bookings')
            ->join('post_infos', 'bookings.post_id', '=', 'post_infos.id')
            ->join('party_center_booking_users', 'bookings.customer_id', '=', 'party_center_booking_users.id')
            
            ->where('bookings.customer_id', $userId)
            ->select('bookings.*', 'post_infos.name')
            ->where('bookings.status','Waiting')
            ->get();


        $acceptedBookingStatuses = DB::table('bookings')
            ->join('post_infos', 'bookings.post_id', '=', 'post_infos.id')
            ->join('party_center_booking_users', 'bookings.customer_id', '=', 'party_center_booking_users.id')
            
            ->where('bookings.customer_id', $userId)
            ->select('bookings.*', 'post_infos.name')
            ->where('bookings.status','Accept')
            ->get();
        $checkoutBookingStatuses = DB::table('bookings')
            ->join('post_infos', 'bookings.post_id', '=', 'post_infos.id')
            ->join('party_center_booking_users', 'bookings.customer_id', '=', 'party_center_booking_users.id')
            
            ->where('bookings.customer_id', $userId)
            ->select('bookings.*', 'post_infos.name')
            ->where('bookings.status','Checkout')
            ->get();
        $rejectBookingStatuses = DB::table('bookings')
            ->join('post_infos', 'bookings.post_id', '=', 'post_infos.id')
            ->join('party_center_booking_users', 'bookings.customer_id', '=', 'party_center_booking_users.id')
           
            ->where('bookings.customer_id', $userId)
            ->select('bookings.*', 'post_infos.name')
            ->where('bookings.status','Reject')
            ->get();

        $customizeBookingStatuses = DB::table('customize_booking')
            ->join('party_center_booking_users', 'customize_booking.user_id', '=', 'party_center_booking_users.id')
           
            ->where('customize_booking.user_id', $userId)
            ->select('customize_booking.*')
            ->get();

//        $bookingStatus=Booking::where('customer_id',$userId)->get();

        return view('front-end.post.booking-status', [
            'bookingStatuses' => $bookingStatuses,
            'acceptedBookingStatuses' => $acceptedBookingStatuses,
            'checkoutBookingStatuses' => $checkoutBookingStatuses,
            'rejectBookingStatuses' => $rejectBookingStatuses,
            'customizeBookingStatuses' => $customizeBookingStatuses,
        ]);
    }

    public function bookingRequestDeleteByUser($id)
    {
        Booking::find($id)->delete();
        return redirect()->back()->with('msg', 'your booking history is successfully delete');
    }

    public function bookingRequestViewByAdmin()
    {
        $bookingStatuses = DB::table('bookings')
            ->join('post_infos', 'bookings.post_id', '=', 'post_infos.id')
            ->join('party_center_booking_users', 'bookings.customer_id', '=', 'party_center_booking_users.id')
            
            ->select('bookings.*',
               
                'post_infos.name',
                'party_center_booking_users.first_name',
                'party_center_booking_users.last_name',
                'party_center_booking_users.phone_no',
                'party_center_booking_users.email_address')
            ->where('bookings.status','Waiting')
            ->orderBy('bookings.created_at', 'DESC')
            ->get();

        return view('admin.app-post.booking-requests', [
            'bookingStatuses' => $bookingStatuses,
        ]);
    }
    public function acceptedBookingRequestViewByAdmin()
    {
        $bookingStatuses = DB::table('bookings')
            ->join('post_infos', 'bookings.post_id', '=', 'post_infos.id')
            ->join('party_center_booking_users', 'bookings.customer_id', '=', 'party_center_booking_users.id')
            
            ->select('bookings.*',
                
                'post_infos.name',
                'party_center_booking_users.first_name',
                'party_center_booking_users.last_name',
                'party_center_booking_users.phone_no',
                'party_center_booking_users.email_address')
            ->where('bookings.status','Accept')
            ->get();

        return view('admin.app-post.accepted-booking-requests', [
            'bookingStatuses' => $bookingStatuses,
        ]);
    }
    public function CheckoutBookingRequestViewByAdmin()
    {
        $bookingStatuses = DB::table('bookings')
            ->join('post_infos', 'bookings.post_id', '=', 'post_infos.id')
            ->join('party_center_booking_users', 'bookings.customer_id', '=', 'party_center_booking_users.id')
            
            ->select('bookings.*',
                
                'post_infos.name',
                'party_center_booking_users.first_name',
                'party_center_booking_users.last_name',
                'party_center_booking_users.phone_no',
                'party_center_booking_users.email_address')

            ->where('bookings.status','Checkout')

            ->get();

        return view('admin.app-post.checkout-booking-requests', [
            'bookingStatuses' => $bookingStatuses,
        ]);
    }
    public function rejectedBookingRequestViewByAdmin()
    {
        $bookingStatuses = DB::table('bookings')
            ->join('post_infos', 'bookings.post_id', '=', 'post_infos.id')
            ->join('party_center_booking_users', 'bookings.customer_id', '=', 'party_center_booking_users.id')
            
            ->select('bookings.*',
                
                'post_infos.name',
                'party_center_booking_users.first_name',
                'party_center_booking_users.last_name',
                'party_center_booking_users.phone_no',
                'party_center_booking_users.email_address')
            ->where('bookings.status','Reject')
            ->get();

        return view('admin.app-post.rejected-booking-requests', [
            'bookingStatuses' => $bookingStatuses,
        ]);
    }
    public function customizeBookingRequestViewByAdmin()
    {
        $customizeBookingStatuses = DB::table('customize_booking')
            ->join('party_center_booking_users', 'customize_booking.user_id', '=', 'party_center_booking_users.id')

            ->select('customize_booking.*',
                'party_center_booking_users.first_name',
                'party_center_booking_users.last_name',
                'party_center_booking_users.phone_no',
                'party_center_booking_users.email_address'
            )
            ->get();


        return view('admin.app-post.customize-booking-requests', [
            'customizeBookingStatuses' => $customizeBookingStatuses,
        ]);
    }

    public function changeBookingStatus($id, $status)
    {
//        return $status;

        $bookingStatus = Booking::find($id);
        $bookingStatus->status = $status;
        $bookingStatus->save();
        return redirect()->back()->with('msg', 'Post status Changed');
    }
    public function changeCustomizeBookingStatus($id, $status)
    {
//        return $status;

        $bookingStatus = CustomizeBooking::find($id);
        $bookingStatus->status = $status;
        $bookingStatus->save();
        return redirect()->back()->with('msg', 'Post status Changed');
    }
    public function searchRequestByDate(Request $request){
        $date= $request->date;
        $bookingStatuses = DB::table('bookings')
            ->join('post_infos', 'bookings.post_id', '=', 'post_infos.id')
            ->join('party_center_booking_users', 'bookings.customer_id', '=', 'party_center_booking_users.id')
            
            ->select('bookings.*',
                
                'post_infos.name',
                'party_center_booking_users.first_name',
                'party_center_booking_users.last_name',
                'party_center_booking_users.phone_no',
                'party_center_booking_users.email_address')
            ->where('bookings.status','Waiting')
            ->where('bookings.created_at',"LIKE", "%$date%")
            ->get();
//return $bookingStatuses;
        return view('admin.app-post.booking-requests', [
            'bookingStatuses' => $bookingStatuses,
        ]);
    }

    public function customizeBooking(){
        
        $userId = Session::get('userId');
        if ($userId) {
            $userInfo = PartyCenterBookingUser::find($userId);
            return view('front-end.post.customize-booking', [
                'userInfo' => $userInfo,
            ]);
        } else {
            return redirect()->back()->with('msg', 'Please login for booking');
        }
    }
    public function postCustomizeBooking(Request $request){
        $this->validate($request, [
            'address' => 'required',
            'purpose' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        
        $bookingReq=new CustomizeBooking();
        $bookingReq->user_id = Session::get('userId');
        $bookingReq->address=$request->address;
        $bookingReq->purpose=$request->purpose;
        $bookingReq->description=$request->description;
        $bookingReq->start_date=$request->start_date;
        $bookingReq->end_date=$request->end_date;
        if ($request->image) {
           
            $image1 = $request->file('image');
            $fileType = $image1->getClientOriginalExtension();
            $imageName1 = time() . '_customize_' . '.' . $fileType;
            $directory = 'post-images/';
            $imageUrl1 = $directory . $imageName1;
            Image::make($image1)->resize(300, 300)->save($imageUrl1);
            $bookingReq->image = $imageUrl1;
        }

        $bookingReq->save();

        return redirect()->back()->with('msg','Booking request successfully send');
    }


}
