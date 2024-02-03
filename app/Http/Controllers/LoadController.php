<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Load;
use App\Models\Shipper;
use App\Models\Consignee;
use Flash;
use PDF;

class LoadController extends Controller
{
    public function __construct(){

        $this->load = new Load();
        $this->shipper = new Shipper();
        $this->consignee = new Consignee();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $loads = Load::with('shipper','consignee')->get();
        return view('loads.index')
            ->with('loads', $loads);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('loads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
          'load_no' => ['required'],
          'bill_to' => ['required', 'string'],
          'dispatcher' => ['required', 'string'],
          'name' => ['required', 'string'],
          'location' => ['required', 'string'],
          'con_name' => ['required', 'string'],
          'con_location' => ['required', 'string'],
          // 'publish_at' => ['required', 'date_format:Y-m-d H:i:s'],
        ]);
        try{
            $hasSaved = $this->load->createLoad($request->all());
            if($hasSaved){
                $request->request->add(['load_id' => $hasSaved->id]);
                $this->shipper->createShipper($request->all());
                $this->consignee->createConsignee($request->all());
            }
            if(!$hasSaved){
                Flash::error('Failed to Create Load at The Time..');
            }
            Flash::success('Load Create successfully.');
            return redirect(route('loads.index'));
        }
        catch(Exception $e) {
            Flash::error('Somthing Went Worng..');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Loading  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $load = $this->load->with('shipper','consignee')->find($id);

        if (empty($load)) {
            Flash::error('Load not found');

            return redirect(route('loads.index'));
        }

        return view('loads.show')->with('load', $load);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Loading  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $load = $this->load->find($id);
        if (empty($load)) {
            Flash::error('Load not found');

            return redirect(route('loads.index'));
        }
        $loadObj = $this->load->where('id',$load->id)->first();
        $shipperObj = $this->shipper->where('load_id',$load->id)->first();
        $consigneeObj = $this->consignee->where('load_id',$load->id)->first();
        $loads = array_merge($loadObj->toArray(),$consigneeObj->toArray(), $shipperObj->toArray());

        return view('loads.edit')->with('loads', $loads);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Loading  $loading
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
          'load_no' => ['required'],
          'bill_to' => ['required', 'string'],
          'dispatcher' => ['required', 'string'],
          'name' => ['required', 'string'],
          'location' => ['required', 'string'],
          'con_name' => ['required', 'string'],
          'con_location' => ['required', 'string'],
          // 'publish_at' => ['required', 'date_format:Y-m-d H:i:s'],
        ]);
        $load = $this->load->find($id);

        if (empty($load)) {
            Flash::error('Loads not found');

            return redirect(route('loads.index'));
        }
        try{
            $hasUpdate = $this->load->updateLoads($request->all(), $id);
            if($hasUpdate){
                $updateShip = $this->shipper->updateShipper($request->all(), $id);
                $updateCon = $this->consignee->updateConsignee($request->all(), $id);
            }
            if(!$hasUpdate){
                Flash::error('Failed to Update Load at The Time..');
            }
            Flash::success('Loads updated successfully.');

            return redirect(route('loads.index'));
        }
        catch(Exception $e) {
            Flash::error('Somthing Went Worng..');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Loading  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $load = $this->load->find($id);
        if (empty($load)) {
            Flash::error('Load not found');

            return redirect(route('loads.index'));
        }
        $this->consignee->where('load_id',$load->id)->delete();
        $this->shipper->where('load_id',$load->id)->delete();
        $this->load->where('id',$load->id)->delete();
        
        Flash::success('Entries deleted successfully.');

        return redirect(route('loads.index'));
    }
    public function generatePdf($id)
    {
        $load = $this->load->with('shipper','consignee')->find($id);

        if (empty($load)) {
            Flash::error('Load not found');

            return redirect(route('loads.index'));
        }
        //for generate pdf and download
        // $pdf = PDF::loadView('template.invoice',compact('load'))
        //         ->setOptions(['defaultFont' => 'sans-serif']);
        // return $pdf->download($load->load_no.'_invoice.pdf');
        return view('template.invoice')->with('load', $load);
    }
}
