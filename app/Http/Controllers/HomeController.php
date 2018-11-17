<?php

namespace App\Http\Controllers;

use App\Model\customer_base;
use App\Model\daily_prodline;
use App\Model\site_lacci;
use Illuminate\Http\Request;
use DB;

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
        return view('home');
    }

    public function revenue(){
        $data = site_lacci::select('site_lacci.site_id','site_lacci.site_name','site_lacci.branch','site_lacci.regional','site_lacci.network','daily_prodline.revenue',DB::raw('sum(daily_prodline.revenue) as total'))
            ->join('daily_prodline','daily_prodline.lacci','=','site_lacci.lacci')
            ->groupby('daily_prodline.lacci')
            ->orderBy('total','desc')
            ->take(10)->get();
        return view('branch.revenue_total', compact('data'));
    }

    public function revenuedate(Request $request){
        $input = $request->input();
        $data = site_lacci::select('site_lacci.site_id','site_lacci.site_name','site_lacci.branch','site_lacci.regional','site_lacci.network','daily_prodline.revenue')
            ->join('daily_prodline','daily_prodline.lacci','=','site_lacci.lacci')
            ->where('daily_prodline.date',$input['tanggal'])
            ->orderBy('daily_prodline.revenue','desc')
            ->take(10)->get();
        return view('branch.revenue_total', compact('data'));
    }

    public function msisdn(){
        $data = site_lacci::select('site_lacci.site_id','site_lacci.site_name','site_lacci.branch', DB::raw('count(customer_base.branch) as total'))
            ->join('customer_base','customer_base.branch','=','site_lacci.branch')
            ->groupby('customer_base.branch')
            ->take(10)
            ->get();
        return view('branch.msisdn', compact('data'));
    }

    public function msisdndetail($branch){
        $data = customer_base::select('customer_base.msisdn','customer_base.product','customer_base.handset')
            ->where('customer_base.branch',$branch)
            ->take(10)
            ->get();
        foreach ($data as $item){
        $datas=    '<tr>'.
            '<td>'.$item->msisdn.'</td>'.
            '<td>'.$item->product.'</td>'.
            '<td>'.$item->branch.'</td>'.
            '<td>'.$item->handset.'</td>
</tr>';
        }
        $table= '<table id="table" border=1>
        <thead>
            <tr>
                <th>msisdn</th>
                <th>product</th>
                <th>branch</th>
                <th>handset</th>
            </tr>
        </thead>
        <tbody>
            '.$datas.
'</tbody>
</table>';
        $table = str_replace('"','',$table);
        return response()->json(['status'=>200,'html' =>$table]);
    }

    public function data(){
        $data = site_lacci::select('site_lacci.site_id','site_lacci.site_name','site_lacci.branch','site_lacci.regional','site_lacci.network','daily_prodline.revenue','daily_prodline.date')
            ->join('daily_prodline','daily_prodline.lacci','=','site_lacci.lacci')->get();
        $branch = site_lacci::select('branch')->groupby('branch')->get();
        $date = daily_prodline::select('date')->groupby('date')->get();
        $site_id = site_lacci::select('site_id')->groupby('site_id')->get();
        $site_name = site_lacci::select('site_name')->groupby('site_name')->get();
        $regional = site_lacci::select('regional')->groupby('regional')->get();
        $network = site_lacci::select('network')->groupby('network')->get();
        $revenue = daily_prodline::select('revenue')->groupby('revenue')->get();
//        dd($network);
        return view('branch.data', compact('data','branch','data','date','site_id','site_name','regional','revenue','network'));
    }

    public function datacari(Request $request){
        $model = $request->input();
        $data = site_lacci::select('site_lacci.site_id','site_lacci.site_name','site_lacci.branch','site_lacci.regional','site_lacci.network','daily_prodline.revenue','daily_prodline.date')
            ->where([
                'branch'=>$model['branch'],
                'date' => $model['date'],
                'site_id' => $model['site_id'],
                'regional' => $model['regional'],
                'site_name' => $model['site_name'],
                'network' => $model['network'],
                'revenue' => $model['revenue'],
            ])
            ->join('daily_prodline','daily_prodline.lacci','=','site_lacci.lacci')->get();
        $branch = site_lacci::select('branch')->groupby('branch')->get();
        $date = daily_prodline::select('date')->groupby('date')->get();
        $site_id = site_lacci::select('site_id')->groupby('site_id')->get();
        $site_name = site_lacci::select('site_name')->groupby('site_name')->get();
        $regional = site_lacci::select('regional')->groupby('regional')->get();
        $network = site_lacci::select('network')->groupby('network')->get();
        $revenue = daily_prodline::select('revenue')->groupby('revenue')->get();
//        dd($network);
        return view('branch.data', compact('data','branch','data','date','site_id','site_name','regional','revenue','network'));
    }

    public function dailyprodline(){
        $data = daily_prodline::all();
        $min = daily_prodline::min('revenue');
        $max =daily_prodline::max('revenue');
        return view('branch.daily_prodline', compact('data','min','max'));
    }
}
