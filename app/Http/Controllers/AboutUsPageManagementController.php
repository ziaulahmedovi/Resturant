<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AboutUsContent;
use App\AboutUsWorkContent;
use App\AboutUsHistoryContent;
use DB;

class AboutUsPageManagementController extends Controller {

    public function viewAllAboutUsPageContent() {
        $abouts = AboutUsContent::all();
        $works = AboutUsWorkContent::all();
        $histories = AboutUsHistoryContent::all();

        return view('admin.pages.aboutUs.viewaboutUsContent', ['abouts' => $abouts, 'works' => $works, 'histories' => $histories]);
    }

    public function viewSaveAboutUsPageContentFrom($page) {

        if ($page == 'aboutUsContent')
            $tableName = 'aboutUsContent';
        else if ($page == 'workContent')
            $tableName = 'workContent';
        else if ($page == 'historyContent')
            $tableName = 'historyContent';

        return view('admin.pages.aboutUs.abuoutUsContentSave')->with('tableName', $tableName);
    }

    public function saveAboutUsPageContent(Request $request) {
        $this->saveDatabaseValue($request);
        return redirect('/about-content/save/' . $request->contentName)->with('message', 'Sucessfully ' . $request->contentName . ' Save');
    }

    private function saveDatabaseValue($request) {



        $table = $this->databaseObject($request);

        if ($request->publicationStatus == 1)
            $this->setAllUnpublishStatus($request);

        $table->content = $request->content;
        $table->publicationStatus = $request->publicationStatus;

        $table->save();
    }

    private function setAllUnpublishStatus($request) {
        $allData = $this->allDataFromDatabase($request);
        foreach ($allData as $data) {
            $data->publicationStatus = 0;
            $data->save();
        }
    }

    private function databaseObject($request) {

        if ($request->contentName == 'aboutUsContent')
            $table = new AboutUsContent();
        else if ($request->contentName == 'workContent')
            $table = new AboutUsWorkContent();
        else if ($request->contentName == 'historyContent')
            $table = new AboutUsHistoryContent();
        return $table;
    }

    private function allDataFromDatabase($request) {
        if ($request->contentName == 'aboutUsContent')
            $allData = AboutUsContent::all();
        else if ($request->contentName == 'workContent')
            $allData = AboutUsWorkContent::all();
        else if ($request->contentName == 'historyContent')
            $allData = AboutUsHistoryContent::all();
        return $allData;
    }
    
    public function deleteAboutUsPageContent($id){
       $Data = AboutUsContent::find($id);
       $Data->delete();
       return redirect('/admin/about-content');

    }
    
    public function deleteAboutUsPageWorkContent($id){
       $Data = AboutUsWorkContent::find($id);
       $Data->delete();
       return redirect('/admin/about-content');

    }
    
    public function deleteAboutUsPageHistoryContent($id){
       $Data = AboutUsHistoryContent::find($id);
       $Data->delete();
       return redirect('/admin/about-content');

    }
    public function publishAboutUsPageContent(Request $request){
        if($request->publicationStatus==1){
        $publish=DB::table($request->tableName)
                ->update(['publicationStatus' =>0]);
        }
        $publish=DB::table($request->tableName)
                ->where('id',$request->id)
                ->update(['publicationStatus' =>$request->publicationStatus]);
        return redirect('/admin/about-content');
        
    }

}
