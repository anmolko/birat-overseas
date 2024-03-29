<?php

use App\Models\Page;
use App\Models\PageSection;
use App\Models\SectionGallery;
use App\Models\User;
use App\Models\Menu;
use App\Models\MenuItem;

if (!function_exists('getNepaliMonth')) {
    $selected_month = '';
    function getNepaliMonth($month){
     if($month == '1' || $month == '01'){
       $selected_month = "Baisakh";
     }else if($month == '2' || $month == '02'){
      $selected_month = "Jestha";
     }else if($month == '3' || $month == '03'){
      $selected_month = "Ashar";
     }else if($month== '4' || $month == '04'){
        $selected_month = "Shrawan";
     }else if($month== '5' || $month == '05'){
      $selected_month = "Bhadra";
     }else if($month== '6' || $month == '06'){
      $selected_month = "Ashoj";
     }else if($month== '7' || $month == '07'){
      $selected_month = "Kartik";
     }else if($month== '8' || $month == '08'){
      $selected_month = "Mangsir";
     }else if($month== '9' || $month == '09'){
      $selected_month = "Poush";
     }else if($month== '10'){
      $selected_month = "Magh";
     }else if($month== '11' ){
      $selected_month = "Falgun";
     }else if($month== '12' ){
      $selected_month = "Chaitra";
     }
     return $selected_month;
    }
}

function url_get_contents ($Url) {
  if (!function_exists('curl_init')){
      die('CURL is not installed!');
  }
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $Url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  $output = curl_exec($ch);
  curl_close($ch);
  return $output;
}

if (!function_exists('greeting_msg')) {
    function greeting_msg(){
        date_default_timezone_set('Asia/kathmandu');
        $hour      = date('H');
        if ($hour >= 20) {
            $greetings = "Good Night";
        } elseif ($hour > 17) {
            $greetings = "Good Evening";
        } elseif ($hour > 11) {
            $greetings = "Good Afternoon";
        } elseif ($hour < 12) {
            $greetings = "Good Morning";
        }
        return $greetings;
    }
}

if (!function_exists('profile_percentage')) {
    function profile_percentage($id){
        $user       = User::find($id);
        $name       = 20;
        $email      = 20;
        $contact    = 20;
        $image      = 15;
        $gender     = 10;
        $address    = 10;
        $about      = 5;
        $percetage = 0;
        if ($user->name !== null) {
            $percetage += $name;
        }
        if ($user->email !== null) {
            $percetage += $email;
        }
        if ($user->contact !== null) {
            $percetage += $contact;
        }
        if ($user->address !== null) {
            $percetage += $address;
        }
        if ($user->image !== null) {
            $percetage += $image;
        }
        if ($user->gender !== null) {
            $percetage += $gender;
        }
        if ($user->about !== null) {
            $percetage += $about;
        }
        return $percetage;
    }
}


if (!function_exists('get_slugs_to_disable')) {
    function get_slugs_to_disable($id){
        $disable    = [];
        $desiredMenu   = Menu::where('slug',$id)->first();
        $menuitems     = MenuItem::where('menu_id',$desiredMenu->id)->get();
        foreach ($menuitems as $items){
            array_push($disable,$items->slug);
        }
        return $disable;
    }
}

if (!function_exists('get_menu_url')) {
    /**
     * @param $menu_type
     * @param $menu
     * @return string
     */
    function get_menu_url($menu_type, $menu){
        $url    = '#';
        if($menu_type == 'custom'){
            $url = '/'.@$menu->slug;
        }else if($menu_type == 'post'){
            $url = url('blog').'/'.@$menu->slug;
        }else if($menu_type == 'service'){
            $url = url('service').'/'.@$menu->slug;
        }else{
            $url = url('/').'/'.@$menu->slug;
        }

        return $url;
    }
}

if (!function_exists('elipsis')) {
    /**
     * @param $text
     * @param $words
     * @return string
     */
    function elipsis ($text, $words = 10) {
        // Check if string has more than X words
        if (str_word_count($text) > $words) {

            // Extract first X words from string
            preg_match("/(?:[^\s,\.;\?\!]+(?:[\s,\.;\?\!]+|$)){0,$words}/", $text, $matches);
            $text = trim($matches[0]);

            // Let's check if it ends in a comma or a dot.
            if (substr($text, -1) == ',') {
                // If it's a comma, let's remove it and add a ellipsis
                $text = rtrim($text, ',');
                $text .= '...';
            } else if (substr($text, -1) == '.') {
                // If it's a dot, let's remove it and add a ellipsis (optional)
                $text = rtrim($text, '.');
                $text .= '...';
            } else {
                // Doesn't end in dot or comma, just adding ellipsis here
                $text .= '...';
            }
        }
        // Returns "ellipsed" text, or just the string, if it's less than X words wide.
        return $text;
    }
}

if (!function_exists('get_icons')) {
    /**
     * @param $menu_type
     * @param $menu
     * @return string
     */
    function get_icons($index){
        $icon   = '';
        if($index == 0){
            $icon = 'icon-mission';
        }else if($index == 1){
            $icon = 'icon-insurance-2';
        }else if($index == 2){
            $icon = 'icon-house';
        }else{
            $icon = 'icon-happy';
        }

        return $icon;
    }
}

if (!function_exists('get_solution_icons')) {
    /**
     * @param $menu_type
     * @param $menu
     * @return string
     */
    function get_solution_icons($index){
        $icon   = '';
        if($index == 0){
            $icon = 'icon-computer';
        }else if($index == 1){
            $icon = 'icon-file';
        }else if($index == 2){
            $icon = 'icon-shield';
        }else if($index == 3){
            $icon = 'icon-mission';
        }else if($index == 4){
            $icon = 'icon-agreement';
        }else if($index == 5){
            $icon = 'icon-insurance-2';
        }else if($index == 6){
            $icon = 'icon-insurance-1';
        }else if($index == 7){
            $icon = 'icon-contract';
        }else{
            $icon = 'icon-fire';
        }

        return $icon;
    }
}

if (!function_exists('get_country')) {
    /**
     * @param $code
     * @return string
     */
    function get_country($code): string
    {
        $countries      = CountryState::getCountries();
        $name= '';
        foreach ($countries as $key=>$value){
            if($key == $code){
                $name = $value;
            }
        }
        return $name;

    }
}

if (!function_exists('get_legal_documents')) {
    /**
     * @return array
     */
    function get_legal_documents(): array
    {

        $values = [];
        $page_detail = Page::with('sections')->whereIn('slug', ['legal-document','legal-documents'])->where('status','active')->first();

        if($page_detail){
            $page_section = PageSection::with('page')->where('page_id', $page_detail->id)->orderBy('position', 'ASC')->get();
            foreach ($page_section as $section){
                if ($section->section_slug == 'gallery_section'){
                    $values['data'] = SectionGallery::with('section')
                        ->where('page_section_id', $section->id)
                        ->get();
                    $values['heading'] =$section->gallery_heading;
                    $values['subheading'] = $section->gallery_subheading;
                }
            }
            return $values;
        }else{
            return $values;
        }
    }
}

if (!function_exists('get_recruitment_icons')) {
    /**
     * @param $index
     * @return string
     */
    function get_recruitment_icons($index): string
    {
        $icon   = '';
        if($index == 0){
            $icon = 'icon-select';
        }else if($index == 1){
            $icon = 'icon-meeting';
        }else if($index == 2){
            $icon = 'icon-agreement';
        }else if($index == 3){
            $icon = 'icon-insurance-agent';
        }else if($index == 4){
            $icon = 'icon-employees';
        }else if($index == 5){
            $icon = 'icon-profits';
        }else if($index == 6){
            $icon = 'icon-insurance-2';
        }else if($index == 7){
            $icon = 'icon-success';
        }else{
            $icon = 'icon-insurance';
        }

        return $icon;
    }
}

if (!function_exists('get_recruitment_class')) {
    /**
     * @param $index
     * @return string
     */
    function get_recruitment_class($index): string
    {
        $icon   = '';
        if($index == 0){
            $icon = '';
        }else if($index == 1){
            $icon = 'process__single-2';
        }else if($index == 2){
            $icon = 'process__single-3';
        }else if($index == 3){
            $icon = 'process__single-4';
        }else if($index == 4){
            $icon = '';
        }else if($index == 5){
            $icon = 'process__single-2';
        }else if($index == 6){
            $icon = 'process__single-3';
        }else if($index == 7){
            $icon = 'process__single-4';
        }else{
            $icon = '';
        }

        return $icon;
    }
}
