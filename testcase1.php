<?php
$bidRequestJson = '{
    "id": "testBID12345",
    "imp": [
        {
            "id": "1",
            "banner": {
                "w": 320,
                "h": 50,
                "pos": 1,
                "api": [1, 2, 3],
                "format": [
                    {"w": 300, "h": 250},
                    {"w": 336, "h": 280}
                ]
            },
            "displaymanager": "MY_AD_MANAGER",
            "instl": 0,
            "tagid": "1234567890123456789",
            "bidfloor": 0.05,
            "bidfloorcur": "USD",
            "secure": 1,
            "exp": 1800,
            "metric": [
                {"type": "click_through_rate", "value": 0.105, "vendor": "MY_EXCHANGE"},
                {"type": "viewability", "value": 0.92, "vendor": "MY_EXCHANGE"}
            ],
            "ext": {
                "billing_id": ["987654321", "123456789012"],
                "publisher_settings_list_id": ["5678901234567890", "112233445566778899"],
                "allowed_vendor_type": [12, 34, 56],
                "ampad": 1,
                "creative_enforcement_settings": {
                    "policy_enforcement": 1,
                    "scan_enforcement": 0,
                    "publisher_blocks_enforcement": 0
                },
                "auction_environment": 1
            }
        }
    ],
    "app": {
        "name": "com.sample.app",
        "bundle": "com.sample.app",
        "publisher": {
            "id": "pub-1234567890123456",
            "ext": {"country": "USA"}
        },
        "content": {
            "url": "https://play.google.com/store/apps/details?id=com.sample.app",
            "userrating": "4.5",
            "livestream": 1,
            "language": "en"
        },
        "storeurl": "https://play.google.com/store/apps/details?id=com.sample.app",
        "ext": {"inventorypartnerdomain": "example.com"}
    },
    "device": {
        "ua": "Mozilla/5.0 (Linux; Android 12; M2007J20CG Build/SP1A.210812.016; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/100.0.4896.60 Mobile Safari/537.36",
        "ip": "192.168.0.1",
        "geo": {
            "lat": 37.7749,
            "lon": -122.4194,
            "country": "USA",
            "city": "San Francisco",
            "zip": "94105"
        },
        "make": "samsung",
        "model": "SM-G991U",
        "os": "android",
        "osv": "12",
        "devicetype": 3,
        "ifa": "ab12cd34-56ef-78gh-90ij-klmno1234567",
        "lmt": 0,
        "w": 1080,
        "h": 1920,
        "pxratio": 3.0,
        "ext": {
            "user_agent_data": {
                "platform": {"brand": "Android", "version": ["12"]},
                "mobile": 1,
                "model": "SM-G991U",
                "browsers": [
                    {"brand": "Mozilla", "version": ["5", "0"]},
                    {"brand": "AppleWebKit", "version": ["537", "36"]},
                    {"brand": "Version", "version": ["4", "0"]},
                    {"brand": "Chrome", "version": ["100", "0", "4896", "60"]},
                    {"brand": "Mobile Safari", "version": ["537", "36"]}
                ]
            }
        }
    },
    "user": {
        "id": "USER123456",
        "ext": {}
    },
    "at": 1,
    "tmax": 2000,
    "cur": ["USD"],
    "bcat": ["IAB2-3"],
    "source": {
        "ext": {
            "omidpn": "MY_AD_PROVIDER",
            "omidpv": "ad-sdk-v1.0",
            "schain": {
                "complete": 1,
                "nodes": [
                    {"asi": "myadvertiser.com", "sid": "pub-1234567890", "hp": 0}
                ],
                "ver": "1.1"
            }
        }
    },
    "ext": {
        "google_query_id": "12345XYZ-abcdef1234567890abcdefg",
        "fcap_scope": 2,
        "privacy_treatments": {"allow_user_data_collection": 1}
    }
}';
$campaignJson = '[{
    "campaignname": "Test_Banner_13th-31st_march_Developer",
    "advertiser": "TestGP",
    "code": "118965F12BE33FB7E",
    "appid": "20240313103027",
    "tld": "https://adplaytechnology.com/",
    "portalname": "",
    "creative_type": "1",
    "creative_id": 167629,
    "day_capping": 0,
    "dimension": "320x480",
    "attribute": "rich-media",
    "url": "https://adplaytechnology.com/",
    "billing_id": "123456789",
    "price": 0.1,
    "bidtype": "CPM",
    "image_url": "https://s3-ap-southeast-1.amazonaws.com/elasticbeanstalk-ap-southeast-1-5410920200615/CampaignFile/20240117030213/D300x250/e63324c6f222208f1dc66d3e2daaaf06.png",
    "htmltag": "",
    "from_hour": "0",
    "to_hour": "23",
    "hs_os": "Android,iOS,Desktop",
    "operator": "Banglalink,GrameenPhone,Robi,Teletalk,Airtel,Wi-Fi",
    "device_make": "No Filter",
    "country": "USA",
    "city": "",
    "lat": "",
    "lng": "",
    "app_name": null,
    "user_list_id": "0",
    "adplay_logo": 1,
    "vast_video_duration": null,
    "logo_placement": 1,
    "hs_model": null,
    "is_rewarded_inventory": 0,
    "pixel_tag": null,
    "dmp_campaign_audience": 0,
    "platform": null,
    "open_publisher": 1,
    "audience_targeting": 0,
    "native_title": null,
    "native_type": null,
    "native_data_value": null,
    "native_data_cta": null,
    "native_data_rating": null,
    "native_data_price": null,
    "native_img_icon": null
}, {
    "campaignname": "Test_Banner_1st-10th_april_Developer",
    "advertiser": "TestGP",
    "code": "118965F12BE33FB7F",
    "appid": "20240414103028",
    "tld": "https://adplaytechnology.com/",
    "portalname": "",
    "creative_type": "1",
    "creative_id": 167630,
    "day_capping": 0,
    "dimension": "320x480",
    "attribute": "rich-media",
    "url": "https://adplaytechnology.com/",
    "billing_id": "123456790",
    "price": 0.2,
    "bidtype": "CPM",
    "image_url": "https://s3-ap-southeast-1.amazonaws.com/elasticbeanstalk-ap-southeast-1-5410920200615/CampaignFile/20240117030213/D300x250/e63324c6f222208f1dc66d3e2daaaf07.png",
    "htmltag": "",
    "from_hour": "0",
    "to_hour": "23",
    "hs_os": "Android,iOS,Desktop",
    "operator": "Banglalink,GrameenPhone,Robi,Teletalk,Airtel,Wi-Fi",
    "device_make": "No Filter",
    "country": "BGD",
    "city": "",
    "lat": "",
    "lng": "",
    "app_name": null,
    "user_list_id": "0",
    "adplay_logo": 1,
    "vast_video_duration": null,
    "logo_placement": 1,
    "hs_model": null,
    "is_rewarded_inventory": 0,
    "pixel_tag": null,
    "dmp_campaign_audience": 0,
    "platform": null,
    "open_publisher": 1,
    "audience_targeting": 0,
    "native_title": null,
    "native_type": null,
    "native_data_value": null,
    "native_data_cta": null,
    "native_data_rating": null,
    "native_data_price": null,
    "native_img_icon": null
}]';

require_once('bid_function.php');

echo BidRequest($bidRequestJson, $campaignJson);
