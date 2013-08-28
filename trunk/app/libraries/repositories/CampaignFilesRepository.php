<?php
/**
 * Created by JetBrains PhpStorm.
 * User: keshav
 * Date: 28/8/13
 * Time: 4:29 PM
 * To change this template use File | Settings | File Templates.
 */

class CampaignFilesRepository
{

    public function addFiles($campaignId, $filePath)
    {
        try {
            $campaignFile = new CampaignFile();
            $campaignFile->campaignId = $campaignId;
            $campaignFile->path = $filePath;
            $campaignFile->save();
            return $campaignFile;
        } catch (Exception $e) {
            Log::error($e);
            throw $e;
        }
    }
}