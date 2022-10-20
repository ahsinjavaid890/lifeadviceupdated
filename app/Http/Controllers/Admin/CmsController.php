<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Helpers\Cmf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Support\Facades\Hash;
use App\Models\frequesntlyaskquestions;
use App\Models\travelpages;
use App\Models\section_three_elements;
use App\Models\frequesntlyaskquest_categories;
use Mail;
use Auth;
class CmsController extends Controller
{
    public function homepageshow()
    {
    	return view('admin.pages.homepage');
    }
    public function travelpages($id)
    {
        $data = travelpages::find($id);
        return view('admin.pages.travelpages')->with(array('data'=>$data));
    }
    public function updatedynamicpage(Request $request)
    {
        $update = travelpages::find($request->id);
        if($request->main_image)
        {
            $update->main_image = Cmf::sendimagetodirectory($request->main_image);
        }
        if($request->section_two_vector)
        {
            $update->section_two_vector = Cmf::sendimagetodirectory($request->section_two_vector);
        }
        $update->section_two_description = $request->section_two_description;
        $update->main_heading = $request->main_heading;
        $update->sub_heading = $request->sub_heading;
        $update->main_button_text = $request->btn_text;
        $update->main_button_link = $request->btn_link;
        $update->sectionthreeheading = $request->sectionthreeheading;
        $update->sectionthreedescription = $request->sectionthreedescription;
        $update->privacy_two_heading = $request->privacy_two_heading;
        $update->meta_title = $request->meta_title;
        $update->meta_description = $request->meta_description;
        $update->meta_tag = $request->meta_tag;
        if($request->section_two_vector)
        {
            $update->meta_image = Cmf::sendimagetodirectory($request->meta_image);
        }
        $update->save();
        return redirect()->back()->with('message', 'Page Updated Successfully');
    }
    public function sectionthreeelements(Request $request)
    {
        $update = section_three_elements::find($request->id);
        if($request->vector)
        {
            $update->vector = Cmf::sendimagetodirectory($request->vector);
        }
        $update->heading = $request->heading;
        $update->description = $request->description;
        $update->button_text = $request->button_text;
        $update->button_link = $request->button_link;
        $update->contact_number = $request->contact_number;
        $update->contact_number_two = $request->contact_number_two;
        $update->with_in = $request->with_in;
        $update->save();
        return redirect()->back()->with('message', 'Page Updated Successfully');
    }

    public function addnewsectionthreeelement(Request $request)
    {
        $add = new section_three_elements();
        $add->page = $request->page;
        if($request->vector)
        {
            $add->vector = Cmf::sendimagetodirectory($request->vector);
        }
        
        $add->heading = $request->heading;
        $add->description = $request->description;
        $add->button_text = $request->button_text;
        $add->button_link = $request->button_link;
        $add->contact_number = $request->contact_number;
        $add->contact_number_two = $request->contact_number_two;
        $add->with_in = $request->with_in;
        $add->type = $request->type;
        $add->save();
        return redirect()->back()->with('message', 'Inserted Successfully');
    }
    public function dletesectiontwo($id)
    {
        section_three_elements::where('id' , $id)->delete();
        return redirect()->back()->with('warning', 'Deleted Successfully');
    }
    public function faqcategories()
    {
        $data = frequesntlyaskquest_categories::all();
        return view('admin.faq.categories')->with(array('data'=>$data));
    }
    public function addnewfaqcategory(Request $request)
    {
        $add = new frequesntlyaskquest_categories();
        $add->name = $request->name;
        $add->icon = Cmf::sendimagetodirectory($request->icon);
        $add->status = 'Published';
        $add->save();
        return redirect()->back()->with('message', 'Category Added Successfully');
    }
    public function updatfaqcategory(Request $request)
    {
        $add = frequesntlyaskquest_categories::find($request->id);
        $add->name = $request->name;
        if($request->icon)
        {
            $add->icon = Cmf::sendimagetodirectory($request->icon);
        }
        $add->status = $request->status;
        $add->order = $request->order;
        $add->save();
        return redirect()->back()->with('message', 'Category Updated Successfully');
    }
    public function deletefaqcategory($id)
    {
        frequesntlyaskquestions::where('category_id' , $id)->delete();
        frequesntlyaskquest_categories::where('id' , $id)->delete();
        return redirect()->back()->with('warning', 'Category Deleted Successfully');
    }

    public function allfaq()
    {
        $data = frequesntlyaskquestions::all();
        $categories = frequesntlyaskquest_categories::all();
        return view('admin.faq.allfaq')->with(array('data'=>$data,'categories'=>$categories));
    }
    public function addnewfaq(Request $request)
    {
        $add = new frequesntlyaskquestions();
        $add->category_id = $request->category_id;
        $add->question = $request->question;
        $add->answer = $request->answer;
        $add->save();
        return redirect()->back()->with('message', 'FAQ Added Successfully');
    }
    public function updatfaq(Request $request)
    {
        $add = frequesntlyaskquestions::find($request->id);
        $add->category_id = $request->category_id;
        $add->question = $request->question;
        $add->answer = $request->answer;
        $add->order = $request->order;
        $add->save();
        return redirect()->back()->with('message', 'FAQ Updated Successfully');
    }
    public function deletefaq($id)
    {
        frequesntlyaskquestions::where('id' , $id)->delete();
        return redirect()->back()->with('warning', 'FAQ Deleted Successfully');
    }
}
