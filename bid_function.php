<?php

function BidRequest($bidRequestJson, $campaignJson) {
    // Decode the JSON inputs
    $bidRequest = json_decode($bidRequestJson, true);
    $campaigns = json_decode($campaignJson, true);

    // The existing campaign selection logic
    if (!isset($bidRequest['id'], $bidRequest['imp'], $bidRequest['device'])) {
        return json_encode(['error' => 'Invalid bid request']);
    }

    // Extract bid request details
    $deviceGeo = $bidRequest['device']['geo'] ?? [];
    $deviceOs = strtolower($bidRequest['device']['os'] ?? '');
    $bidFloor = $bidRequest['imp'][0]['bidfloor'] ?? 0;

    // Filter campaigns based on bid request
    $filteredCampaigns = array_filter($campaigns, function ($campaign) use ($deviceGeo, $deviceOs, $bidFloor) {
        if (isset($campaign['country']) && strtolower($campaign['country']) !== strtolower($deviceGeo['country'] ?? '')) {
            return false;
        }
        if (isset($campaign['hs_os']) && !in_array($deviceOs, array_map('strtolower', explode(',', $campaign['hs_os'])))) {
            return false;
        }
        if ($campaign['price'] < $bidFloor) {
            return false;
        }
        return true;
    });

    if (empty($filteredCampaigns)) {
        return json_encode(['error' => 'No matching campaigns']);
    }

    $selectedCampaign = array_reduce($filteredCampaigns, function ($best, $campaign) {
        return ($campaign['price'] > ($best['price'] ?? 0)) ? $campaign : $best;
    });

    $response = [
        'id' => $bidRequest['id'],
        'seatbid' => [
            [
                'bid' => [
                    [
                        'impid' => $bidRequest['imp'][0]['id'],
                        'price' => $selectedCampaign['price'],
                        'adid' => $selectedCampaign['creative_id'],
                        'cid' => $selectedCampaign['appid'],
                        'crid' => $selectedCampaign['creative_id'],
                        'adm' => $selectedCampaign['htmltag'] ?: "<img src='{$selectedCampaign['image_url']}' />",
                        'nurl' => "{$selectedCampaign['url']}",
                        'attr' => $selectedCampaign['attribute'],
                    ],
                ],
            ],
        ],
        'campaign_details' => [
            'campaign_name' => $selectedCampaign['campaignname'],
            'advertiser' => $selectedCampaign['advertiser'],
            'creative_type' => $selectedCampaign['creative_type'],
            'image_url' => $selectedCampaign['image_url'],
            'landing_page_url' => $selectedCampaign['url'],
            'price' => $selectedCampaign['price'],
            'dimension' => $selectedCampaign['dimension'],
            'platform' => $selectedCampaign['hs_os'],
            'device_make' => $selectedCampaign['device_make'],
            'country' => $selectedCampaign['country'],
        ],
    ];
    header('Content-Type: application/json');
    return json_encode($response, JSON_PRETTY_PRINT);
}
