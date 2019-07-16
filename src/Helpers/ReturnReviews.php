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
        $reviewCount = 0;
        $reviewValue = 0;
        foreach (setting('static_review_selector') as $review) {
            $reviewCount ++;
            $reviews['review'][] = [
                '@type'        => 'Review',
                'author'       => $review['static_review_selector_author'],
                'description'  => $review['static_review_selector_review_body'],
                'name'         => $review['name'],
                'reviewRating' => [
                    '@type'       => 'Rating',
                    'bestRating'  => 100,
                    'worstRating' => 1,
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
        ];

        return $reviews;
    }


}