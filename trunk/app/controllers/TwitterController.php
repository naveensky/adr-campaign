<?php
/**
 * Created by JetBrains PhpStorm.
 * User: keshav
 * Date: 31/8/13
 * Time: 2:09 PM
 * To change this template use File | Settings | File Templates.
 */

class TwitterController extends BaseController
{

    public function getTweets()
    {
        //hardcoding tweets
        $tweets = array('Election Commission to follow SC order on Convicted MPs/MLAs in upcoming assembly elections http://zeenews.india.com/news/nation/election-commission-to-follow-supreme-court-s-judgement-cec_873094.html …',
            'Bihar MLAs, MLCs under scanner for faking travel bills- http://articles.timesofindia.indiatimes.com/2013-08-28/india/41537271_1_travel-bills-bihar-mlas-patna-jn …',
            'Haryana Govt. spends 8 Crore every year alone on pensions of former legislators and their widows- http://www.hindustantimes.com/India-news/Haryana/Bring-political-parties-under-ambit-of-transparency/Article1-1112765.aspx …');
        return Response::json($tweets);
    }
}