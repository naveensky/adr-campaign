<?php
/**
 * Created by JetBrains PhpStorm.
 * User: keshav
 * Date: 28/8/13
 * Time: 3:42 PM
 * To change this template use File | Settings | File Templates.
 */

class CampaignRepository
{
    private $campaignFilesService;

    public function __construct()
    {
        $this->campaignFilesService = new CampaignFilesService();
    }

    public function addCampaign($name, $email, $mobile, $address, $city, $state, $category, $files)
    {
        try {
            $campaign = new Campaign();
            $campaign->name = $name;
            $campaign->email = $email;
            $campaign->mobile = $mobile;
            $campaign->address = $address;
            $campaign->city = $city;
            $campaign->state = $state;
            $campaign->category = $category;
            $campaignFileService = $this->campaignFilesService;
            $insertedCampaign = DB::transaction(function () use ($campaign, $files, $campaignFileService) {
                $campaign->save();
                $date = new DateTime();
                $dateString = $date->format('Y-m');
                $registrationNumber = preg_replace('#\-#', '', $dateString) . str_pad($campaign->id, 6, "0", STR_PAD_LEFT);

                $campaign->registrationNumber = $registrationNumber;
                $campaign->save();
                foreach ($files as $file) {
                    try {
                        $campaignFileService->addCampaignFiles($campaign->id, $file);
                    } catch (Exception $e) {
                        //consuming exception
                    }
                }
            });
        } catch (Exception $e) {
            throw $e;
        }
    }

}