<?php

class HomeController extends BaseController
{
    private $campaignService;

    public function __construct()
    {
        $this->campaignService = new CampaignService();
    }

    /*
    |--------------------------------------------------------------------------
    | Default Home Controller
    |--------------------------------------------------------------------------
    |
    | You may wish to use controllers instead of, or in addition to, Closure
    | based routes. That's great! Here is an example controller method to
    | get you started. To route to this controller, just add the route:
    |
    |	Route::get('/', 'HomeController@showWelcome');
    |
    */

    public function getIndex()

    {
        try {
            return View::make('home.home');
        } catch (Exception $e) {
            return Redirect::to('error')->with('message', "Internal Server Error");
        }

    }


    public function postAdd()
    {
        $data = Input::all();
        $rules = array(
            'name' => 'Required',
            'email' => 'Required',
            'mobile' => 'Required',
        );
        $v = Validator::make($data, $rules);
        if ($v->passes()) {
            try {


                $campaignFiles = $data['campaignFiles'];
                $name = empty($data['name']) ? '' : $data['name'];
                $email = empty($data['email']) ? '' : $data['email'];
                $mobile = empty($data['mobile']) ? '' : $data['mobile'];
                $address = empty($data['address']) ? '' : $data['address'];
                $city = empty($data['city']) ? '' : $data['city'];
                $state = empty($data['state']) ? '' : $data['state'];
                $category = empty($data['category']) ? "None" : $data['category'];
                $this->campaignService->addCampaign($name, $email, $mobile, $address, $city, $state, $category, $campaignFiles);
                return Redirect::to('/')->with('message', "Thank you for submitting your entry. Please see your email for more details.");
            } catch (Exception $e) {
                return Redirect::to('/')->with('message', "Internal Server Error");
            }
        } else {

            return Redirect::to('/')->with('message', "Please fill required fields");
        }

    }

}