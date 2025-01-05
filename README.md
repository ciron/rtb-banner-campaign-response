
# Bid Request and Campaign Processor

## Description
This project processes bid request and campaign JSON data by matching and merging them into a unified, formatted JSON output. The script is designed for advertising systems, ensuring efficient handling and combination of bid requests with corresponding campaign details.

---

## Features
- **Bid Request Processing**: Handles structured and complex bid request JSON data.
- **Campaign Matching**: Efficiently matches and merges campaigns with bid requests.
- **Modular Design**: The core logic is in a separate file for better organization.
- **Test Cases**: Includes a test file (`testcase1.php`) to validate the implementation with different data.
- **Pretty Output**: Outputs the merged JSON in a well-formatted manner.

---

## Prerequisites
- **PHP**: Version 7.4 or later.
- **JSON Extension**: Ensure that the JSON extension is enabled in PHP.

---

## Folder Structure

```
project/
├── index.php           # Main script with hardcoded bid request and campaign JSON data.
├── bid_function.php    # Contains the core logic for processing and merging JSON data.
├── testcase1.php       # Test case with different JSON data for validation.
├── README.md           # Project documentation.
```

---

## Installation

1. Clone or download the repository:

   ```bash
   git clone https://github.com/your-username/bid-request-campaign-processor.git
   ```

2. Navigate into the project directory:

   ```bash
   cd bid-request-campaign-processor
   ```

3. Ensure that your PHP environment is set up with version 7.4 or later and the JSON extension is enabled.

---

## Usage

### 1. Main Script (`index.php`)

- The main script contains hardcoded bid request and campaign JSON data.
- You can modify the JSON data directly in the script.
- To run the script, execute the following command in your terminal:

   ```bash
   php index.php
   ```

- The output will display the merged JSON in the terminal.

### 2. Test Script (`testcase1.php`)

- The `testcase1.php` file contains different bid request and campaign data for testing.
- You can use this to verify if the logic works as expected with alternate data.
- To run the test script, execute the following:

   ```bash
   php testcase1.php
   ```

### 3. Core Logic (`bid_function.php`)

The `bid_function.php` file contains the core logic for merging bid request and campaign data. It includes functions for:
- **Parsing and validating JSON data**.
- **Matching bid requests with campaigns**.
- **Returning formatted JSON output**.

---

## Example

### Input JSON (Example from `index.php`)

```json
{
    "id": "myB92gUhMdC5DUxndq3yAg",
    "imp": [
        {
            "id": "1",
            "banner": {
                "w": 320,
                "h": 50,
                "pos": 1,
                "api": [3, 5, 6, 7],
                "format": [
                    {"w": 776, "h": 393},
                    {"w": 667, "h": 375},
                    {"w": 640, "h": 360},
                    {"w": 592, "h": 360},
                    {"w": 568, "h": 320},
                    {"w": 320, "h": 480},
                    {"w": 750, "h": 200},
                    {"w": 400, "h": 300}
                ]
            },
            "displaymanager": "GOOGLE",
            "instl": 1,
            "tagid": "3167273236690230250",
            "bidfloor": 0.01,
            "bidfloorcur": "USD",
            "secure": 1,
            "exp": 3600,
            "metric": [
                {"type": "click_through_rate", "value": 0.19889350235462189, "vendor": "EXCHANGE"},
                {"type": "viewability", "value": 0.97999999999999998, "vendor": "EXCHANGE"}
            ],
            "ext": {
                "billing_id": ["123456789", "152349838468"],
                "publisher_settings_list_id": ["10210479292634817089", "14735124967324597266"],
                "allowed_vendor_type": [785, 767, 144],
                "ampad": 2,
                "creative_enforcement_settings": {
                    "policy_enforcement": 2,
                    "scan_enforcement": 1,
                    "publisher_blocks_enforcement": 1
                },
                "auction_environment": 0
            }
        }
    ],
    "app": {
        "name": "com.ludo.king",
        "bundle": "com.ludo.king",
        "publisher": {
            "id": "pub-5742233882270312",
            "ext": {"country": "GB"}
        },
        "content": {
            "url": "https://play.google.com/store/apps/details?id=com.firsttouchgames.dls7",
            "userrating": "4.3",
            "livestream": 0,
            "language": "en"
        },
        "storeurl": "https://play.google.com/store/apps/details?id=com.firsttouchgames.dls7",
        "ext": {"inventorypartnerdomain": ""}
    },
    "device": {
        "ua": "Mozilla/5.0 (Linux; Android 11; M2004J19C Build/RP1A.200720.011; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/107.0.5304.105 Mobile Safari/537.36",
        "ip": "103.92.152.0",
        "geo": {
            "lat": 23.774545669555664,
            "lon": 90.440811157226562,
            "country": "BGD",
            "city": "Dhaka",
            "zip": "1212"
        },
        "make": "xiaomi",
        "model": "m2004j19c",
        "os": "android",
        "osv": "11",
        "devicetype": 4,
        "ifa": "90637fa5-79c8-4a22-97bd-0c8c7e853f16",
        "lmt": 0,
        "w": 776,
        "h": 393,
        "pxratio": 2.75,
        "ext": {
            "user_agent_data": {
                "platform": {"brand": "Android", "version": ["11"]},
                "mobile": 1,
                "model": "M2004J19C",
                "browsers": [
                    {"brand": "Mozilla", "version": ["5", "0"]},
                    {"brand": "AppleWebKit", "version": ["537", "36"]},
                    {"brand": "Version", "version": ["4", "0"]},
                    {"brand": "Chrome", "version": ["107", "0", "5304", "105"]},
                    {"brand": "Mobile Safari", "version": ["537", "36"]}
                ]
            }
        }
    },
    "user": {
        "id": "CAESEK7QRNHvCqCtWwFtkJjMQVU",
        "ext": {}
    },
    "at": 1,
    "tmax": 1000,
    "cur": ["USD"],
    "bcat": ["IAB1-2"],
    "source": {
        "ext": {
            "omidpn": "Google",
            "omidpv": "afma-sdk-a-v223712999.222508000.1",
            "schain": {
                "complete": 1,
                "nodes": [
                    {"asi": "google.com", "sid": "pub-5742233882270312", "hp": 1}
                ],
                "ver": "1.0"
            }
        }
    },
    "ext": {
        "google_query_id": "AA8e6VI-G-6-PHEjFD9KLYFQqH6v_SGtU6wcSv_E4yC7YgDuY37SAecQnCz_PggyO4x3-KIFQA",
        "fcap_scope": 3,
        "privacy_treatments": {"allow_user_data_collection": 1}
    }
}
```

### Campaign Data (Example from `campaignJson`)

```json
[
{
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
}
]
```

###  Output

```json
{
  "id": "myB92gUhMdC5DUxndq3yAg",
  "seatbid": [
    {
      "bid": [
        {
          "impid": "1",
          "price": 0.1,
          "adid": 167629,
          "cid": "20240313103027",
          "crid": 167629,
          "adm": "<img src='https://s3-ap-southeast-1.amazonaws.com/elasticbeanstalk-ap-southeast-1-5410920200615/CampaignFile/20240117030213/D300x250/e63324c6f222208f1dc66d3e2daaaf06.png' />",
          "nurl": "https://adplaytechnology.com/",
          "attr": "rich-media"
        }
      ]
    }
  ],
  "campaign_details": {
    "campaign_name": "Test_Banner_13th-31st_march_Developer",
    "advertiser": "TestGP",
    "creative_type": "1",
    "image_url": "https://s3-ap-southeast-1.amazonaws.com/elasticbeanstalk-ap-southeast-1-5410920200615/CampaignFile/20240117030213/D300x250/e63324c6f222208f1dc66d3e2daaaf06.png",
    "landing_page_url": "https://adplaytechnology.com/",
    "price": 0.1,
    "dimension": "320x480",
    "platform": "Android,iOS,Desktop",
    "device_make": "No Filter",
    "country": "BGD"
  }
}
```

---

