<?php
/**
 * Created by JetBrains PhpStorm.
 * User: keshav
 * Date: 28/8/13
 * Time: 1:58 PM
 * To change this template use File | Settings | File Templates.
 */

class CampaignService
{
    private $campaignRepo;

    public function __construct()
    {
        $this->campaignRepo = new CampaignRepository();
    }

    public function addCampaign($name, $email, $mobile, $address, $city, $state, $category, $files)
    {
        $fileUploadingErrors = array();
        $filePaths = array();
        foreach ($files as $filesKey => $file) {
            if (is_null($file))
                continue;

            try {
                if (!$file->isValid()) {
                    $fileUploadingErrors[] = "Error while uploading file: " . $file->getClientOriginalName();
                    Log::error($file->getError());
                    continue;
                } else {
                    $fileName = Util::GUID() . '.' . $file->getClientOriginalExtension();
                    $isFileMoved = $file->move(Config::get('custom.uploadPath'), $fileName);
                    $filePaths[] = 'uploads/' . $fileName;
                }

            } catch (Exception $e) {
                $fileUploadingErrors[] = "Error while uploading file: " . $file->getClientOriginalName();
            }

        }
        $this->campaignRepo->addCampaign($name, $email, $mobile, $address, $city, $state, $category, $filePaths);
        return $fileUploadingErrors;
    }

    public function getCampaigns($name = null, $registrationNumber = null)
    {
        try {
            return $this->campaignRepo->getCampaigns($name, $registrationNumber);
        } catch (Exception $e) {
            throw $e;
        }
    }

}