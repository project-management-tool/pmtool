<?php
/**
 * Created by PhpStorm.
 * User: Eranda
 * Date: 2/18/2016
 * Time: 4:24 AM
 */

namespace App\Http\Controllers;


use App\Model\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProjectController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request)
    {
        if ($request->has('create')) {
            $project = new Project();
            $project->name = $request->get('name');
            $project->description = $request->get('description');
            $project->save();
        }
        return view('project.create');
    }
}