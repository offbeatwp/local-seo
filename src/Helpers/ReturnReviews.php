<?php

namespace OffbeatWP\LocalSeo\Helpers;

class ReturnReviews
{

    public static function getAllReviews()
    {
        $reviews = [];

        $reviews['@context'] = "http://schema.org";
        $reviews['@type'] = setting('localseo_company_type');
        $reviews['aggregateRating'] = [];
        $reviews['name'] = 'localseo_company_name';
        $reviews['image'] = wp_get_attachment_image_src(setting('localseo_company_image'), 'large')[0];
        if (setting('company_price_range') != null) {
            $reviews['priceRange'] = setting('company_price_range');
        }
        $reviews['address'] = [
            '@type'           => 'PostalAddress',
            'addressLocality' =>
                setting('localseo_company_place') . ', ' . setting('localseo_company_country'),
            'streetAddress'   => setting('localseo_company_street') . ' ' . setting('localseo_company_number'),
            'postalCode'      => setting('localseo_company_zip_code'),
        ];

        if (setting('localseo_company_fax') != null) {
            $reviews['faxNumber'] = setting('localseo_company_fax');
        }

        if (setting('localseo_company_phone') != null) {
            $reviews['telephone'] = setting('localseo_company_phone');
        }

        $reviewCount = 0;
        $reviewValue = 0;

        foreach (setting('static_review_selector') as $review) {
            $reviewCount++;
            $reviews['review'][] = [
                '@type'        => 'Review',
                'author'       => $review['static_review_selector_author'],
                'description'  => $review['static_review_selector_review_body'],
                'name'         => $review['name'],
                'reviewRating' => [
                    '@type'       => 'Rating',
                    "bestRating"  => setting('local_seo_review_best_rating'),
                    "worstRating" => setting('local_seo_review_worst_rating'),
                    'ratingValue' => $review['local_seo_rating'],
                ],
            ];
            $reviewValue += $review['local_seo_rating'];
        }

        $reviewValue = $reviewValue / $reviewCount;

        $reviews['aggregateRating'] = [
            '@type'       => 'AggregateRating',
            'ratingValue' => $reviewValue,
            'reviewCount' => $reviewCount,
            "bestRating"  => setting('local_seo_review_best_rating'),
            "worstRating" => setting('local_seo_review_worst_rating'),
        ];

        return $reviews;
    }


}