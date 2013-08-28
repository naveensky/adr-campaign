<?php
/**
 * Created by JetBrains PhpStorm.
 * User: keshav
 * Date: 28/8/13
 * Time: 4:07 PM
 * To change this template use File | Settings | File Templates.
 */

class CampaignFilesService
{

    private $campaignFileRepo;

    public function __construct()
    {
        $this->campaignFileRepo = new CampaignFilesRepository();
    }

    public function addCampaignFiles($campaignId, $filePath)
    {
        try {
            return $this->campaignFileRepo->addFiles($campaignId, $filePath);
        } catch (Exception $e) {
            throw $e;
        }
    }
}