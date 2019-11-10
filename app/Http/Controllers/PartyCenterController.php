<?php

namespace App\Http\Controllers;

use App\Booking;
use App\ContactMessage;
use App\PostInfo;
use Illuminate\Http\Request;

use Image;
use DB;
use Session;
use Carbon\Carbon;


class PartyCenterController extends Controller
{
    public function index()
    {

        $allPost = PostInfo::where('publication_status', 1)
            ->orderBy('id', 'ASC')
            ->paginate(8);



        return view('front-end.home.home', [
            'allPost' => $allPost
        ]);
    }


    public function aboutUs()
    {
        return view('front-end.about-us.about-us');
    }

    public function contactUs()
    {
        return view('front-end.contact-us.contact-us');
    }

    protected function contactMessageSave($request)
    {
        $contactMessage = new ContactMessage();
        $contactMessage->name = $request->name;
        $contactMessage->email_address = $request->email_address;
        $contactMessage->phone_no = $request->phone_no;
        $contactMessage->message = $request->message;
        $contactMessage->save();
    }

    public function contactUsMessage(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',

        ]);
        $this->contactMessageSave($request);
        return view('front-end.contact-us.contact-us')->with('msg', 'Your message successfully send.');
    }

    public function viewContactUsMessage()
    {
        $contactMessages = ContactMessage::paginate(7);

        return view('admin.contact-messages.contact-messages', [
            'contactMessages' => $contactMessages,
        ]);
    }

    public function deleteContactUsMessage($id)
    {
        $contactMessage = ContactMessage::find($id);
        $contactMessage->delete();
        return redirect('/view/contact-us/message')->with('message', 'Message is Deleted');
    }

    public function addPost()
    {

        
        return view('admin.app-post.new-post');
    }

    protected function postInfoValidate($request)
    {
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required|min:2',
            'address' => 'required|min:2',
            'rent' => 'required|numeric',
            'email' => 'required|email',
            'short_description' => 'required|max:180',
            'long_description' => 'required|min:20',
            
            'image1' => 'required',
            'image2' => 'required',
            'image3' => 'required',
            'image4' => 'required',

        ]);
    }

    protected function savePostBasicInfo($request)
    {
        $image1 = $request->file('image1');
        $fileType = $image1->getClientOriginalExtension();
        $imageName1 = time() . '_1_' . '.' . $fileType;
        $directory = 'post-images/';
        $imageUrl1 = $directory . $imageName1;
        Image::make($image1)->resize(300, 300)->save($imageUrl1);

        $image2 = $request->file('image2');
        $fileType = $image2->getClientOriginalExtension();
        $imageName2 = time() . '_2_' . '.' . $fileType;
        $directory = 'post-images/';
        $imageUrl2 = $directory . $imageName2;
        Image::make($image2)->resize(300, 300)->save($imageUrl2);

        $image3 = $request->file('image3');
        $fileType = $image3->getClientOriginalExtension();
        $imageName3 = time() . '_3_' . '.' . $fileType;
        $directory = 'post-images/';
        $imageUrl3 = $directory . $imageName3;
        Image::make($image3)->resize(300, 300)->save($imageUrl3);

        $image4 = $request->file('image4');
        $fileType = $image4->getClientOriginalExtension();
        $imageName4 = time() . '_4_' . '.' . $fileType;
        $directory = 'post-images/';
        $imageUrl4 = $directory . $imageName4;
        Image::make($image4)->resize(300, 300)->save($imageUrl4);


        $appPost = new PostInfo();
        $appPost->name = $request->name;
        $appPost->type = $request->type;
        $appPost->location = $request->location;
        $appPost->address = $request->address;
        $appPost->rent = $request->rent;
        $appPost->phone_no = $request->phone_no;
        $appPost->email = $request->email;
        $appPost->short_description = $request->short_description;
        $appPost->long_description = $request->long_description;
        $appPost->image1 = $imageUrl1;
        $appPost->image2 = $imageUrl2;
        $appPost->image3 = $imageUrl3;
        $appPost->image4 = $imageUrl4;
        $appPost->publication_status = $request->publication_status;
        $appPost->save();
    }

    public function saveNewPostInfo(Request $request)
    {
        $this->postInfoValidate($request);
//        $imageUrl=$this->postImageUpload($request);
        $this->savePostBasicInfo($request);

        return redirect('/add/post')->with('message', 'Your Post is successfully added');
    }

    public function managePostInfo()
    {
        $postDetails = DB::table('post_infos')
            ->orderBy('id', 'DESC')
            ->paginate(8);

        return view('admin.app-post.manage-post', ['postDetails' => $postDetails]);
    }


    public function unpublishedPostInfo($id)
    {
        $postDetails = PostInfo::find($id);
        $postDetails->publication_status = 0;
        $postDetails->save();
        return redirect('post/manage')->with('message', 'Post Info Unpublished');

    }

    public function publishedPostInfo($id)
    {
        $postDetails = PostInfo::find($id);
        $postDetails->publication_status = 1;
        $postDetails->save();
        return redirect('post/manage')->with('message', 'Post Info published');

    }

    public function deletePostInfo($id)
    {
        $postDetails = PostInfo::find($id);
        Booking::where('post_id', $postDetails->id)->delete();
        unlink($postDetails->image1);
        unlink($postDetails->image2);
        unlink($postDetails->image3);
        unlink($postDetails->image4);
        $postDetails->delete();
        return redirect('post/manage')->with('message', 'Post Info Delete');
    }

    public function editPostInfo($id)
    {
        

        $appPost = PostInfo::find($id);
        return view('admin.app-post.edit-post', [
            'appPost' => $appPost
        ]);
    }

    public function updatePostInfo(Request $request)
    {
        $appPost = PostInfo::find($request->post_id);
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required|min:2',
            'address' => 'required|min:2',
            'rent' => 'required|numeric',
            'email' => 'required|email',
            'short_description' => 'required|max:180',
            'long_description' => 'required|min:20'
            
        ]);
        if ($request->image1 || $request->image2 || $request->image3 || $request->image4) {
            if ($request->image1) {
                unlink($appPost->image1);
                $image1 = $request->file('image1');
                $fileType = $image1->getClientOriginalExtension();
                $imageName1 = time() . '_1_' . '.' . $fileType;
                $directory = 'post-images/';
                $imageUrl1 = $directory . $imageName1;
                Image::make($image1)->resize(300, 300)->save($imageUrl1);
                $appPost->image1 = $imageUrl1;
            }

            if ($request->image2) {
                unlink($appPost->image2);
                $image2 = $request->file('image2');
                $fileType = $image2->getClientOriginalExtension();
                $imageName2 = time() . '_2_' . '.' . $fileType;
                $directory = 'post-images/';
                $imageUrl2 = $directory . $imageName2;
                Image::make($image2)->resize(300, 300)->save($imageUrl2);
                $appPost->image2 = $imageUrl2;
            }
            if ($request->image3) {
                unlink($appPost->image3);
                $image3 = $request->file('image3');
                $fileType = $image3->getClientOriginalExtension();
                $imageName3 = time() . '_3_' . '.' . $fileType;
                $directory = 'post-images/';
                $imageUrl3 = $directory . $imageName3;
                Image::make($image3)->resize(300, 300)->save($imageUrl3);

                $appPost->image3 = $imageUrl3;
            }
            if ($request->image4) {
                unlink($appPost->image4);
                $image4 = $request->file('image4');
                $fileType = $image4->getClientOriginalExtension();
                $imageName4 = time() . '_4_' . '.' . $fileType;
                $directory = 'post-images/';
                $imageUrl4 = $directory . $imageName4;
                Image::make($image4)->resize(300, 300)->save($imageUrl4);
                $appPost->image4 = $imageUrl4;
            }
            $appPost->name = $request->name;
            $appPost->type = $request->type;
            $appPost->location = $request->location;
            $appPost->address = $request->address;
            $appPost->rent = $request->rent;
            
            $appPost->phone_no = $request->phone_no;
            $appPost->email = $request->email;
            $appPost->short_description = $request->short_description;
            $appPost->long_description = $request->long_description;
            

            $appPost->publication_status = $request->publication_status;
            $appPost->save();
        } else {
            $appPost->name = $request->name;
            $appPost->type = $request->type;
            $appPost->location = $request->location;
            $appPost->address = $request->address;
            $appPost->rent = $request->rent;
            
            $appPost->phone_no = $request->phone_no;
            $appPost->email = $request->email;
            $appPost->short_description = $request->short_description;
            $appPost->long_description = $request->long_description;
            

            $appPost->publication_status = $request->publication_status;
            $appPost->save();
        }
        return redirect('post/manage')->with('message', 'Post Info updated');

    }

    public function postSearch(Request $request)
    {

        $searchKeyword = $request->search;

        $queryPost = PostInfo::where("location", "LIKE", "%$searchKeyword%")
            ->where('publication_status', 1)
            ->orWhere("address", "LIKE", "%$searchKeyword%")
            ->orWhere("name", "LIKE", "%$searchKeyword%")
            ->orderBy('id', 'DESC')
            ->paginate(8);
//            ->get();
        return view('front-end.search.search-result', [
            'allPost' => $queryPost
        ]);
    }

    public function viewPostByAdmin($id)
    {
        
        $appPost = PostInfo::find($id);
        return view('admin.app-post.post-details', [
            'appPost' => $appPost
            
        ]);
    }

}
