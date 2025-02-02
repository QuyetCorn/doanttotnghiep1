<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ChiTietSP;
use App\Models\LoaiSP;
use App\Models\SanPham;

class LoaiSPController extends Controller
{
    public function index($type) {
        $loaisp = LoaiSP::where('id',$type)->first();
        $hinhanhsp = SanPham::all();
        $sp_theoloai = ChiTietSP::where('loai_sp_id',$type)->where('tinh_trang','0')->get();

        if(isset($_GET['sort_by'])) {
            $sort_by = $_GET['sort_by'];

            if($sort_by=='tang-dan') {
                $sp_theoloai = ChiTietSP::where('loai_sp_id',$type)->where('tinh_trang','0')->orderby('gia','ASC')->get();
            }
            elseif($sort_by=='giam-dan') {
                $sp_theoloai = ChiTietSP::where('loai_sp_id',$type)->where('tinh_trang','0')->orderby('gia','DESC')->get();
            }
            elseif($sort_by=='moi-cu') {
                $sp_theoloai = ChiTietSP::where('loai_sp_id',$type)->where('tinh_trang','0')->orderby('created_at','DESC')->get();
            }
            elseif($sort_by=='cu-moi') {
                $sp_theoloai = ChiTietSP::where('loai_sp_id',$type)->where('tinh_trang','0')->orderby('created_at','ASC')->get();
            }
            elseif($sort_by=='A-Z') {
                $sp_theoloai = ChiTietSP::where('loai_sp_id',$type)->where('tinh_trang','0')->orderby('ten_sp','ASC')->get();
            }
            elseif($sort_by=='Z-A') {
                $sp_theoloai = ChiTietSP::where('loai_sp_id',$type)->where('tinh_trang','0')->orderby('ten_sp','DESC')->get();
            }

        }

        if(isset($_GET['price'])) {
            $price = $_GET['price'];

            if($price=='1') {
                $sp_theoloai = ChiTietSP::where('gia','<',300000)->where('loai_sp_id',$type)->where('tinh_trang','0')->orderby('gia','ASC')->get();
            }
            elseif($price=='2') {
                $sp_theoloai = ChiTietSP::whereBetween('gia',[300000, 500000])->where('loai_sp_id',$type)->where('tinh_trang','0')->orderby('gia','ASC')->get();
            }
            elseif($price=='3') {
                $sp_theoloai = ChiTietSP::whereBetween('gia',[500000, 700000])->where('loai_sp_id',$type)->where('tinh_trang','0')->orderby('gia','ASC')->get();
            }
            elseif($price=='4') {
                $sp_theoloai = ChiTietSP::whereBetween('gia',[700000, 1000000])->where('loai_sp_id',$type)->where('tinh_trang','0')->orderby('gia','ASC')->get();
            }
            elseif($price=='5') {
                $sp_theoloai = ChiTietSP::whereBetween('gia',[1000000, 1200000])->where('loai_sp_id',$type)->where('tinh_trang','0')->orderby('gia','ASC')->get();
            }
            elseif($price=='6') {
                $sp_theoloai = ChiTietSP::whereBetween('gia',[1200000, 1500000])->where('loai_sp_id',$type)->where('tinh_trang','0')->orderby('gia','ASC')->get();
            }
            elseif($price=='7') {
                $sp_theoloai = ChiTietSP::whereBetween('gia',[1500000, 2000000])->where('loai_sp_id',$type)->where('tinh_trang','0')->orderby('gia','ASC')->get();
            }
            elseif($price=='8') {
                $sp_theoloai = ChiTietSP::where('gia','>',2000000)->where('loai_sp_id',$type)->where('tinh_trang','0')->orderby('gia','ASC')->get();
            }

        }
        
        return view('user.page.loai-san-pham.loai_sp',compact('sp_theoloai','loaisp','hinhanhsp'));
    }
}
