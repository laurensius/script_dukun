<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agc extends CI_Controller {

	function __construct(){
        parent::__construct();
        require(APPPATH.'middleware/simple_html_dom/simple_html_dom.php');
		$this->array_browser = array (
            "Internet Explorer" => array (
                "Mozilla/5.0 (compatible; MSIE 10.6; Windows NT 6.1; Trident/5.0; InfoPath.2; SLCC1; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; .NET CLR 2.0.50727) 3gpp-gba UNTRUSTED/1.0",
                "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; WOW64; Trident/6.0)",
                "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)",
                "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/5.0)",
                "Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/4.0; InfoPath.2; SV1; .NET CLR 2.0.50727; WOW64)",
                "Mozilla/5.0 (compatible; MSIE 10.0; Macintosh; Intel Mac OS X 10_7_3; Trident/6.0)",
                "Mozilla/4.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/5.0)",
                "Mozilla/1.22 (compatible; MSIE 10.0; Windows 3.1)",
                "Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))",
                "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; InfoPath.3; MS-RTC LM 8; .NET4.0C; .NET4.0E)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; chromeframe/12.0.742.112)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; Tablet PC 2.0; InfoPath.3; .NET4.0C; .NET4.0E)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; yie8)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET CLR 1.1.4322; .NET4.0C; Tablet PC 2.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; FunWebProducts)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/13.0.782.215)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/11.0.696.57)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0) chromeframe/10.0.648.205",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; GTB7.4; InfoPath.1; SV1; .NET CLR 2.8.52393; WOW64; en-US)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; chromeframe/11.0.696.57)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.1.76908; WOW64; en-US)",
                "Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))",
                "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; InfoPath.3; MS-RTC LM 8; .NET4.0C; .NET4.0E)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; chromeframe/12.0.742.112)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; .NET CLR 2.0.50727; Media Center PC 6.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Zune 4.0; Tablet PC 2.0; InfoPath.3; .NET4.0C; .NET4.0E)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Win64; x64; Trident/5.0",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; yie8)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.2; .NET CLR 1.1.4322; .NET4.0C; Tablet PC 2.0)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; FunWebProducts)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/13.0.782.215)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; chromeframe/11.0.696.57)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0) chromeframe/10.0.648.205",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; GTB7.4; InfoPath.1; SV1; .NET CLR 2.8.52393; WOW64; en-US)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; chromeframe/11.0.696.57)",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.1.76908; WOW64; en-US)",
                "Mozilla/5.0 ( ; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; GTB7.4; InfoPath.2; SV1; .NET CLR 4.4.58799; WOW64; en-US)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/4.0; FDM; MSIECrawler; Media Center PC 5.0)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.4.53360; WOW64; en-US)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 5.1; Trident/5.0)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 5.1; Trident/4.0; .NET CLR 2.0.50727; .NET CLR 1.1.4322; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 3.0.4506.2152; .NET CLR 3.5.30729; OfficeLiveConnector.1.4; OfficeLivePatch.1.3; .NET4.0C; .NE",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows 98; .NET CLR 3.0.04506.30)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 7.1; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.3; .NET4.0C)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; .NET4.0E; AskTB5.5)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; InfoPath.2; .NET4.0C; .NET4.0E)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET4.0C; .NET4.0E; InfoPath.3)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Win64; x64; Trident/5.0; .NET CLR 2.0.50727; SLCC2; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; InfoPath.3; .NET4.0C)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET4.0C)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; FDM; .NET CLR 1.1.4322; .NET4.0C; .NET4.0E; Tablet PC 2.0)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; .NET4.0C; Tablet PC 2.0; InfoPath.3; .NET4.0E)",
                "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.0; Trident/5.0; SLCC1; .NET CLR 2.0.50727; Media Center PC 5.0; .NET CLR 3.5.30729; .NET CLR 3.0.30729; FDM; .NET4.0C; .NET4.0E; chromeframe/11.0.696.57)",
                "Mozilla/4.0 (compatible; U; MSIE 9.0; WIndows NT 9.0; en-US)",
                "Mozilla/4.0 (compatible; MSIE 9.0; Windows NT 6.1; Trident/5.0; FunWebProducts)"
            ),
            "Firefox"=>array (
                "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/25.0",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.6; rv:25.0) Gecko/20100101 Firefox/25.0",
                "Mozilla/5.0 (Windows NT 6.0; WOW64; rv:24.0) Gecko/20100101 Firefox/24.0",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:24.0) Gecko/20100101 Firefox/24.0",
                "Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/20130405 Firefox/23.0",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20130406 Firefox/23.0",
                "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:23.0) Gecko/20131011 Firefox/23.0",
                "Mozilla/5.0 (Windows NT 6.2; rv:22.0) Gecko/20130405 Firefox/22.0",
                "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:22.0) Gecko/20130328 Firefox/22.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:22.0) Gecko/20130405 Firefox/22.0",
                "Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/21.0.1",
                "Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/21.0.1",
                "Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:21.0.0) Gecko/20121011 Firefox/21.0.0",
                "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20130331 Firefox/21.0",
                "Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (X11; Linux i686; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/20130326 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130401 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130331 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130330 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130401 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130328 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20130401 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20130331 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 5.1; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 5.0; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10.8; rv:21.0) Gecko/20100101 Firefox/21.0",
                "Mozilla/5.0 (Windows NT 6.2; Win64; x64;) Gecko/20100101 Firefox/20.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/20100101 Firefox/19.0",
                "Mozilla/5.0 (Windows NT 6.1; rv:14.0) Gecko/20100101 Firefox/18.0.1",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:18.0) Gecko/20100101 Firefox/18.0",
                "Mozilla/5.0 (X11; Ubuntu; Linux armv7l; rv:17.0) Gecko/20100101 Firefox/17.0",
                "Mozilla/6.0 (Windows NT 6.2; WOW64; rv:16.0.1) Gecko/20121011 Firefox/16.0.1",
                "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:16.0.1) Gecko/20121011 Firefox/16.0.1",
                "Mozilla/5.0 (Windows NT 6.2; Win64; x64; rv:16.0.1) Gecko/20121011 Firefox/16.0.1",
                "Mozilla/5.0 (Windows NT 6.1; rv:15.0) Gecko/20120716 Firefox/15.0a2",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.1.16) Gecko/20120427 Firefox/15.0a1",
                "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:15.0) Gecko/20120427 Firefox/15.0a1",
                "Mozilla/5.0 (Windows NT 6.2; WOW64; rv:15.0) Gecko/20120910144328 Firefox/15.0.2",
                "Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:15.0) Gecko/20100101 Firefox/15.0.1",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:15.0) Gecko/20121011 Firefox/15.0.1"
            ),
            "Chrome"=>array (
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.17 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.62 Safari/537.36",
                "Mozilla/5.0 (X11; CrOS i686 4319.74.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.57 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/29.0.1547.2 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1468.0 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1467.0 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1464.0 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
                "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_3) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36",
                "Mozilla/5.0 (X11; CrOS i686 3912.101.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.116 Safari/537.36",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.60 Safari/537.17",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1309.0 Safari/537.17",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.15 (KHTML, like Gecko) Chrome/24.0.1295.0 Safari/537.15",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.14 (KHTML, like Gecko) Chrome/24.0.1292.0 Safari/537.14",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_4) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13",
                "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1284.0 Safari/537.13",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.6 Safari/537.11",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.26 Safari/537.11",
                "Mozilla/5.0 (Windows NT 6.0) yi; AppleWebKit/345667.12221 (KHTML, like Gecko) Chrome/23.0.1271.26 Safari/453667.1221",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.17 Safari/537.11",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_0) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.79 Safari/537.4",
                "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.2 (KHTML, like Gecko) Chrome/22.0.1216.0 Safari/537.2",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/22.0.1207.1 Safari/537.1",
                "Mozilla/5.0 (X11; CrOS i686 2268.111.0) AppleWebKit/536.11 (KHTML, like Gecko) Chrome/20.0.1132.57 Safari/536.11",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.6 (KHTML, like Gecko) Chrome/20.0.1092.0 Safari/536.6",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.6 (KHTML, like Gecko) Chrome/20.0.1090.0 Safari/536.6",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/19.77.34.5 Safari/537.1",
                "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.9 Safari/536.5",
                "Mozilla/5.0 (Windows NT 6.0) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.36 Safari/536.5",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
                "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_0) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3",
                "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3",
                "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3",
                "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.0 Safari/536.3",
                "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.24 (KHTML, like Gecko) Chrome/19.0.1055.1 Safari/535.24",
                "Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/535.24 (KHTML, like Gecko) Chrome/19.0.1055.1 Safari/535.24",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_2) AppleWebKit/535.24 (KHTML, like Gecko) Chrome/19.0.1055.1 Safari/535.24",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_3) AppleWebKit/535.22 (KHTML, like Gecko) Chrome/19.0.1047.0 Safari/535.22",
                "Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/535.21 (KHTML, like Gecko) Chrome/19.0.1042.0 Safari/535.21",
                "Mozilla/5.0 (X11; Linux i686) AppleWebKit/535.21 (KHTML, like Gecko) Chrome/19.0.1041.0 Safari/535.21",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_3) AppleWebKit/535.20 (KHTML, like Gecko) Chrome/19.0.1036.7 Safari/535.20",
                "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/535.2 (KHTML, like Gecko) Chrome/18.6.872.0 Safari/535.2 UNTRUSTED/1.0 3gpp-gba UNTRUSTED/1.0",
                "Mozilla/5.0 (Macintosh; AMD Mac OS X 10_8_2) AppleWebKit/535.22 (KHTML, like Gecko) Chrome/18.6.872",
                "Mozilla/5.0 (X11; CrOS i686 1660.57.0) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.46 Safari/535.19",
                "Mozilla/5.0 (Windows NT 6.0; WOW64) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.45 Safari/535.19",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_2) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.45 Safari/535.19",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.45 Safari/535.19"
            ),
            "Safari"=>array(
                "Mozilla/5.0 (iPad; CPU OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A5355d Safari/8536.25",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/537.13+ (KHTML, like Gecko) Version/5.1.7 Safari/534.57.2",
                "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_3) AppleWebKit/534.55.3 (KHTML, like Gecko) Version/5.1.3 Safari/534.53.10",
                "Mozilla/5.0 (iPad; CPU OS 5_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko ) Version/5.1 Mobile/9B176 Safari/7534.48.3",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_8; de-at) AppleWebKit/533.21.1 (KHTML, like Gecko) Version/5.0.5 Safari/533.21.1",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; da-dk) AppleWebKit/533.21.1 (KHTML, like Gecko) Version/5.0.5 Safari/533.21.1",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; tr-TR) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; ko-KR) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; fr-FR) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; cs-CZ) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; ja-JP) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_8; zh-cn) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_8; ja-jp) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; ja-jp) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; zh-cn) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; sv-se) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; ko-kr) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; ja-jp) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; it-it) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; fr-fr) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; es-es) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; en-us) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; en-gb) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; de-de) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.4 Safari/533.20.27",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; sv-SE) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; ja-JP) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; de-DE) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; hu-HU) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; de-DE) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; ru-RU) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; ja-JP) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; it-IT) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/533.20.25 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; en-us) AppleWebKit/534.16+ (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_6; fr-ch) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_5; de-de) AppleWebKit/534.15+ (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_5; ar) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Android 2.2; Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.3 Safari/533.19.4",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; zh-HK) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; tr-TR) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; nb-NO) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; fr-FR) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; zh-TW) AppleWebKit/533.19.4 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (Windows; U; Windows NT 5.1; ru-RU) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; zh-cn) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0.2 Safari/533.18.5",
                "Mozilla/5.0 (iPod; U; CPU iPhone OS 4_3_3 like Mac OS X; ja-jp) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8J2 Safari/6533.18.5",
                "Mozilla/5.0 (iPod; U; CPU iPhone OS 4_3_1 like Mac OS X; zh-cn) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8G4 Safari/6533.18.5",
                "Mozilla/5.0 (iPod; U; CPU iPhone OS 4_2_1 like Mac OS X; he-il) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148 Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; ru; CPU iPhone OS 4_2_1 like Mac OS X; ru) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148a Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; ru; CPU iPhone OS 4_2_1 like Mac OS X; fr) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148a Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; fr; CPU iPhone OS 4_2_1 like Mac OS X; fr) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148a Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3_1 like Mac OS X; zh-tw) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8G4 Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; pl-pl) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8F190 Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; fr-fr) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8F190 Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_3 like Mac OS X; en-gb) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8F190 Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_2_1 like Mac OS X; ru-ru) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148 Safari/6533.18.5",
                "Mozilla/5.0 (iPhone; U; CPU iPhone OS 4_2_1 like Mac OS X; nb-no) AppleWebKit/533.17.9 (KHTML, like Gecko) Version/5.0.2 Mobile/8C148a Safari/6533.18.5",
                "Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/533.17.8 (KHTML, like Gecko) Version/5.0.1 Safari/533.17.8",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_4; th-th) AppleWebKit/533.17.8 (KHTML, like Gecko) Version/5.0.1 Safari/533.17.8",
                "Mozilla/5.0 (X11; U; Linux x86_64; en-us) AppleWebKit/531.2+ (KHTML, like Gecko) Version/5.0 Safari/531.2+",
                "Mozilla/5.0 (X11; U; Linux x86_64; en-ca) AppleWebKit/531.2+ (KHTML, like Gecko) Version/5.0 Safari/531.2+",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; ja-JP) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; es-ES) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/533.18.1 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Windows; U; Windows NT 6.0; ja-JP) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_5_8; ja-jp) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; PPC Mac OS X 10_4_11; fr) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; zh-cn) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ru-ru) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ko-kr) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; it-it) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; HTC-P715a; en-ca) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us) AppleWebKit/534.1+ (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-au) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; el-gr) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ca-es) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; zh-tw) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; ja-jp) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
                "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_5_8; it-it) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16"
            ),
            "Opera"=>array(
                "Opera/9.80 (Windows NT 6.0) Presto/2.12.388 Version/12.14",
                "Mozilla/5.0 (Windows NT 6.0; rv:2.0) Gecko/20100101 Firefox/4.0 Opera 12.14",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14",
                "Opera/12.80 (Windows NT 5.1; U; en) Presto/2.10.289 Version/12.02",
                "Opera/9.80 (Windows NT 6.1; U; es-ES) Presto/2.9.181 Version/12.00",
                "Opera/9.80 (Windows NT 5.1; U; zh-sg) Presto/2.9.181 Version/12.00",
                "Opera/12.0(Windows NT 5.2;U;en)Presto/22.9.168 Version/12.00",
                "Opera/12.0(Windows NT 5.1;U;en)Presto/22.9.168 Version/12.00",
                "Mozilla/5.0 (Windows NT 5.1) Gecko/20100101 Firefox/14.0 Opera/12.0",
                "Opera/9.80 (Windows NT 6.1; WOW64; U; pt) Presto/2.10.229 Version/11.62",
                "Opera/9.80 (Windows NT 6.0; U; pl) Presto/2.10.229 Version/11.62",
                "Opera/9.80 (Macintosh; Intel Mac OS X 10.6.8; U; fr) Presto/2.9.168 Version/11.52",
                "Opera/9.80 (Macintosh; Intel Mac OS X 10.6.8; U; de) Presto/2.9.168 Version/11.52",
                "Opera/9.80 (Windows NT 5.1; U; en) Presto/2.9.168 Version/11.51",
                "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; de) Opera 11.51",
                "Opera/9.80 (X11; Linux x86_64; U; fr) Presto/2.9.168 Version/11.50",
                "Opera/9.80 (X11; Linux i686; U; hu) Presto/2.9.168 Version/11.50",
                "Opera/9.80 (X11; Linux i686; U; ru) Presto/2.8.131 Version/11.11",
                "Opera/9.80 (X11; Linux i686; U; es-ES) Presto/2.8.131 Version/11.11",
                "Mozilla/5.0 (Windows NT 5.1; U; en; rv:1.8.1) Gecko/20061208 Firefox/5.0 Opera 11.11",
                "Opera/9.80 (X11; Linux x86_64; U; bg) Presto/2.8.131 Version/11.10",
                "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.8.99 Version/11.10",
                "Opera/9.80 (Windows NT 5.1; U; zh-tw) Presto/2.8.131 Version/11.10",
                "Opera/9.80 (Windows NT 6.1; Opera Tablet/15165; U; en) Presto/2.8.149 Version/11.1",
                "Opera/9.80 (X11; Linux x86_64; U; Ubuntu/10.10 (maverick); pl) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (X11; Linux i686; U; ja) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (X11; Linux i686; U; fr) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.1; U; sv) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.1; U; en-US) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.1; U; cs) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 6.0; U; pl) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 5.2; U; ru) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 5.1; U;) Presto/2.7.62 Version/11.01",
                "Opera/9.80 (Windows NT 5.1; U; cs) Presto/2.7.62 Version/11.01",
                "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.13) Gecko/20101213 Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.7.62 Version/11.01",
                "Mozilla/5.0 (Windows NT 6.1; U; nl; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.01",
                "Mozilla/5.0 (Windows NT 6.1; U; de; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.01",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; de) Opera 11.01",
                "Opera/9.80 (X11; Linux x86_64; U; pl) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (X11; Linux i686; U; it) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.6.37 Version/11.00",
                "Opera/9.80 (Windows NT 6.1; U; pl) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.1; U; ko) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.1; U; fi) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.1; U; en-GB) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.1 x64; U; en) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.7.39 Version/11.00",
                "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.7.39 Version/11.00",
                "Opera/9.80 (Windows NT 5.1; U; MRA 5.5 (build 02842); ru) Presto/2.7.62 Version/11.00",
                "Opera/9.80 (Windows NT 5.1; U; it) Presto/2.7.62 Version/11.00",
                "Mozilla/5.0 (Windows NT 6.0; U; ja; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.00",
                "Mozilla/5.0 (Windows NT 5.1; U; pl; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.00",
                "Mozilla/5.0 (Windows NT 5.1; U; de; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 11.00",
                "Mozilla/4.0 (compatible; MSIE 8.0; X11; Linux x86_64; pl) Opera 11.00",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; fr) Opera 11.00",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; ja) Opera 11.00",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0; en) Opera 11.00",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; pl) Opera 11.00",
                "Opera/9.80 (Windows NT 6.1; U; pl) Presto/2.6.31 Version/10.70",
                "Mozilla/5.0 (Windows NT 5.2; U; ru; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.70",
                "Mozilla/5.0 (Windows NT 5.1; U; zh-cn; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.70",
                "Opera/9.80 (Windows NT 5.2; U; zh-cn) Presto/2.6.30 Version/10.63",
                "Opera/9.80 (Windows NT 5.2; U; en) Presto/2.6.30 Version/10.63",
                "Opera/9.80 (Windows NT 5.1; U; MRA 5.6 (build 03278); ru) Presto/2.6.30 Version/10.63",
                "Opera/9.80 (Windows NT 5.1; U; pl) Presto/2.6.30 Version/10.62",
                "Mozilla/5.0 (X11; Linux x86_64; U; de; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.62",
                "Mozilla/4.0 (compatible; MSIE 8.0; X11; Linux x86_64; de) Opera 10.62",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; en) Opera 10.62",
                "Opera/9.80 (X11; Linux i686; U; pl) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (X11; Linux i686; U; es-ES) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Windows NT 6.0; U; it) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Windows NT 5.2; U; ru) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Windows 98; U; de) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (Macintosh; Intel Mac OS X; U; nl) Presto/2.6.30 Version/10.61",
                "Opera/9.80 (X11; Linux i686; U; en) Presto/2.5.27 Version/10.60",
                "Opera/9.80 (Windows NT 6.0; U; nl) Presto/2.6.30 Version/10.60",
                "Opera/10.60 (Windows NT 5.1; U; zh-cn) Presto/2.6.30 Version/10.60",
                "Opera/10.60 (Windows NT 5.1; U; en-US) Presto/2.6.30 Version/10.60",
                "Opera/9.80 (X11; Linux i686; U; it) Presto/2.5.24 Version/10.54",
                "Opera/9.80 (X11; Linux i686; U; en-GB) Presto/2.5.24 Version/10.53",
                "Mozilla/5.0 (Windows NT 5.1; U; zh-cn; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
                "Mozilla/5.0 (Windows NT 5.1; U; Firefox/5.0; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
                "Mozilla/5.0 (Windows NT 5.1; U; Firefox/4.5; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
                "Mozilla/5.0 (Windows NT 5.1; U; Firefox/3.5; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.53",
                "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; ko) Opera 10.53",
                "Opera/9.80 (Windows NT 6.1; U; fr) Presto/2.5.24 Version/10.52",
                "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.5.22 Version/10.51",
                "Opera/9.80 (Windows NT 6.0; U; cs) Presto/2.5.22 Version/10.51",
                "Opera/9.80 (Windows NT 5.2; U; ru) Presto/2.5.22 Version/10.51",
                "Opera/9.80 (Linux i686; U; en) Presto/2.5.22 Version/10.51",
                "Mozilla/5.0 (Windows NT 6.1; U; en-GB; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.51",
                "Mozilla/5.0 (Linux i686; U; en; rv:1.9.1.6) Gecko/20091201 Firefox/3.5.6 Opera 10.51",
                "Mozilla/4.0 (compatible; MSIE 8.0; Linux i686; en) Opera 10.51",
                "Opera/9.80 (Windows NT 6.1; U; zh-tw) Presto/2.5.22 Version/10.50",
                "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.5.22 Version/10.50",
                "Opera/9.80 (Windows NT 6.1; U; sk) Presto/2.6.22 Version/10.50",
                "Opera/9.80 (Windows NT 6.1; U; ja) Presto/2.5.22 Version/10.50",
                "Opera/9.80 (Windows NT 6.0; U; zh-cn) Presto/2.5.22 Version/10.50",
                "Opera/9.80 (Windows NT 5.1; U; sk) Presto/2.5.22 Version/10.50",
                "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.5.22 Version/10.50",
                "Opera/10.50 (Windows NT 6.1; U; en-GB) Presto/2.2.2",
                "Opera/9.80 (S60; SymbOS; Opera Tablet/9174; U; en) Presto/2.7.81 Version/10.5",
                "Opera/9.80 (X11; U; Linux i686; en-US; rv:1.9.2.3) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (X11; Linux x86_64; U; it) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (Windows NT 6.1; U; de) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (Windows NT 6.0; U; Gecko/20100115; pl) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (Windows NT 5.1; U; de) Presto/2.2.15 Version/10.10",
                "Opera/9.80 (Windows NT 5.1; U; cs) Presto/2.2.15 Version/10.10",
                "Mozilla/5.0 (Windows NT 6.0; U; tr; rv:1.8.1) Gecko/20061208 Firefox/2.0.0 Opera 10.10",
                "Mozilla/4.0 (compatible; MSIE 6.0; X11; Linux i686; de) Opera 10.10",
                "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 6.0; tr) Opera 10.10",
                "Opera/9.80 (X11; Linux x86_64; U; en-GB) Presto/2.2.15 Version/10.01",
                "Opera/9.80 (X11; Linux x86_64; U; en) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux x86_64; U; de) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; ru) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; pt-BR) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; pl) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; nb) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; en-GB) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; en) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; Debian; pl) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (X11; Linux i686; U; de) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.1; U; fi) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.1; U; de) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.1; U; cs) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.0; U; en) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 6.0; U; de) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 5.2; U; en) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 5.1; U; zh-cn) Presto/2.2.15 Version/10.00",
                "Opera/9.80 (Windows NT 5.1; U; ru) Presto/2.2.15 Version/10.00"
            )
        );
        
        $this->google_article = "https://www.google.com/search?q=";
        $this->ask_article = "https://www.ask.com/web?q=";
        $this->bing_article = "https://www.bing.com/search?q=";
        $this->yahoo_article = "https://us.search.yahoo.com/search?p=";
        $this->google_image = "https://www.google.com/search?q=";
        $this->ask_image = "https://www.ask.com/web?q=";
        $this->bing_image = "http://www.bing.com/images/search?q=";
        $this->yahoo_image = "https://images.search.yahoo.com/search/images?p=";

        $this->load->model('mod_cron');
        $this->load->model('mod_user');
        $this->load->model('mod_keyword');
        $this->load->model('mod_badword');
        $this->load->model('mod_post');
        
        $this->badwords = $this->mod_badword->get_badword();
    }

	public function index(){
        
    }

    public function install(){
        $qty_post_init = 30000 ;
        $hasil_random = rand(strtotime("2017-01-01 00:00:00"), strtotime("2017-12-31 00:00:00"));
        $tanggal_hasil = date('Y-m-d H:i:s', $hasil_random);  
        echo "Tanggal hasil random " . $tanggal_hasil . "<br>";
        $sekarang = time(); 
        $raw_selisih_hari = $sekarang - strtotime($tanggal_hasil);
        $selisih_hari = round($raw_selisih_hari / (60 * 60 * 24));  
        echo "Selisih hari dengan hari ini " . $selisih_hari . "<br>";
        $posts_per_hari =  round($qty_post_init / $selisih_hari);    
        echo "Estimasi post per hari " . $posts_per_hari . "<br>";

        $ctr_harian = 0;
        for($ctr=0;$ctr<$qty_post_init;$ctr++){
            if($ctr_harian == $posts_per_hari){
                $ctr_harian = 0;
                $tanggal_hasil = date("Y-m-d H:i:s", strtotime("+1 day", strtotime($tanggal_hasil)));
            }
            echo $ctr . " - Tanggal hasil random " . $tanggal_hasil . "<br>";
            $user = $this->random_user();
            $the_last = $this->mod_post->get_the_last();
            $load_recent_keyword = $this->mod_cron->get_recent_keyword();
            $current_keyword_id = $load_recent_keyword[0]->cron_recent_keyword + 1;
            $hasil_cek = false;
            $current_keyword_string = null;
            while($hasil_cek != true){
                $data_where = array("id" => $current_keyword_id);
                $result = $this->mod_keyword->get_keyword_by_id($data_where);
                if(sizeof($result ) > 0){
                    if(sizeof($result) > 0){
                        $current_keyword_string = $result[0]->keyword;
                        $current_keyword_string = $this->clear_from_badword($current_keyword_string);
                        $current_keyword_string = $this->clear_escape_character($current_keyword_string);
                        if($current_keyword_string != "" || $current_keyword_string != null ){
                            $hasil_cek = true;
                        }else{
                            $hasil_cek = false;
                            $current_keyword_id++; 
                        }
                    }else{
                        $hasil_cek = false;
                        $current_keyword_id++;
                    }
                }
            } 
            $oxen99_result = $this->execute_oxen99(strtolower($current_keyword_string));
            
            $post_author = $user;
            $post_date = $tanggal_hasil;
            $post_date_gmt = $tanggal_hasil;
            $post_content = "";
            $post_title = ucwords($current_keyword_string);
            $post_status = "publish";
            $comment_status = "open";
            $ping_status = "open";
            $post_name = str_replace(' ','-',strtolower($current_keyword_string)); 
            $post_modified = $tanggal_hasil;
            $post_modified_gmt = $tanggal_hasil;
            $post_parent = "0";
            $menu_order = "0";
            $post_type = "post";
            $comment_count = "0";

            $cron_recent_keyword = $current_keyword_id;
            $cron_datetime = date("Y-m-d H:i:s");
            $cron_result = "";

            $jml_keyword_baru = 0;
            $jml_image_hasil_grab = 0;
            $thumbnail_selected = false;

            if(sizeof($oxen99_result["article"]["google"]) > 0 ){
                for($x=0;$x<sizeof($oxen99_result["article"]["google"]);$x++){
                    $keyword_baru = $oxen99_result["article"]["google"][$x]["judul"];
                    $keyword_baru = str_replace(".","",$keyword_baru);
                    // $this->insert_keyword(
                    //     array(
                    //         "keyword" => strtolower($keyword_baru)
                    //     ));
                    $post_content .= ucfirst($oxen99_result["article"]["google"][$x]["konten"]);
                    $jml_keyword_baru++;
                }

            }

            if(sizeof($oxen99_result["article"]["ask"]) > 0 ){
                for($x=0;$x<sizeof($oxen99_result["article"]["ask"]);$x++){
                    $keyword_baru = $oxen99_result["article"]["ask"][$x]["judul"];
                    $keyword_baru = str_replace(".","",$keyword_baru);
                    // $this->insert_keyword(
                    //     array(
                    //         "keyword" => strtolower($keyword_baru)
                    //     ));
                    $jml_keyword_baru++;
                }
            }

            if(sizeof($oxen99_result["article"]["bing"]) > 0 ){
                for($x=0;$x<sizeof($oxen99_result["article"]["bing"]);$x++){
                    $keyword_baru = $oxen99_result["article"]["bing"][$x]["judul"];
                    $keyword_baru = str_replace(".","",$keyword_baru);
                    // $this->insert_keyword(
                    //     array(
                    //         "keyword" => strtolower($keyword_baru)
                    //     ));
                    $jml_keyword_baru++;
                }
            }

            if(sizeof($oxen99_result["article"]["yahoo"]) > 0 ){
                for($x=0;$x<sizeof($oxen99_result["article"]["yahoo"]);$x++){
                    $keyword_baru = $oxen99_result["article"]["yahoo"][$x]["judul"];
                    $keyword_baru = str_replace(".","",$keyword_baru);
                    // $this->insert_keyword(
                    //     array(
                    //         "keyword" => strtolower($keyword_baru)
                    //     ));
                    $jml_keyword_baru++;
                }
            }

            if(sizeof($oxen99_result["image"]["google_image"]) > 0 ){
                for($x=0;$x<sizeof($oxen99_result["image"]["google_image"]);$x++){
                    if (strpos($oxen99_result["image"]["google_image"][$x]["imgsrc"], 'http') !== false) {
                        $src = $oxen99_result["image"]["google_image"][$x]["imgsrc"];
                    }else{
                        $src = "http://".$oxen99_result["image"]["google_image"][$x]["imgsrc"];
                    }

                    if (strpos($src, 'pixabay') !== false) {
                        $post_content .= '';
                    }else{
                        if($jml_image_hasil_grab < 20){
                            $post_content .= '<img src="'.$src.'">';
                            $jml_image_hasil_grab++;    
                            if($thumbnail_selected != true){
                                $data_thumbnail = array(
                                    array(
                                        "post_id" => $the_last[0]->ID + 1,
                                        "meta_key" => "fifu_image_url",
                                        "meta_value" => $src
                                    ),
                                    array(
                                        "post_id" => $the_last[0]->ID + 1,
                                        "meta_key" => "fifu_image_alt",
                                        "meta_value" => ucwords($current_keyword_string)
                                    )
                                );
                                $thumbnail_selected = true;
                            }
                        }else{
                            break;
                        }
                    } 
                }
            }

            if(sizeof($oxen99_result["image"]["bing_image"]) > 0 ){
                for($x=0;$x<sizeof($oxen99_result["image"]["bing_image"]);$x++){
                    if (strpos($oxen99_result["image"]["bing_image"][$x]["imgsrc"], 'http') !== false) {
                        $src = $oxen99_result["image"]["bing_image"][$x]["imgsrc"];
                    }else{
                        $src = "http://".$oxen99_result["image"]["bing_image"][$x]["imgsrc"];
                    }  
                    
                    if (strpos($src, 'pixabay') !== false) {
                        $post_content .= '';
                    }else{
                        if($jml_image_hasil_grab < 20){
                            $post_content .= '<img src="'.$src.'">';
                            $jml_image_hasil_grab++; 
                            if($thumbnail_selected != true){
                                $data_thumbnail = array(
                                    array(
                                        "post_id" => $the_last[0]->ID + 1,
                                        "meta_key" => "fifu_image_url",
                                        "meta_value" => $src
                                    ),
                                    array(
                                        "post_id" => $the_last[0]->ID + 1,
                                        "meta_key" => "fifu_image_alt",
                                        "meta_value" => ucwords($current_keyword_string)
                                    )
                                );
                                $thumbnail_selected = true;
                            }   
                        }else{
                            break;
                        }
                    } 
                }
            }

            if(sizeof($oxen99_result["image"]["yahoo_image"]) > 0 ){
                for($x=0;$x<sizeof($oxen99_result["image"]["yahoo_image"]);$x++){
                    if (strpos($oxen99_result["image"]["yahoo_image"][$x]["imgsrc"], 'http') !== false) {
                        $src = $oxen99_result["image"]["yahoo_image"][$x]["imgsrc"];
                    }else{
                        $src = "http://".$oxen99_result["image"]["yahoo_image"][$x]["imgsrc"];
                    }

                    if (strpos($src, 'pixabay') !== false) {
                        $post_content .= '';
                    }else{
                        if($jml_image_hasil_grab < 20){
                            $post_content .= '<img src="'.$src.'">';
                            $jml_image_hasil_grab++;  
                            if($thumbnail_selected != true){
                                $data_thumbnail = array(
                                    array(
                                        "post_id" => $the_last[0]->ID + 1,
                                        "meta_key" => "fifu_image_url",
                                        "meta_value" => $src
                                    ),
                                    array(
                                        "post_id" => $the_last[0]->ID + 1,
                                        "meta_key" => "fifu_image_alt",
                                        "meta_value" => ucwords($current_keyword_string)
                                    )
                                );
                                $thumbnail_selected = true;
                            }
                        }else{
                            break;
                        }
                    } 
                }
            }

            $cron_result = $jml_keyword_baru . " keyword baru dan " . $jml_image_hasil_grab . " image hasil grabbing.";


            $this->insert_post(
                array(
                    "post_author" => $post_author,
                    "post_date" => $post_date,
                    "post_date_gmt" => $post_date_gmt,
                    "post_content" => $post_content,
                    "post_title" => $post_title,
                    "post_status" => $post_status,
                    "comment_status" => $comment_status,
                    "ping_status" => $ping_status,
                    "post_name" => $post_name, 
                    "post_modified" => $post_modified,
                    "post_modified_gmt" => $post_modified_gmt,
                    "post_parent" => $post_parent,
                    "menu_order" => $menu_order,
                    "post_type" => $post_type,
                    "comment_count" => $comment_count
                )
            );

            $this->insert_cron(
                array(
                    "cron_recent_keyword" => $cron_recent_keyword,
                    "cron_datetime" => $cron_datetime,
                    "cron_result" => $cron_result
                )
            );

            if($data_thumbnail == true){
                $this->insert_thumbnail($data_thumbnail);
            } 

            $ctr_harian ++;
        }
        
        
    }
    
    public function cronjob(){
        $user = $this->random_user();
        $the_last = $this->mod_post->get_the_last();
        $load_recent_keyword = $this->mod_cron->get_recent_keyword();
        $current_keyword_id = $load_recent_keyword[0]->cron_recent_keyword + 1;
        $hasil_cek = false;
        $current_keyword_string = null;
        while($hasil_cek != true){
            $data_where = array("id" => $current_keyword_id);
            $result = $this->mod_keyword->get_keyword_by_id($data_where);
            if(sizeof($result ) > 0){
                if(sizeof($result) > 0){
                    $current_keyword_string = $result[0]->keyword;
                    $current_keyword_string = $this->clear_from_badword($current_keyword_string);
                    $current_keyword_string = $this->clear_escape_character($current_keyword_string);
                    if($current_keyword_string != "" || $current_keyword_string != null ){
                        $hasil_cek = true;
                    }else{
                        $hasil_cek = false;
                        $current_keyword_id++; 
                    }
                }else{
                    $hasil_cek = false;
                    $current_keyword_id++;
                }
            }
        } 
        $oxen99_result = $this->execute_oxen99(strtolower($current_keyword_string));
        
        $post_author = $user;
        $post_date = date("Y-m-d H:i:s");
        $post_date_gmt = date("Y-m-d H:i:s");
        $post_content = "";
        $post_title = ucwords($current_keyword_string);
        $post_status = "publish";
        $comment_status = "open";
        $ping_status = "open";
        $post_name = str_replace(' ','-',strtolower($current_keyword_string)); 
        $post_modified = date("Y-m-d H:i:s");
        $post_modified_gmt = date("Y-m-d H:i:s");
        $post_parent = "0";
        $menu_order = "0";
        $post_type = "post";
        $comment_count = "0";

        $cron_recent_keyword = $current_keyword_id;
        $cron_datetime = date("Y-m-d H:i:s");
        $cron_result = "";

        $jml_keyword_baru = 0;
        $jml_image_hasil_grab = 0;
        $thumbnail_selected = false;

        if(sizeof($oxen99_result["article"]["google"]) > 0 ){
            for($x=0;$x<sizeof($oxen99_result["article"]["google"]);$x++){
                $keyword_baru = $oxen99_result["article"]["google"][$x]["judul"];
                $keyword_baru = str_replace(".","",$keyword_baru);
                $this->insert_keyword(
                    array(
                        "keyword" => strtolower($keyword_baru)
                    ));
                $post_content .= ucfirst($oxen99_result["article"]["google"][$x]["konten"]);
                $jml_keyword_baru++;
            }

        }

        if(sizeof($oxen99_result["article"]["ask"]) > 0 ){
            for($x=0;$x<sizeof($oxen99_result["article"]["ask"]);$x++){
                $keyword_baru = $oxen99_result["article"]["ask"][$x]["judul"];
                $keyword_baru = str_replace(".","",$keyword_baru);
                $this->insert_keyword(
                    array(
                        "keyword" => strtolower($keyword_baru)
                    ));
                $jml_keyword_baru++;
            }
        }

        if(sizeof($oxen99_result["article"]["bing"]) > 0 ){
            for($x=0;$x<sizeof($oxen99_result["article"]["bing"]);$x++){
                $keyword_baru = $oxen99_result["article"]["bing"][$x]["judul"];
                $keyword_baru = str_replace(".","",$keyword_baru);
                $this->insert_keyword(
                    array(
                        "keyword" => strtolower($keyword_baru)
                    ));
                $jml_keyword_baru++;
            }
        }

        if(sizeof($oxen99_result["article"]["yahoo"]) > 0 ){
            for($x=0;$x<sizeof($oxen99_result["article"]["yahoo"]);$x++){
                $keyword_baru = $oxen99_result["article"]["yahoo"][$x]["judul"];
                $keyword_baru = str_replace(".","",$keyword_baru);
                $this->insert_keyword(
                    array(
                        "keyword" => strtolower($keyword_baru)
                    ));
                $jml_keyword_baru++;
            }
        }

        if(sizeof($oxen99_result["image"]["google_image"]) > 0 ){
            for($x=0;$x<sizeof($oxen99_result["image"]["google_image"]);$x++){
                if (strpos($oxen99_result["image"]["google_image"][$x]["imgsrc"], 'http') !== false) {
                    $src = $oxen99_result["image"]["google_image"][$x]["imgsrc"];
                }else{
                    $src = "http://".$oxen99_result["image"]["google_image"][$x]["imgsrc"];
                }

                if (strpos($src, 'pixabay') !== false) {
                    $post_content .= '';
                }else{
                    if($jml_image_hasil_grab < 20){
                        $post_content .= '<img src="'.$src.'">';
                        $jml_image_hasil_grab++;    
                        if($thumbnail_selected != true){
                            $data_thumbnail = array(
                                array(
                                    "post_id" => $the_last[0]->ID + 1,
                                    "meta_key" => "fifu_image_url",
                                    "meta_value" => $src
                                ),
                                array(
                                    "post_id" => $the_last[0]->ID + 1,
                                    "meta_key" => "fifu_image_alt",
                                    "meta_value" => ucwords($current_keyword_string)
                                )
                            );
                            $thumbnail_selected = true;
                        }
                    }else{
                        break;
                    }
                } 
            }
        }

        if(sizeof($oxen99_result["image"]["bing_image"]) > 0 ){
            for($x=0;$x<sizeof($oxen99_result["image"]["bing_image"]);$x++){
                if (strpos($oxen99_result["image"]["bing_image"][$x]["imgsrc"], 'http') !== false) {
                    $src = $oxen99_result["image"]["bing_image"][$x]["imgsrc"];
                }else{
                    $src = "http://".$oxen99_result["image"]["bing_image"][$x]["imgsrc"];
                }  
                
                if (strpos($src, 'pixabay') !== false) {
                    $post_content .= '';
                }else{
                    if($jml_image_hasil_grab < 20){
                        $post_content .= '<img src="'.$src.'">';
                        $jml_image_hasil_grab++; 
                        if($thumbnail_selected != true){
                            $data_thumbnail = array(
                                array(
                                    "post_id" => $the_last[0]->ID + 1,
                                    "meta_key" => "fifu_image_url",
                                    "meta_value" => $src
                                ),
                                array(
                                    "post_id" => $the_last[0]->ID + 1,
                                    "meta_key" => "fifu_image_alt",
                                    "meta_value" => ucwords($current_keyword_string)
                                )
                            );
                            $thumbnail_selected = true;
                        }   
                    }else{
                        break;
                    }
                } 
            }
        }

        if(sizeof($oxen99_result["image"]["yahoo_image"]) > 0 ){
            for($x=0;$x<sizeof($oxen99_result["image"]["yahoo_image"]);$x++){
                if (strpos($oxen99_result["image"]["yahoo_image"][$x]["imgsrc"], 'http') !== false) {
                    $src = $oxen99_result["image"]["yahoo_image"][$x]["imgsrc"];
                }else{
                    $src = "http://".$oxen99_result["image"]["yahoo_image"][$x]["imgsrc"];
                }

                if (strpos($src, 'pixabay') !== false) {
                    $post_content .= '';
                }else{
                    if($jml_image_hasil_grab < 20){
                        $post_content .= '<img src="'.$src.'">';
                        $jml_image_hasil_grab++;  
                        if($thumbnail_selected != true){
                            $data_thumbnail = array(
                                array(
                                    "post_id" => $the_last[0]->ID + 1,
                                    "meta_key" => "fifu_image_url",
                                    "meta_value" => $src
                                ),
                                array(
                                    "post_id" => $the_last[0]->ID + 1,
                                    "meta_key" => "fifu_image_alt",
                                    "meta_value" => ucwords($current_keyword_string)
                                )
                            );
                            $thumbnail_selected = true;
                        }
                    }else{
                        break;
                    }
                } 
            }
        }

        $cron_result = $jml_keyword_baru . " keyword baru dan " . $jml_image_hasil_grab . " image hasil grabbing.";


        $this->insert_post(
            array(
                "post_author" => $post_author,
                "post_date" => $post_date,
                "post_date_gmt" => $post_date_gmt,
                "post_content" => $post_content,
                "post_title" => $post_title,
                "post_status" => $post_status,
                "comment_status" => $comment_status,
                "ping_status" => $ping_status,
                "post_name" => $post_name, 
                "post_modified" => $post_modified,
                "post_modified_gmt" => $post_modified_gmt,
                "post_parent" => $post_parent,
                "menu_order" => $menu_order,
                "post_type" => $post_type,
                "comment_count" => $comment_count
            )
        );

        $this->insert_cron(
            array(
                "cron_recent_keyword" => $cron_recent_keyword,
                "cron_datetime" => $cron_datetime,
                "cron_result" => $cron_result
            )
        );

        if($data_thumbnail == true){
            $this->insert_thumbnail($data_thumbnail);
        } 
    }

	public function execute_oxen99($clean_query_string){
        $hasil_google = $this->grabbing_google_article($clean_query_string);
        $hasil_ask = $this->grabbing_ask_article($clean_query_string);
        $hasil_bing = $this->grabbing_bing_article($clean_query_string);
        $hasil_yahoo = $this->grabbing_yahoo_article($clean_query_string);
        
        $response_article = array(
            "google" => $hasil_google,
            "ask" => $hasil_ask,
            "bing" => $hasil_bing,
            "yahoo" => $hasil_yahoo,
        );
        $hasil_google_image = $this->grabbing_google_image($clean_query_string);
        $hasil_bing_image = $this->grabbing_bing_image($clean_query_string);
        $hasil_yahoo_image = $this->grabbing_yahoo_image($clean_query_string);
            
        $response_image = array(
            "google_image" => $hasil_google_image,
            "yahoo_image" => $hasil_yahoo_image,
            "bing_image" => $hasil_bing_image
        );

        $response = array(
            "article" => $response_article,
            "image" => $response_image,
        );
        return $response;
    }

    function random_user(){
        $users = $this->mod_user->get_user();
        $rnd = rand(0,sizeof($users) - 1);
        return $users[$rnd]->ID;
    }

	function random_agent(){ 
		$random_jenis = rand( 0 , sizeof($this->array_browser) - 1 );
		$x = 0;
		foreach($this->array_browser as $key => $value) {
			$selected_browser = $key;
			if ($x == $random_jenis) break;
			$x++;
		}
		$random_agent = rand(0, sizeof($this->array_browser[$selected_browser]) -1 );
		return $this->array_browser[$selected_browser][$random_agent];
    }

	function clear_from_badword($string){
        foreach($this->badwords as $word){
            if (strpos($string, $word->badword) !== false) {
                $string = str_replace($word->badword,"",$string);
            }
        }
		return $string;
	}

    function clear_escape_character($raw_string){
        $raw_string = trim($raw_string);
        $arr_cari = array("|","<br>","<b>","</b>","<em>","</em>","<strong>","</strong>",'<span cl="r">','<span cl="f">','<span cl="news_dt">',"</span>" ," -", "\\");
        $raw_string = str_ireplace($arr_cari," ",$raw_string);
        $raw_string = preg_replace( '/<(span).*?class="\s*(?:.*\s)?f(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '', $raw_string );
        $raw_string = preg_replace('/(\d+) (\w+) (\d+)/i', '', $raw_string);
        $raw_string = preg_replace('/(\w+) (\d+), (\d+)/i', '', $raw_string);
        $raw_string = preg_replace('/(\d+) (\w+) (\d+)/i', '', $raw_string);
        $raw_string = preg_replace('/(\w+) (\d+), (\d+)/i', '', $raw_string);
        $raw_string = preg_replace('/[0-9]+/', '', $raw_string);
        $raw_string = preg_replace("/[áàâãªä]/u","a",$raw_string);
        $raw_string = preg_replace("/[ÁÀÂÃÄ]/u","A",$raw_string);
        $raw_string = preg_replace("/[ÍÌÎÏ]/u","I",$raw_string);
        $raw_string = preg_replace("/[íìîï]/u","i",$raw_string);
        $raw_string = preg_replace("/[éèêë]/u","e",$raw_string);
        $raw_string = preg_replace("/[ÉÈÊË]/u","E",$raw_string);
        $raw_string = preg_replace("/[óòôõºö]/u","o",$raw_string);
        $raw_string = preg_replace("/[ÓÒÔÕÖ]/u","O",$raw_string);
        $raw_string = preg_replace("/[úùûü]/u","u",$raw_string);
        $raw_string = preg_replace("/[ÚÙÛÜ]/u","U",$raw_string);
        $raw_string = preg_replace("/[’‘‹›‚]/u","'",$raw_string);
        $raw_string = preg_replace("/[“”«»„]/u",'"',$raw_string);
        $raw_string = str_replace("–","-",$raw_string);
        $raw_string = str_replace(" "," ",$raw_string);
        $raw_string = str_replace("ç","c",$raw_string);
        $raw_string = str_replace("Ç","C",$raw_string);
        $raw_string = str_replace("ñ","n",$raw_string);
        $raw_string = str_replace("Ñ","N",$raw_string);
        $trans = get_html_translation_table(HTML_ENTITIES); 
        $trans[chr(130)] = '&sbquo;';    // Single Low-9 Quotation Mark 
        $trans[chr(131)] = '&fnof;';    // Latin Small Letter F With Hook 
        $trans[chr(132)] = '&bdquo;';    // Double Low-9 Quotation Mark 
        $trans[chr(133)] = '&hellip;';    // Horizontal Ellipsis 
        $trans[chr(134)] = '&dagger;';    // Dagger 
        $trans[chr(135)] = '&Dagger;';    // Double Dagger 
        $trans[chr(136)] = '&circ;';    // Modifier Letter Circumflex Accent 
        $trans[chr(137)] = '&permil;';    // Per Mille Sign 
        $trans[chr(138)] = '&Scaron;';    // Latin Capital Letter S With Caron 
        $trans[chr(139)] = '&lsaquo;';    // Single Left-Pointing Angle Quotation Mark 
        $trans[chr(140)] = '&OElig;';    // Latin Capital Ligature OE 
        $trans[chr(145)] = '&lsquo;';    // Left Single Quotation Mark 
        $trans[chr(146)] = '&rsquo;';    // Right Single Quotation Mark 
        $trans[chr(147)] = '&ldquo;';    // Left Double Quotation Mark 
        $trans[chr(148)] = '&rdquo;';    // Right Double Quotation Mark 
        $trans[chr(149)] = '&bull;';    // Bullet 
        $trans[chr(150)] = '&ndash;';    // En Dash 
        $trans[chr(151)] = '&mdash;';    // Em Dash 
        $trans[chr(152)] = '&tilde;';    // Small Tilde 
        $trans[chr(153)] = '&trade;';    // Trade Mark Sign 
        $trans[chr(154)] = '&scaron;';    // Latin Small Letter S With Caron 
        $trans[chr(155)] = '&rsaquo;';    // Single Right-Pointing Angle Quotation Mark 
        $trans[chr(156)] = '&oelig;';    // Latin Small Ligature OE 
        $trans[chr(159)] = '&Yuml;';    // Latin Capital Letter Y With Diaeresis 
        $trans['euro'] = '&euro;';    // euro currency symbol 
        ksort($trans); 
        
        foreach ($trans as $k => $v) {
            $raw_string = str_replace($v, $k, $raw_string);
        }
        $raw_string = preg_replace('/[^(\x20-\x7F)]*/','', $raw_string); 
        $raw_string = str_replace('#39;', '\'', $raw_string);
        $targets=array('\r\n','\n','\r','\t');
        $results=array(" "," "," ","");
        $raw_string =str_replace($targets,$results,$raw_string);
        $remove_this = array(' ....',' ...',' ..', '....','...','..', '.... ','... ','.. ','Read more', 'Show less', '%', ')', '&','-. -', '(', '/', '#',';','-',':','+','\'');
        $raw_string = str_replace($remove_this, ' ', $raw_string);
        return trim($raw_string);
    }

	function do_curl($url){
		if($url != null){
			$user_agent = $this->random_agent();
            $curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			$header[0] = "Accept: text/xml,application/xml,application/xhtml+xml,";
			$header[0] .= "text/html;q=0.9,text/plain;q=0.8,image/png,*/*;q=0.5";
			$header[] = "Cache-Control: max-age=0";
			$header[] = "Connection: keep-alive";
			$header[] = "Keep-Alive: 30000";
			$header[] = "Accept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
			$header[] = "Accept-Language: en-us,en;q=0.5";
			$header[] = "Pragma: ";
			curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_TIMEOUT, 45);
			curl_setopt($curl, CURLOPT_FRESH_CONNECT, TRUE);
			curl_setopt($curl, CURLOPT_USERAGENT, $user_agent);
			$output = curl_exec($curl);
			curl_close($curl);
			return $output;
		}else{
			return null;
		}
	}

    // --------------------------- GRABBING ARTIKEL DAR 4 SE TERKEMUK---------------------------------
	function grabbing_google_article($clean_query_string){
        $param = str_replace(' ','+',$clean_query_string);
		$url = $this->google_article . $param;
		$hasil_curl = $this->do_curl($url);
        $html = new simple_html_dom();
        $html->load($hasil_curl);
		if($html && is_object($html)){
            $result = array();
			foreach($html->find('div.g') as $g){
                $item['judul'] = isset($g->find('h3.r a', 0)->innertext) ? $g->find('h3.r a', 0)->innertext : '';
                $item['konten'] = isset($g->find('span.st', 0)->innertext) ? $g->find('span.st', 0)->innertext : '';
                $item['judul'] = $this->clear_from_badword($item['judul']);
                $item['konten'] = $this->clear_from_badword($item['konten']);
                $item['judul'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['judul'])));
                $item['konten'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['konten'])));
                if($item['judul'] != "" && $item['konten'] != "")
				$result[] =  $item;
			}
			$html->clear();
			unset($html);
            if($result != null){
                return $result;
            }else{
                $result = array(
                    "judul" => "",
                    "konten" => ""
                );
                return array($result);
            }
		}else{
			$result = array(
                "judul" => "",
                "konten" => ""
            );
            return array($result);
        }
    }
    
    function grabbing_ask_article($clean_query_string){
        $param = str_replace(' ','+',$clean_query_string);
        $url = $this->ask_article . $param;
        $hasil_curl = $this->do_curl($url);
		$html = new simple_html_dom();
        $html->load($hasil_curl);
		if($html && is_object($html)){
            $result = array();
			foreach($html->find('div.PartialSearchResults-item') as $g){
				$item['judul'] = isset($g->find('div.PartialSearchResults-item-title a', 0)->innertext) ? $g->find('div.PartialSearchResults-item-title a', 0)->innertext : '';
                $item['konten'] = isset($g->find('p.PartialSearchResults-item-abstract', 0)->innertext) ? $g->find('p.PartialSearchResults-item-abstract', 0)->innertext : '';
                $item['judul'] = $this->clear_from_badword($item['judul']);
                $item['konten'] = $this->clear_from_badword($item['konten']);
                $item['judul'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['judul'])));
                $item['konten'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['konten'])));
                if($item['judul'] != "" && $item['konten'] != "")
				$result[] =  $item;
			}
			$html->clear();
			unset($html);
            if($result != null){
                return $result;
            }else{
                $result = array(
                    "judul" => "",
                    "konten" => ""
                );
                return array($result);
            }
		}else{
			$result = array(
                "judul" => "",
                "konten" => ""
            );
            return array($result);
        }
    }
    
    function grabbing_bing_article($clean_query_string){
        $param = str_replace(' ','+',$clean_query_string);
        $url = $this->bing_article . $param;
        $hasil_curl = $this->do_curl($url);
		$html = new simple_html_dom();
        $html->load($hasil_curl);
		if($html && is_object($html)){
            $result = array();
			foreach($html->find('li.b_algo') as $g){
				$item['judul'] = isset($g->find('h2 a', 0)->innertext) ? $g->find('h2 a', 0)->innertext : '';
				$item['konten'] = isset($g->find('p', 0)->innertext) ? $g->find('p', 0)->innertext : '';
                $item['judul'] = $this->clear_from_badword($item['judul']);
                $item['konten'] = $this->clear_from_badword($item['konten']);
                $item['judul'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['judul'])));
                $item['konten'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['konten'])));
                if($item['judul'] != "" && $item['konten'] != "")
				$result[] =  $item;
			}
			$html->clear();
			unset($html);
            if($result != null){
                return $result;
            }else{
                $result = array(
                    "judul" => "",
                    "konten" => ""
                );
                return array($result);
            }
		}else{
			$result = array(
                "judul" => "",
                "konten" => ""
            );
            return array($result);
        }
    }
    
    function grabbing_yahoo_article($clean_query_string){
        $param = str_replace(' ','+',$clean_query_string);
        $url = $this->yahoo_article . $param;
        $hasil_curl = $this->do_curl($url);
		$html = new simple_html_dom();
        $html->load($hasil_curl);
		if($html && is_object($html)){
            $result = array();
			foreach($html->find('div#web li') as $g){
				$item['judul'] = isset($g->find('h3.title a', 0)->innertext) ? $g->find('h3.title a', 0)->innertext : '';
				$item['konten'] = isset($g->find('p', 0)->innertext) ? $g->find('p', 0)->innertext : '';
                $item['judul'] = $this->clear_from_badword($item['judul']);
                $item['konten'] = $this->clear_from_badword($item['konten']);
                $item['judul'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['judul'])));
                $item['konten'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['konten'])));
                if($item['judul'] != "" && $item['konten'] != "")
				$result[] =  $item;
			}
			$html->clear();
			unset($html);
            if($result != null){
                return $result;
            }else{
                $result = array(
                    "judul" => "",
                    "konten" => ""
                );
                return array($result);
            }
		}else{
			$result = array(
                "judul" => "",
                "konten" => ""
            );
            return array($result);
        }
    }
    // --------------------------- END OF GRABBING ARTIKEL DARI 4 SE TERKEMUK-----------------------------

    
    // --------------------------- GRABBING GAMBAR DARI 4 SE TERKEMUK---------------------------------
    function grabbing_google_image($clean_query_string){
        $param = str_replace(' ','+',$clean_query_string);
        $url = $this->google_image . $param . "&tbs=sur:f&newwindow=1&tbm=isch";
        $hasil_curl = $this->do_curl($url);
        $html = new simple_html_dom();
        $html->load($hasil_curl);
        $result = array();
		if( $html && is_object($html) ){
            $x ;
            foreach($html->find('div[class="rg_meta notranslate"] ') as $gm){
                $gm = strip_tags($gm);
                $data = json_decode($gm, true);
			    $item['link'] = $data['ru'];
				$item['imgsrc'] = $data['ou'];
                $item['title'] = $this->clear_escape_character($data['s']);
                $item['title'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['title'])));
				$result[] =  $item;
            }
            return $result;
        }else{
			$result = array(
                "link" => "",
                "imgsrc" => "",
                "title" => ""            
            );
            return array($result);
        }
    }


    function grabbing_bing_image($clean_query_string){
        $param = str_replace(' ','+',$clean_query_string);
        $url = $this->bing_image . $param . "&qft=+filterui:license-L2_L3_L4_L5_L6_L7";
        $hasil_curl = $this->do_curl($url);
        $html = new simple_html_dom();
        $html->load($hasil_curl);
        $result = array();
		if( $html && is_object($html) ){
            $x ;
            foreach($html->find('div[class="dg_b"] div[class="imgpt"]') as $gm){
                $get_m_attr = $gm->find('a.iusc', 0)->m;
				$get_m_attr =  stripslashes ( html_entity_decode( $get_m_attr ) ) ;
				$get_json_m = json_decode( $get_m_attr,true );
			    $item['link'] = $get_json_m['purl'];
				$item['imgsrc'] = $get_json_m['murl'];
                $item['title'] = $this->clear_escape_character($gm->find('img', 0)->alt);
                $item['title'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['title'])));
				$result[] =  $item;
            }
            return $result;
        }else{
			$result = array(
                "link" => "",
                "imgsrc" => "",
                "title" => ""            
            );
            return array($result);
        }
    }
    
    function grabbing_yahoo_image($clean_query_string){
        $param = str_replace(' ','+',$clean_query_string);
        $url = $this->yahoo_image . $param . "&imgl=fsu";
        $hasil_curl = $this->do_curl($url);
        $html = new simple_html_dom();
        $html->load($hasil_curl);
        $result = array();
        if( $html && is_object($html) ){
            $x ;
            foreach($html->find('ul[id="sres"] li') as $gm){
                $get_m_attr = $gm->find('a', 0)->href;
                parse_str( $get_m_attr , $output );
                $imgurl     = isset( $output['imgurl'] ) ? $output['imgurl'] : '';
                $title     = isset( $output['tt'] ) ? $output['tt'] : '';
                
                $item['imgsrc'] = stripslashes(html_entity_decode($imgurl));
                $item['title'] = $this->clear_escape_character($title);
                $item['title'] = trim(preg_replace('/\s+/',' ', $this->clear_escape_character($item['title'])));
                $result[] =  $item;
            }
            return $result;
        }else{
            $result = array(
                "link" => "",
                "imgsrc" => "",
                "title" => ""            
            );
            return array($result);
        }
    }
    // --------------------------- END OF GRABBING GAMBAR DARI 4 SE TERKEMUK------------------------------


    function insert_post($data){
        $this->mod_post->insert_post($data);
    }

    function insert_keyword($data){
        $this->mod_keyword->insert_keyword($data);
    }

    function insert_cron($data){
        $this->mod_cron->insert_cron($data);
    }

    function insert_thumbnail($data){
        $this->mod_post->insert_thumbnail($data);
    }

    function debug(){
        $start_date = "2015-10-22 00:00:00";
        $end_date = "2018-09-21 00:00:00";
        $min = strtotime($start_date);
        $max = strtotime($end_date);
        $val = rand($min, $max);
        $tanggal_hasil = date('Y-m-d H:i:s', strtotime("2015-10-22 00:00:00"));
        $now = time(); 
        $selisih_hari = $now - strtotime($tanggal_hasil);
        echo  "selisih hari antara " . $tanggal_hasil . " dan " . date('Y-m-d H:i:s', $now) . " adalah " . round($selisih_hari / (60 * 60 * 24)) . "<br>";
        echo 30000 / round($selisih_hari / (60 * 60 * 24));

        $date = strtotime("+365 day", time());
        echo "<br>sekarang + 365 : " .date("Y-m-d", $date);
    }
}
