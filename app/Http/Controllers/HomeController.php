<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;

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
        $menus = menu::all();
        return view('home',compact('menus'));
    }

    public function edit(Request $request)
    {
        $menus = menu::all();
        return view('menu', compact('menus'));
    }

    public function update(Request $request)
    {
        $menu = menu::find($request->id);
        
        switch ($request->type) {
            case 'menu':
                $menu->menu_name = $request->value;
                $menu->save();
                break;
            case 'size':
                $menu->size = $request->value;
                $menu->save();
                break;
            case 'y_axis':
                $menu->y_axis = $request->value;
                $menu->save();
                break;
            case 'x_axis':
                $menu->x_axis = $request->value;
                $menu->save();
                break;
            case 'spin':
                $menu->spin = $request->value;
                $menu->save();
                break;
            case 'url':
                $menu->url = $request->value;
                $menu->save();
                break;
            
            default:
                return response()->json([
                    'message' => 'Error Occured'
                ], 404);
                break;
        }

        return response()->json([
            'message' => 'Menu successfully updated'
        ], 200);
    }

    public function add(Request $request)
    {
        $menu = new menu();
        $menu->menu_name = $request->menu_name;
        $menu->size = $request->size;
        $menu->y_axis = $request->y_axis;
        $menu->x_axis = $request->x_axis;
        $menu->spin = $request->spin;
        $menu->url = $request->url;
        $menu->save();

        return response()->json([
            'message' => 'Menu successfully updated'
        ], 200);
    }

    public function delete(Request $request)
    {
        $menu = menu::find($request->id);
        $menu->delete();

        return response()->json([
            'message' => 'Menu successfully updated'
        ], 200);
    }
}
