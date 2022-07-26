<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;

class MenuController extends Controller
{
    public function menu(){
        $menus=Menu::all();
        $main_dishes=Menu::all()->where('category','=','main_dish');
        $snacks=Menu::all()->where('category','=','snack');
        $drinks=Menu::all()->where('category','=','drink');
        return view('home',['main_dishes'=>$main_dishes,'snacks'=>$snacks,'drinks'=>$drinks]);
    }

    public function addMenu(){
        return view('add_menu');
    }

    public function saveMenu(Request $request)
    {
        $menu = $request->all();
        Menu::create($menu);
        return redirect()->back();
    }

    public function editMenu($id)
    {
        $menu = Menu::find($id);
        return view('edit_menu', ['menu' => $menu]);
    }

    public function updateMenu($id, Request $request)
    {
        Menu::find($id)->update($request->all());
        return redirect('/admin');
    }

    public function deleteMenu($id)
    {
        Menu::find($id)->delete();
        return redirect('/admin');
    }

}
