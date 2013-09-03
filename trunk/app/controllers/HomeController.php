<?php

class HomeController extends BaseController
{
    private $campaignService;
    private $emailService;

    public function __construct()
    {
        $this->campaignService = new CampaignService();
        $this->emailService = new EmailService();
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

    public function getDashboard()
    {
        try {
            $data = Input::all();
            $name = empty($data['name']) ? null : $data['name'];
            $registrationNumber = empty($data['registrationNumber']) ? null : $data['registrationNumber'];
            $campaign = $this->campaignService->getCampaigns($name, $registrationNumber);

            return View::make('home.dashboard')->with('campaigns', $campaign)->with('name', $name)->with('registrationNumber', $registrationNumber);
        } catch (Exception $e) {
            return Redirect::to('error')->with('message', "Internal Server Error");
        }
    }


    public function postAdd()
    {
        $data = Input::all();
        $rules = array(
            'recaptcha_response_field' => 'required|recaptcha',
        );

        $v = Validator::make($data, $rules);
        if ($v->passes()) {
            $rules = array(
                'email' => 'required|email',
            );
            $v = Validator::make($data, $rules);
            if ($v->passes()) {
                try {
                    $validExtensions = array('jpg', 'jpeg', 'gif', 'png', 'tiff', 'ico', 'mp3', 'wav', 'amr', 'mp4',
                        'mov', 'avi', 'mpeg', 'wmv');
                    $campaignFiles = $data['campaignFiles'];
                    $isFileUploaded = false;
                    $isFileSizeExceeded = false;
                    $isInvalidExtensionValid = false;
                    foreach ($campaignFiles as $file) {

                        if (!empty($file)) {

                            $isFileUploaded = true;
                            if ($file->getClientSize() > 104857600) {
                                $isFileSizeExceeded = true;
                                break;
                            }
                            if (!in_array($file->getClientOriginalExtension(), $validExtensions)) {
                                $isInvalidExtensionValid = true;
                                break;
                            }
                        }
                    }
                    if ($isInvalidExtensionValid) {
                        if (isset($data['campaignFiles']))
                            unset($data['campaignFiles']);
                        return Redirect::to('/#submitEntry')->with('errorMessage', "Invalid file extension")->withInput($data)->with('status');
                    }
                    if (!$isFileUploaded) {
                        if (isset($data['campaignFiles']))
                            unset($data['campaignFiles']);
//                    return Response::json(array('status' => false, 'message' => "Atleast one file is required"));
                        return Redirect::to('/#submitEntry')->with('errorMessage', "Atleast one file is required")->withInput($data)->with('status');
                    }
                    if ($isFileSizeExceeded) {
                        if (isset($data['campaignFiles']))
                            unset($data['campaignFiles']);
                        return Redirect::to('/#submitEntry')->with('errorMessage', "File size exceeded , 100mb limit exceeded")->withInput($data)->with('status');
                    }
                    if (empty($data['name']) || empty($data['mobile'])) {
                        if (isset($data['campaignFiles']))
                            unset($data['campaignFiles']);
//
                        return Redirect::to('/#submitEntry')->with('errorMessage', "Please fill required fields")->withInput($data);
                    }

                    $address = empty($data['address']) ? '' : $data['address'];
                    $city = empty($data['city']) ? '' : $data['city'];
                    $state = empty($data['state']) ? '' : $data['state'];
                    $category = empty($data['category']) ? "None" : $data['category'];
                    $this->campaignService->addCampaign($data['name'], $data['email'], $data['mobile'], $address, $city, $state, $category, $campaignFiles);
                    $this->emailService->sendEmail(array('userName' => $data['name'], 'userEmail' => $data['email']));
                    return Redirect::to('/')->with('message', "Thank you for submitting your entry. Please see your email for more details.");

                } catch (Exception $e) {
                    if (isset($data['campaignFiles']))
                        unset($data['campaignFiles']);
//
                    return Redirect::to('/#submitEntry')->with('errorMessage', "Internal Server Error")->withInput($data);
                }
            } else {
                if (isset($data['campaignFiles']))
                    unset($data['campaignFiles']);
//
                return Redirect::to('/#submitEntry')->with('errorMessage', "Invalid Email")->withInput($data);

            }

        } else {
            if (isset($data['campaignFiles']))
                unset($data['campaignFiles']);
//
            return Redirect::to('/#submitEntry')->with('errorMessage', "Invalid Captcha")->withInput($data);
        }

    }

}