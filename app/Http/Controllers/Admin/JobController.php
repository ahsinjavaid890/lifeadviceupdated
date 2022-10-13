<?php

namespace App\Http\Controllers\Admin;
use App\Models\User;
use App\Helpers\Cmf;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use App\Models\companies;
use App\Models\jot_attributes;
use Illuminate\Support\Facades\Hash;
use Mail;

class JobController extends Controller
{   
    public function alljobs()
    {
        return view('admin/jobs/index');
    }
    public function addnewjob()
    {
        return view('admin/jobs/add-new');
    }
    public function basicattributes()
    {
        $data = jot_attributes::all();
        return view('admin/job-attributes/basic-details')->with(array('data'=>$data));
    }
    public function editattribute($id)
    {
        $data = jot_attributes::find($id);
        foreach (explode(',', $data->options) as $r) {
            echo "<option selected value='".$r."'>".$r."<option>";
        }
    }
    public function getattributenameandid($id)
    {
        $data = jot_attributes::find($id);
        echo '<div class="col-md-12">
                <div class="form-group">
                    <label class="lable-control">Field title</label>
                    <input type="hidden" value="'.$data->id.'" name="id" >
                    <input value="'.$data->name.'" type="text" class="form-control font-size-lg " value="Dedicated Account" name="name">
                </div>
            </div>';
    }
    public function updateattributes(Request $request)
    {
        $data = jot_attributes::find($request->id);
        $data->name = $request->name;
        $data->options = implode(',', $request->param);
        $data->save();
        return redirect()->back()->with('message', 'Attribute Updated Successfully');
    }
    public function pendingjobs()
    {
        return view('admin/jobs/pending');
    }

}
