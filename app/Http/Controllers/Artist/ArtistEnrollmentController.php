<?php

namespace App\Http\Controllers\Artist;

use App\Http\Controllers\Controller;
use App\Http\Requests\Artist\ArtistEnrollmentRequest;
use App\Models\Artist\ArtistEnrollment;

class ArtistEnrollmentController extends Controller
{
    public function apply(){
        if(!auth()->check()){
            return redirect()->route("auth.login")->withErrors([
                "password" => "You need to login first, before you request to enroll yourself as an artist."
            ]);
        }

        $userId = auth()->id();
        $enrollment = ArtistEnrollment::where("user_id", $userId)->first();
        
        if($enrollment){
            return redirect()->route("artist.enrollment.message");
        }

        return view("artist.enrollment.form");
    }

    public function submitRequest(ArtistEnrollmentRequest $request){
        $data = array_merge(
            $request->validated(),
            ["user_id" => auth()->id()],
        );

        $enrollment = ArtistEnrollment::create($data);

        if($enrollment){
            return redirect()->route("artist.enrollment.message");
        }

       return back()->withErrors([
        "general" => "Soemthing went wrong while submitting your request. Please try again or contact us for support."
       ])->withInput(); 
                        
    }

    public function enrollmentTerms(){
        return view("artist.enrollment.terms");
    }

    public function enrollmentMessage(){

        $userId = auth()->id();
        $enrollment = ArtistEnrollment::where("user_id", $userId)->first();
        
        if(!$enrollment){
            return redirect()->route("artist.enrollment.form");
        }

        switch ($enrollment->is_accepted) {
            case null:
                $status = "Under Review";
                $message = "Your enrollment request has been received and is currently under review. You’ll be notified once a decision has been made.";
                break;

            case false:
                $status = "Rejected";
                $message = "Unfortunately, your enrollment request did not meet our requirements and has been rejected. If you have questions, feel free to reach out.";
                break;

            case true:
                $status = "Accepted";
                $message = "Your enrollment request has been accepted. Further details and next steps will be communicated to you directly.";
                break;
        }

        return view("artist.enrollment.message", 
            compact("status", "message")
        );
    }
   
}
